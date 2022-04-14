<?php
/*
namespace App\Exports;

use App\models\Info;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
class InfoExport implements FromCollection,WithHeadings
{
    public function __construct($name,$date) {
    	$this->name = $name;
        $this->date = $date;
    }
    public function  headings():array{
        return  ['Loại hành động','Thời gian checkin','ảnh checkin','Mã thiết bị','Tên thiết bị','Key Code','Họ Tên','Nghề nghiệp','Chức vụ','Địa điểm','Đeo khẩu trang'];
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    /*
    public function collection()
    {
        // return Info::all();
        return Info::select('action_type','date','detected_image_url','deviceID','deviceName',
        'keycode','personName','personTitle','personType','placeName','mask')->where('personName','like','%'.$this->name.'%')->whereDate('date','=',$this->date)->get();
    }*/

    namespace App\Exports;

    use App\Models\Info;
    use Illuminate\Contracts\View\View;
    use Maatwebsite\Excel\Concerns\FromView;
    use DB;

    class InfoExport implements FromView
    {
        public function __construct($name,$dateStart,$dateEnd) {
            $this->name = $name;
            $this->dateStart = $dateStart;
            $this->dateEnd = $dateEnd;
        }
        public function view(): View
        {
            if($this->name == '' && $this->dateStart == '' && $this->dateEnd == ''){
                return view('exports.invoices', [
                    'invoices' => Info::select('action_type','date','detected_image_url','deviceID','deviceName',
                    'keycode','personID','personName','personTitle','personType','placeName','mask')->orderBy('personID','desc')->get()
                ]);
            }elseif($this->name != '' && $this->dateStart == '' && $this->dateEnd == ''){
                return view('exports.invoices', [
                    'invoices' => Info::select('action_type','date','detected_image_url','deviceID','deviceName',
                    'keycode','personID','personName','personTitle','personType','placeName','mask')->where('personName','like','%'.$this->name.'%')->orderBy('personID','desc')->get()
                ]);
            }elseif($this->name == '' && $this->dateStart != '' && $this->dateEnd != ''){
               if($this->dateStart == $this->dateEnd){
                    return view('exports.invoices', [
                    'invoices' => Info::select('personName',DB::raw('max(date) as dateEnd'),DB::raw('min(date) as dateStart'))->whereDate('date', '>=', $this->dateStart)->whereDate('date', '<=', $this->dateEnd)->groupBy('personName')->orderBy('personName','desc')->get()
                ]);
               }elseif($this->dateStart < $this->dateEnd){
                return view('exports.invoices', [
                    'invoices' => Info::select('personName','date')->whereDate('date', '>=', $this->dateStart)->whereDate('date', '<=', $this->dateEnd)->orderBy('personName','desc')->get()
                ]);
               }
            }
            else{
                return view('exports.invoices', [
                    'invoices' => Info::select('personName',DB::raw('max(date) as dateEnd'),DB::raw('min(date) as dateStart'))->where('personName','like','%'.$this->name.'%')->whereDate('date', '>=', $this->dateStart)->whereDate('date', '<=', $this->dateEnd)->groupBy('personName')->orderBy('personName','desc')->get()
                ]);
            }
        }
    }
