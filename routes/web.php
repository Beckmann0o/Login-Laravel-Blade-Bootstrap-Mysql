    <?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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

//VISTAS
Route::get('/', function () {
    return view('auth.login');
});

Route::get('/vista/register', function () {
    return view('auth.register');
});

Route::get('/vista/login', function () {
    return view('auth.login');
});



//SOLICITUD REGISTRO
Route::post('/register',[RegisterController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth')->group(function(){
    Route::get('/logout', [AuthController::class, 'logout']);
    Route::get('/vista/profile',[UserController::class, 'profile']);


    //RUTA OPERACIONES DE TAREA
    Route::post('/vista/createtask', [TaskController::class, 'create']);
    Route::delete('vista/deletetask/{id}',[TaskController::class, 'deletetask']);
    Route::get('/vista/task',[TaskController::class,'getTasks']);
    Route::put('/vista/updatetask',[TaskController::class,'updatetask']);
});





