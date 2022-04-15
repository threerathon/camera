<?php

namespace App\Http\Livewire;

use App\Models\Employee;

use Barryvdh\DomPDF\Facade\Pdf;
use Livewire\Component;
use Illuminate\Http\Request;
use GuzzleHttp;
use Illuminate\Support\Facades\App;

class EmployeeController extends Component
{
    public $token;
    public $detailEmployee;
    public $updateMode = false;
    public $id_emp;
    public $aliasID;
    public $sex;
    public $name;
    public $avatar;
    public $title;
    public $type;
    public $age;
    public function render(Request $request)
    {
        $employee = employee::all();
        // dd($employee);
        // $http = new GuzzleHttp\Client;
        // if($request->session()->has('token')){
        //     $this->token = session('token')['access_token'];
        // }
        // $response = $http->post('https://partner.hanet.ai/person/getListByPlace', [
        //     'form_params' => [
        //         'token' => $this->token,
        //         'placeID' => 8011,
        //         'type' => 0
        //     ],
        // ]);
        // $employee = json_decode((string) $response->getBody(), true);
        // $employee = $employee["data"];

        return view('livewire.employee-controller',compact('employee'))->layout('layouts.admin')->slot('main');
    }

    public function detailEmployee($id){
        $employees = employee::where('code_employee', '=', $id)->first();
        $this->detailEmployee = $employees;
        //  
        // return view('livewire.employee-controller',compact('employees'));
        // $employee = Employee::where('code_employee',$id);
        // dd($employee);
        // $http = new GuzzleHttp\Client;
        // $this->updateMode = false;
        // $response = $http->post('https://partner.hanet.ai/person/getUserInfoByPersonID', [
        //     'form_params' => [
        //         'token' => $this->token,
        //         'personID' => $idEmployee,
        //     ],
        // ]);
        // $this->detailEmployee = json_decode((string) $response->getBody(), true);
        // $this->detailEmployee = $this->detailEmployee['data'];
        // $this->aliasID = $this->detailEmployee['aliasID'];
        // $this->sex = $this->detailEmployee['sex'];
        // $this->name = $this->detailEmployee['name'];
        // $this->avatar = $this->detailEmployee['avatar'];
        // $this->title = $this->detailEmployee['title'];
        // $this->type = $this->detailEmployee['type'];
        // $this->age = $this->detailEmployee['age'];
        // $this->id_emp = $this->detailEmployee['id'];
        // $this->dispatchBrowserEvent('show-modal');

    }
    public function exportDetailPDF(Request $request,$idEmployee){
        if($request->session()->has('token')){
            $token = session('token')['access_token'];
        }
        $http = new GuzzleHttp\Client;
        $this->updateMode = false;
        $response = $http->post('https://partner.hanet.ai/person/getUserInfoByPersonID', [
            'form_params' => [
                'token' => $token,
                'personID' => $idEmployee,
            ],
        ]);
        $detailEmployee = json_decode((string) $response->getBody(), true);
        $detailEmployee = $detailEmployee['data'];
        $pdf = PDF::loadView('exports.PDF.employeeDetail',compact('detailEmployee'))->setPaper('a4', 'landscape');
        // return $pdf->download('invoice.pdf');
        return $pdf->stream();
    }
            // public function Employee($idEmployee){
            //     $http = new GuzzleHttp\Client;
            //     $this->updateMode = false;
            //     $response = $http->post('https://partner.hanet.ai/person/register', [
            //         'form_params' => [
            //             'token' => $this->token,
            //             'name' => '',
            //             'file' => '',
            //             'aliasID' => '',
            //             'placeID' => '',
            //             'title' => '',
            //             'type' => '',
            //             // 'personID' => $idEmployee,
            //         ],
            //     ]);
            //     $this->aliasID = $this->detailEmployee['aliasID'];
            //     $this->name = $this->detailEmployee['name'];
            //     $this->title = $this->detailEmployee['title'];
            //     // $this->dispatchBrowserEvent('show-modal');
            // }

}
