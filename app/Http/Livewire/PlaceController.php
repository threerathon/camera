<?php

namespace App\Http\Livewire;
use Illuminate\Http\Request;
use GuzzleHttp;
use Livewire\Component;

class PlaceController extends Component
{
    public function render()
    {
        $http = new GuzzleHttp\Client;

        $responsePlace = $http->post('https://partner.hanet.ai/place/getPlaces', [
            'form_params' => [
                'token' => 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6IjIwNTYyODUzMDM1ODc0Mzg1OTIiLCJlbWFpbCI6ImNoaW5oYW44Njg5QGdtYWlsLmNvbSIsImNsaWVudF9pZCI6IjE0NDRmOGQ3ODJiOWExOWIxZGJhYWIwOWY3M2Q4YWRiIiwidHlwZSI6ImF1dGhvcml6YXRpb25fY29kZSIsImlhdCI6MTY0NTM1MDMxMywiZXhwIjoxNjc2ODg2MzEzfQ.2f_YpAb55_-KmIM7jxEFFlWgHYl8eAMZO8VmPJoFNCg',
            ],
        ]);
        $place = json_decode((string) $responsePlace->getBody(), true);
        foreach ($place['data'] as $places) {
            $responseDevice = $http->post('https://partner.hanet.ai/device/getListDeviceByPlace', [
                'form_params' => [
                    'token' => 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6IjIwNTYyODUzMDM1ODc0Mzg1OTIiLCJlbWFpbCI6ImNoaW5oYW44Njg5QGdtYWlsLmNvbSIsImNsaWVudF9pZCI6IjE0NDRmOGQ3ODJiOWExOWIxZGJhYWIwOWY3M2Q4YWRiIiwidHlwZSI6ImF1dGhvcml6YXRpb25fY29kZSIsImlhdCI6MTY0NTA2OTgxOSwiZXhwIjoxNjc2NjA1ODE5fQ.QUF-9IVe1xfkILfMSZCmpDmDi4meBXgGFnHwoODAEwY',
                    'placeID' =>  $places['id']
                ],
            ]);
        }
        $device = json_decode((string) $responseDevice->getBody(), true);
        $device = (object)$device;
        $place = (object)$place;

        return view('livewire.place-controller',compact('place','device'))->layout('layouts.admin')->slot('main');
    }
}
