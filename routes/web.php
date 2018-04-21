<?php

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
Route::get('/index', function(){
  return View::make('index');
});

Route::get('/login/signin', 'Auth\LoginController@login')->name('log');
Route::get('/msscontent/dashboard', 'Auth\LoginController@dashboard');
Route::post('/msscontent/dashboard', 'Auth\LoginController@loginprocess');
Route::post('/signup/register', 'Auth\RegisterController@store');
Route::get('/logout', 'Auth\LoginController@logout');
Route::get('/signup/register', function(){
  return View::make('signup.register');
});

Route::post('/index', 'Auth\LoginController@store')->name('reserve');
Route::get('/index', 'Auth\LoginController@display');
Route::get('/getindex/{id}', 'Auth\LoginController@displayresu');


// Doctors routes
Route::resource('/msscontent/addnewdoctor', 'Auth\doctorlistcontroller');
Route::post('/msscontent/addnewdoctor', 'Auth\doctorlistcontroller@store')->name('insert');
Route::get('/msscontent/dutyroster', 'Auth\doctorlistcontroller@show')->name('show');
Route::get('/edit', 'Auth\doctorlistcontroller@edit');
Route::put('/msscontent/editdoctor', 'Auth\doctorlistcontroller@update');
Route::post('/deleterow', 'Auth\doctorlistcontroller@destroy');

// Patients routes
Route::resource('/msscontent/patients/addpatient', 'Auth\patientlistController');
Route::post('/msscontent/patients/addpatient', 'Auth\patientlistController@store')->name('addnew');
Route::get('/msscontent/patients/patientstatus', 'Auth\patientlistController@show')->name('showdata');
Route::get('/msscontent/patients/addpatient', 'Auth\patientlistController@count');
Route::get('/editpat', 'Auth\patientlistController@edit');
Route::put('/msscontent/patients/editpatient', 'Auth\patientlistController@update');
Route::post('/deletecol', 'Auth\patientlistController@destroy');
Route::get('/msscontent/patients/admissionform', 'Auth\patientlistController@pdfform');

// Consultation routes
Route::resource('/msscontent/patients/consultation/consult', 'Auth\consultcontroller');
Route::get('/editt', 'Auth\consultcontroller@edit');
Route::put('/msscontent/patients/consultation/consult', 'Auth\consultcontroller@update');
Route::get('/msscontent/patients/consultation/consultationreport/{id}', 'Auth\consultcontroller@consult');

//Reservation report routes
Route::resource('/msscontent/patients/requests', 'Auth\patientreserve');
Route::post('/msscontent/patients/requests', 'Auth\patientreserve@sendSMS')->name('sms');

// Laboratory Results routes
Route::resource('/msscontent/departments/laboratory/xray/labxray', 'Auth\resultscontroller');
Route::post('/msscontent/departments/laboratory/xray/labxray', 'Auth\resultscontroller@store')->name('inss');
Route::get('/msscontent/departments/laboratory/xray/pdf/{id}', 'Auth\resultscontroller@downloadPDF');
Route::post('/msscontent/departments/laboratory/xray/labxray/{id}', 'Auth\resultscontroller@destroy');
Route::get('/getsearch', 'Auth\resultscontroller@search');

Route::resource('/msscontent/departments/laboratory/ctscan/ctscan', 'Auth\ctscanResultsController');
Route::post('/msscontent/departments/laboratory/ctscan/ctscan', 'Auth\ctscanResultsController@store')->name('cts');
Route::get('/msscontent/departments/laboratory/ctscan/pdf/{id}', 'Auth\ctscanResultsController@pdfDownload');

Route::resource('/msscontent/departments/laboratory/cbc/cbc', 'Auth\cbcController');
Route::post('/msscontent/departments/laboratory/cbc/cbc', 'Auth\cbcController@store')->name('sub');
Route::get('/msscontent/departments/laboratory/cbc/pdf/{id}', 'Auth\cbcController@download');
Route::post('/msscontent/departments/laboratory/cbc/cbc/{id}', 'Auth\cbcController@destroy');

Route::resource('/msscontent/departments/laboratory/obgyn/obgyne', 'Auth\obgyneResultsController');
Route::resource('/msscontent/departments/laboratory/fbs/fbs', 'Auth\fbsResultsController');

Route::resource('/msscontent/departments/laboratory/diagnostics/urinalysis', 'Auth\diagnosticsResultsController');
Route::post('/msscontent/departments/laboratory/diagnostics/urinalysis', 'Auth\diagnosticsResultsController@store')->name('sto');
Route::get('/msscontent/departments/laboratory/diagnostics/pdf/{id}', 'Auth\diagnosticsResultsController@pdfdl');

Route::resource('/msscontent/departments/laboratory/cholesterol/cholesteroltests', 'Auth\cholesterolController');

// Reservation routes
Route::resource('/msscontent/reservation/patientreservation', 'Auth\ReservationController');
Route::get('/msscontent/reservation/createreservation', 'Auth\ReservationController@create');

Route::post('/msscontent/reservation/createreservation', 'Auth\ReservationController@store')->name('store');

// Doctor Availability routes
Route::resource('/msscontent/reservation/availability/availability', 'Auth\AvailabilityDoctor');
Route::get('/search', 'Auth\AvailabilityDoctor@search');
