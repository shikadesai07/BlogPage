<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;
use App\Http\Livewire\BlogView;
use App\Http\Livewire\DraftList;
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

Route::view('/', 'welcome');

Route::view("registration", "registration");
Route::post("registration", [Users::class, "getRegisterationData"]);

Route::view('userhome', 'userhome');
Route::view('adminhome', 'adminhome');
Route::view("login", "login");

Route::post("login", [Users::class, "logindata"]);

//Route::get("adminhome/{blogid}", BlogView::class);
Route::get("{home}/{blogid}", BlogView::class);
Route::get("draft-list", DraftList::class);

Route::post("draft-list", [DraftList::class, "postDraft"]);

Route::get('/logout', function () {
    if (session()->has('user')) {
        session()->pull('user');
    }
    return redirect('login');
});
