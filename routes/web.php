<?php
use App\Http\Controllers\AuthController;
use App\Http\Middleware\Checkform;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::post('logout',[AuthController::class,"logout"]);
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
 
# Login and Register Pages
Route::get('/Login',[AuthController::class,'loginForm']);
Route::post('/Login',[UserController::class,'CheckUser']);
Route::get('/register',[AuthController::class,'registerForm']);
Route::post('/Register',[UserController::class,'InsertUser']);
require __DIR__ . '/auth.php';
            
# Program pages
// Route::get('/homepage', [PostController::class, 'ShowPosts']);
Route::get('/addnewpost',[PostController::class,'AddPostPage']);
Route::post('/addnewpost',[PostController::class,'InsertPost']);
Route::get('/postpage/{id}',[PostController::class,'ShowPost']);
Route::post('/postpage',[PostController::class,'AddComment']);
//Route::get('Login',[PostController::class,'ShowPost']);