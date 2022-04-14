<?php

namespace App\Http\Livewire;
use Livewire\WithPagination;
use Livewire\Component;
use App\Models\Info;
use App\Exports\InfoExport;
use Excel;

class CheckInController extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $name = "";
    public $startDate ="";
    public $endDate ="";
    public function render()
    {
        if($this->name == '' && $this->startDate == '' && $this->endDate == ''){
            $info = Info::orderBy('date','desc')->paginate(5);
            $count_info = Info::count();
        }
        elseif($this->name != '' && $this->startDate == '' && $this->endDate == ''){
            $info = Info::where('personName','like','%'.$this->name.'%')->orderBy('date','desc')->paginate(5);
            $count_info = Info::where('personName','like','%'.$this->name.'%')->count();
        }
        elseif($this->name == '' && $this->startDate != '' && $this->endDate != ''){
            $info = Info::whereDate('date', '>=', $this->startDate)->whereDate('date', '<=', $this->endDate)->orderBy('date','desc')->paginate(5);
            $count_info = Info::whereDate('date', '>=', $this->startDate)->whereDate('date', '<=', $this->endDate)->count();
        }else{
            $info = Info::where('personName','like','%'.$this->name.'%')->whereDate('date', '>=', $this->startDate)->whereDate('date', '<=', $this->endDate)->orderBy('date','DESC')->orderBy('date','desc')->paginate(5);
            $count_info = Info::where('personName','like','%'.$this->name.'%')->whereDate('date', '>=', $this->startDate)->whereDate('date', '<=', $this->endDate)->orderBy('date','DESC')->count();
        }
        return view('livewire.check-in-controller',compact('info','count_info'))->layout('layouts.admin')->slot('main');
    }
    public function find(){
        dd($this->search);
        $info = Info::where('personName','like','%'.$this->search.'%')->paginate(5);
        return view('livewire.check-in-controller',compact('info'))->layout('layouts.admin')->slot('main');
    }
    public function exportIntoExcel(){
        return Excel::download(new InfoExport($this->name,$this->startDate,$this->endDate),'Export_'.$this->startDate.'.xlsx');
    }
}
