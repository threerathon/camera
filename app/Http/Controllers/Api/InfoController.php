<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Info;
class InfoController extends Controller
{
    public function index(){
        $info = Info::get();
        return response()->json($info,200);
    }

    public function store(Request $request){
        $data = $request->all();
        if($data!=[]){
            $info = Info::create($data);
            return response()->json($info,200);
        }
        else{
            return response()->json($data,200);
        }
    }
    public function delete($info){
        Info::find($info)->delete();
        return response()->json($info,200);
    }
}
