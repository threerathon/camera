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

    class InfoExportMissName implements FromView
    {
        public function __construct($dateStart,$dateEnd) {
            $this->dateStart = $dateStart;
            $this->dateEnd = $dateEnd;
        }
        public function view(): View
        {
            return view('exports.invoices', [
                'invoices' => Info::select('action_type','date','detected_image_url','deviceID','deviceName',
                'keycode','personID','personName','personTitle','personType','placeName','mask')->whereDate('date', '>=', $this->dateStart)->whereDate('date', '<=', $this->dateEnd)->orderBy('date','desc')->get()
            ]);
        }
    }
