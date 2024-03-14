<?php

use App\Http\Controllers\BarcodeController;
use App\Http\Controllers\FirstController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BladeController;
use App\Http\Controllers\HtmlFormController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SessionController;

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

/*
------STRUCTURE FILE PATH--------------
Route::get('Url','filepath');
Route::post('Url',[FirstController::class,'FunctionName']);
*/

Route::get('/', function (){
    return view('welcome');
});

Route::get('/practice', function() {
    return view('learning');
});

Route::get('first1',[FirstController::class,'first']);
Route::get('first2/{id}',[FirstController::class,'first_id']);

//_______________PASSING DATA FORM THE URL USIG BLADE FILE ---for funcion we have to pass the variable name
Route::get('passingdataUrl/{name}',function ($name) {
    return view('passingdata_url',['name' => $name]);
});

//--PATH IS GIVING USING ONLY VIEW FILES-------------
        //----component IT IS URL AND  components->IT IS BLADE FILE.NAME-------------
Route::view('component', 'components');
Route::view('about','about');
Route::get('blade',[BladeController::class,'UseOfBlade']);
// Html Form  creating Dispalying Controller
Route::post('html_form',[HtmlFormController::class,'saveData']);
Route::view("login",'htmlform');
// Route::view("home",'home');
//Route::view('middleware',"middleware");
Route::view('noaccess','noaccess');


//-----------------------GROUPING ROUTES URL ACCESSING THR URLs HERE IT WILL ACCESS ONLY GIVEN ROUTES IN THIS GROUP--------------------------------//
Route::group(['middleware'=>['groupAgeCheck']],function(){
    Route::view('about','about');
    Route::view("home",'home');

    Route::get('/', function (){
        return view('welcome');
    });
});
//-----------------------SINGLE  ROUTES URL ACCESSING THR URLs HERE IT WILL ACCESS ONLY GIVEN ROUTES IN THIS GROUP--------------------------------//
Route::view("login",'htmlform')->middleware('singleRouteAgeCheck');
Route::view("home",'home')->middleware('singleRouteAgeCheck');
//-------------------Sessoin Controller ---------------------------------------
Route::view('login','session');
Route::post('session',[SessionController::class, 'LogIn']);
//-------------------------------------BARCODE CONTROLLER --------------------------
Route::get('barcode-scanner',[BarcodeController::class,'barcode']);
Route::view('barcode-generator','barcode_example');
Route::get('product',[ProductController::class,'index']);
Route::get('create',[ProductController::class,'create']);
Route::post('post',[ProductController::class,'store']);
