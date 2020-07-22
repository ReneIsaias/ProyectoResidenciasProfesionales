<?php

use Illuminate\Support\Facades\Route;
use App\User;
use App\Permission\Models\Role;
use App\Permission\Models\Permission;
use Illuminate\Support\Facades\Gate;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/test', function () {

    $user =User::find(2);

    //$user->roles()->sync([2]);
    Gate::authorize('haveaccess','role.show');
    return $user;
    //return $user->havePermission('role.create');
});

Route::resource('/role', 'RoleController')->names('role');

Route::resource('/user', 'UserController', ['except'=>[
    'create','store']])->names('user');

Route::resource('/career', 'CareerController')->names('career');

Route::resource('/covenant', 'CovenantController')->names('covenant');

Route::resource('/semester', 'SemesterController')->names('semester');

Route::resource('/studyplan', 'StudyplanController')->names('studyplan');

Route::resource('/typebeca', 'TypebecaController')->names('typebeca');

Route::resource('/typesafe', 'TypesafeController')->names('typesafe');

Route::resource('/typefamily', 'TypefamilyController')->names('typefamily');

Route::resource('/post', 'PostController')->names('post');

Route::resource('/degrestudy', 'DegrestudyController')->names('degrestudy');

Route::resource('/sector', 'SectorController')->names('sector');

Route::resource('/situationproyect', 'SituationproyectController')->names('situationproyect');

Route::resource('/turn', 'TurnController')->names('turn');

Route::resource('/typefile', 'TypefileController')->names('typefile');

Route::resource('/relative', 'RelativeController')->names('relative');

Route::resource('/titular', 'TitularController')->names('titular');

Route::resource('/report', 'ReportController')->names('report');

Route::resource('/busines', 'BusinesController')->names('busines');

Route::resource('/proyect', 'ProyectController')->names('proyect');

Route::resource('/staff', 'StaffController')->names('staff');

Route::resource('/persona', 'PersonaController')->names('persona');


Route::resource('/resident', 'ResidentController')->names('resident');

Route::resource('/calificar', 'ProyectUserController')->names('calificar');


/*
////Listar
Route::get('/resident','ResidentController@index')->name('resident.index');
////Ver fomrulario de creacion
Route::post('/resident/create','ResidentController@create')->name('resident.create');
////creacion
Route::post('/resident/store','ResidentController@store')->name('resident.store');
////Ver el detalle
Route::get('/resident/{id}','ResidentController@show')->name('resident.show');
////Ver formulario de edicion
Route::get('/resident/{id}/edit','ResidentController@edit')->name('resident.edit');
////Actuaiizar
Route::put('/resident/{id}','ResidentController@update')->name('resident.update');
////Eliminar
Route::delete('/resident/{id}','ResidentController@destroy')->name('resident.destroy'); */
////Buscar
Route::get('/search','ResidentController@search')->name('search');
////Tramita
Route::post('/resident/tramita','ResidentController@tramita')->name('resident.tramita');
