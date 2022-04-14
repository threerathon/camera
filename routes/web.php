<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\InfoControoler;
use App\Http\Livewire\CheckInController;
use App\Http\Livewire\DashboardController;
use App\Http\Livewire\EmployeeController;
use App\Http\Livewire\LoginController;
use App\Http\Livewire\PlaceController;
use App\Http\Livewire\RegisterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
    Route::get('/login',LoginController::class)->name('login');
    Route::post('/handel/login',[LoginController::class,'login'])->name('handel-login');
    Route::get('/register',RegisterController::class)->name('register');
    Route::middleware(['auth'])->group(function () {
        Route::get('auth/redirect',[AuthController::class,'redirect'])->name('redirect');
        Route::get('auth/callback',[AuthController::class,'callback'])->name('callback');
        Route::get('/',DashboardController::class)->name('dashboard');
        Route::get('/check-in',CheckInController::class)->name('checkin');
        Route::get('/places',PlaceController::class)->name('places');
        Route::get('/employee',EmployeeController::class)->name('employee');
        Route::get('/employee/detail/PDF/{id}',[EmployeeController::class,'exportDetailPDF'])->name('detail.PDF');
        Route::get('/logout',[LoginController::class,'logout'])->name('logout');
    });
// Route::get('/check-in',[InfoControoler::class,'checkIn'])->name('check-in');
// Route::get('/search',[InfoControoler::class,'search'])->name('search-name');
// Route::get('/export/excel/{name}/{date_start}/{date_end}',[InfoControoler::class,'exportIntoExcel'])->name('excel-export');
// Route::get('/export/excel/{date_start}/{date_end}',[InfoControoler::class,'exportIntoExcelMissName'])->name('excel-export-missname');
// Route::get('/welcome',function(){
//     return view('welcome');
// });
// Route::get('/register',function(){
//     return view('register');
// });
// Route::get('/login',function(){
//     return view('login');
// });
// Route::get('/{info}',[InfoControoler::class,'delete'])->name('delete');
// Route::get('/info/destroy',[InfoControoler::class,'destroy'])->name('destroy');
Route::get('/redirect', function () {
    $query = http_build_query([
        'client_id' => 	'1',
        'redirect_uri' => 'http://localhost:8000/',
        'response_type' => 'code',
        'scope' => '',
    ]);

    return redirect('http://localhost:8000/oauth/authorize?'.$query);
});
Route::get('/callback', function (Request $request) {
    $http = new GuzzleHttp\Client;

    $response = $http->post('https://oauth.hanet.com/token', [
        'form_params' => [
            'grant_type' => 'authorization_code',
            'client_id' => '1',
            'client_secret' => '9DE6eRFfSdPm26AkxmETpayd5QFVGKuCsn72cUPN',
            'redirect_uri' => 'http://localhost:8000/callback',
            'code' => $request->code,
        ],
    ]);
    return json_decode((string) $response->getBody(), true);
})->name('callback');
