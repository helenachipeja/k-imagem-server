
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;


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

// Route::get('/', function () {
    // return view('welcome');
// });

Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/service', [IndexController::class, 'service'])->name('service');
Route::get('/contact', [IndexController::class, 'contact'])->name('contact');
Route::get('/faq', [IndexController::class, 'faq'])->name('faq');
Route::get('/checkout', [IndexController::class, 'checkout'])->name('checkout');
Route::get('/sigin', [IndexController::class, 'sigin'])->name('sigin');

Route::group(['middleware' => ['auth']], function () {

    Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
    // Route::get('/projects', [IndexController::class, 'projects'])->name('projects');

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    //todas rotas inseridas aqui estarao protegidas e precisarao de login
    });
