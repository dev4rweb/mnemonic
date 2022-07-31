<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\PagesController;
use App\Models\Visitor;
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

/*Route::get('/', function () {
    return view('welcome');
});*/
$unique_ip = true;
$visitors = Visitor::all();
foreach($visitors as $visitor){
    if($visitor->ip_address == request()->ip()){
        $unique_ip = false;
        $visitor->count += 1;
        $visitor->save();
    }
}
if($unique_ip == true){
    $visitor = Visitor::create([
        'ip_address' => request()->ip(),
    ]);
}

// Auth
//Route::get('login', [AuthenticatedSessionController::class, 'create'])
//    ->name('login')
//    ->middleware('guest');

Route::get('/', [PagesController::class, 'index']);
Route::inertia('/about', 'AboutPage');
Route::inertia('/contacts', 'ContactsPage');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
