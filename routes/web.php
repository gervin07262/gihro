<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('precios', function () {
    return view('precios');
});

Route::get('contacto', function () {
    return view('contacto');
});

Route::get('aviso-legal', function () {
    return view('aviso-legal');
});

Route::get('preguntas-frecuentes', function () {
    return view('preguntas-frecuentes');
});

Route::get('panel','Auth\LoginController@getLogin');

Route::post('panel/auth/login', 'Auth\LoginController@postLogin')->name('panel.auth.login');

Route::get('registerParents','Auth\RegisterController@getRegisterParents');
Route::post('registerParents','Auth\RegisterController@postRegisterParents')->name('panel.auth.registerParents');
Route::get('registerCenters','Auth\RegisterController@getRegisterCenters');
Route::post('registerCenters', 'Auth\RegisterController@postRegisterCenters')->name('panel.auth.registerCenters');

Auth::routes();

Route::group(['prefix' => 'panelDirectors', 'middleware' => 'Director'], function() {
    // profile
    Route::resource('profile', 'Directors\ProfileController',[
      'only' => ['edit', 'update'],
      'as' => 'panelDirectors'
    ]);
    // teachers
    Route::resource('teachers', 'Directors\TeacherController', ['as' => 'panelDirectors']);
    // classrooms
    Route::resource('classrooms', 'Directors\ClassroomController', [
      'only' => ['index', 'create', 'store'],
      'as' => 'panelDirectors']);
    // classrooms - teachers
    Route::resource('classrooms.teachers', 'Directors\ClassroomTeacherController',[
      'only' => ['create', 'store'],
      'as'=> 'panelDirectors']);
    // classrooms - kids
    Route::resource('classrooms.kids', 'Directors\ClassroomKidController',[

      'as'=> 'panelDirectors']);
    // classrooms - menus
    Route::resource('classrooms.menus', 'Directors\ClassroomMenuController', [
      'except' => ['create', 'show', 'edit'],
      'as' => 'panelDirectors']);
    Route::get('classrooms/{id}/menus-list','Directors\ClassroomMenuController@menusList')->name('panelDirectors.menusList');
    // locations
    Route::get('locations/{id}','ProvinceController@getLocations');
    // calendar
    Route::get('calendar-events', 'Directors\CalendarController@initCalendar')->name('panelDirectors.calendarEvents');
    Route::resource('calendar', 'Directors\CalendarController', [
      'except' => ['create', 'edit', 'show'],
      'as' => 'panelDirectors'
    ]);
    //invoices
    Route::get('invoices','Directors\InvoiceController@index')->name('panelDirectors.invoices');
    Route::get('invoices/{id}/printInvoice','Directors\InvoiceController@printInvoice')->name('panelDirectors.invoices.printInvoice');
    // calendar
});

Route::group(['prefix' => 'panelTeachers', 'middleware' => 'Teacher'], function() {
  // profile
  Route::resource('profile', 'Teachers\ProfileController',[
    'only' => ['edit', 'update'],
    'as' => 'panelTeachers'
  ]);
  //kids
  Route::resource('kids', 'Teachers\KidController', [
    'only' => ['index'],
    'as' => 'panelTeachers'
  ]);

  Route::resource('kids.reviews', 'Teachers\KidReviewController',[
    'only' => ['index', 'create', 'store', 'show'],
    'as'=> 'panelTeachers']);
  // calendar
  Route::get('calendar-events', 'Teachers\CalendarController@initCalendar')->name('panelTeachers.calendarEvents');
  Route::resource('calendar', 'Teachers\CalendarController', [
    'only' => ['index'],
    'as' => 'panelTeachers'
  ]);
  // classrooms - menus
  Route::get('classrooms/{id}/menus-list','Teachers\ClassroomMenuController@menusList')->name('panelTeachers.menusList');
  Route::resource('classrooms.menus', 'Teachers\ClassroomMenuController', [
    'only' => ['index'],
    'as' => 'panelTeachers'
  ]);
});

Route::group(['prefix' => 'panelKids', 'middleware' => 'Kid'], function() {
  //profile
  Route::resource('profile', 'Kids\ProfileController',[
    'only' => ['edit', 'update'],
    'as' => 'panelKids'
  ]);
  // reviews
  Route::resource('kids.reviews', 'Kids\KidReviewController',[
    'only' => ['index', 'show'],
    'as'=> 'panelKids']);
});

Route::get('logout', '\Gihro\Http\Controllers\Auth\LoginController@logout');
