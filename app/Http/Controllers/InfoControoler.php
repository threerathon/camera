<?php

namespace App\Http\Controllers;

use App\Models\Info;
use Illuminate\Http\Request;
use App\Exports\InfoExport;
use App\Exports\InfoExportMissName;
use Excel;
class InfoControoler extends Controller
{
    public function index(){
        $info = Info::orderBy('date','DESC')->get();
        return view('index',compact('info'));
    }
    public function checkIn(){
        $info = Info::orderBy('date','DESC')->get();
        return view('checkin',compact('info'));
    }
    public function search(Request $request){
        $name = $request->input('getName');
        $dateStart = $request->input('getDate');
        $dateEnd = $request->input('getDateEnd');
        $info = Info::where('personName','like','%'.$name.'%')->whereDate('date', '>=', $dateStart)->whereDate('date', '<=', $dateEnd)->orderBy('date','DESC')->get();
        $getName = $name;
        $getDate = $dateStart;
        $getDateEnd = $dateEnd;
        return view('checkin',compact('info','getName','getDate','getDateEnd'));
    }

    public function delete($info){
        Info::find($info)->delete();
        return redirect()->route('index');
    }
    public function destroy(){
        Info::truncate();
        return redirect()->route('index');
    }
    public function exportIntoExcel($name,$dateStart,$dateEnd){
        return Excel::download(new InfoExport($name,$dateStart,$dateEnd),$dateStart.'.xlsx');
    }
    public function exportIntoExcelMissName($dateStart,$dateEnd){
        return Excel::download(new InfoExportMissName($dateStart,$dateEnd),$dateStart.'.xlsx');
    }
}
