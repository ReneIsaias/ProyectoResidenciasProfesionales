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
