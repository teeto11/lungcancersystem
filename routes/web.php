<?php
use App\Admin;
use App\Question;
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
Route::get('add-admin','AdminController@admin');
Route::post('add-admin','AdminController@addAdmin');
Route::get('all-admins','AdminController@alladmins');
Route::get('add-question','AdminController@questions');
Route::get('all-questions','AdminController@allquestions');
Route::post('add-question','AdminController@storequestions');
Route::get('delete-admin/{id}','AdminController@deleteadmin');
Route::get('/questions','QuestionController@questions');
Route::post('/questions','QuestionController@result');
Route::get('delete-question/{id}','AdminController@deletequestion');
Route::get('edit-question/{id}','AdminController@editquestion');
Route::post('edit-question','AdminController@editquestionstore');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'admin_auth'], function(){
    Route::get('/admin_home', function(){
        $admincount = Admin::count();
        $questioncount = Question::count();
        $data = [
             'admincount' => $admincount,
             'questioncount' => $questioncount
        ];
      return view('admin.home',$data);
    });
    Route::post('admin_logout', 'AdminAuth\LoginController@logout');
    });
    
    Route::group(['middleware' => 'admin_guest'], function() {
    Route::get('admin_register', 'AdminAuth\RegisterController@showRegistrationForm');
    Route::post('admin_register', 'AdminAuth\RegisterController@register');
    Route::get('admin_login', 'AdminAuth\LoginController@showLoginForm');
    Route::post('admin_login', 'AdminAuth\LoginController@login');
    });