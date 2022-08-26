<?php



use App\Http\Controllers\usuarioController;
use illuminate\Support\Facades\Route;

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

Route::get('/', [usuarioController::class,'index']);

Route::get('users/create',function (){
    return "Página de creación de usuario";
});

// Route::get('users/{nombre}',function ($nombre){
//     return "Bienvenido Usuario: $nombre";
// });
// Route::get('users/{nombre}/{nacionalidad}',function ($nombre,$nacionalidad){
//     return "Bienvenido Usuario: $nombre, nacionalidad: $nacionalidad";
// });
Route::get('users/{nombre}/{nacionalidad?}',function ($nombre,$nacionalidad=NULL){
    if($nacionalidad){
        return "Bienvenido Usuario: $nombre, nacionalidad: $nacionalidad";
    }else{
        return "Bienvenido Usuario: $nombre";
    }
});

