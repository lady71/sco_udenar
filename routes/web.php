<?php

use App\Http\Controllers\primercontrolador;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('/test', function () {
    return ("Bienvenidos a laravel");
});

Route::get('/test', function () {
    return view('test');
});
Route::get('/crudy', function () {
    $age = 33;
    $data = ['name' => 'leydy ', 'age' => $age];

    return view('crud/index', $data);
})->name('crud');

Route::get('/contact', function () {
    //return redirect('/contact2');
    return to_route('contact2');
})->name('contact');
Route::get('/contact2', function () {

    return view('contact2');
})->name('contact2');
Route::get('/contact', function () {

    return view('contact', ['name' => 'juan']);
})->name('contact');

Route::get('/semin', function () {
    //return redirect('/contact2');
    return to_route('semin2');
})->name('semin');

Route::get('/semin2', function () {

    return view('semin2');
})->name('semin2');


Route::get('/table', function () {

    $num = 5;
    return view('table', ['num' => $num]);
})->name('table');*/
Route::get('test',[primercontrolador::class,'index']);
Route::get('test2',[\App\Http\Controllers\SegundoControlador::class,'index']);
Route::resource('post',PrimerControlador::class);
Route::get('otro/{post}',[PrimerControlador::class,'otro']);
Route::get('otro/{post?}/{otro?}',[PrimerControlador::class,'otro']);