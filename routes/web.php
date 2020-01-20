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
/*start website routes*/
Route::get('/', function () {
    return view('Welcome');
});

Route::get('/index', function () {
    return view('index');
});


Route::get('/about', function () {
    return view('about');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/doctors', function () {
    return view('doctors');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/appointment', function () {
    return view('appointment');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});






/*end website routes*/



/*start dashboard routes*/

/*Route::get('/dashboard', function () {
    return view('dashboard.index');
});*/

Route::get('/dashboard/login', function () {
    return view('dashboard.login');
});

/*Route::get('/dashboard/role-register', function () {
    return view('dashboard.register');
});*/
Route::get('/dashboard/role-register','Admin\DashboardController@registered');
Route::get('/role-edit/{id}','Admin\DashboardController@registeredit');
Route::put('/role-register-update/{id}','Admin\DashboardController@registerupdate');
Route::delete('/role-delete/{id}','Admin\DashboardController@registerdelete');


Route::get('/dashboard/404', function () {
    return view('dashboard.404');
});

Route::get('/dashboard/blank', function () {
    return view('dashboard.blank');
});

Route::get('/dashboard/buttons', function () {
    return view('dashboard.buttons');
});

Route::get('/dashboard/cards', function () {
    return view('dashboard.cards');
});

Route::get('/dashboard/charts', function () {
    return view('dashboard.charts');
});

Route::get('/dashboard/forgot-password', function () {
    return view('dashboard.forgot-password');
});

Route::get('/dashboard/tables', function () {
    return view('dashboard.tables');
});

Route::get('/dashboard/utilities-animation', function () {
    return view('dashboard.utilities-animation');
});

Route::get('/dashboard/utilities-border', function () {
    return view('dashboard.utilities-border');
});

Route::get('/dashboard/utilities-color', function () {
    return view('dashboard.utilities-color');
});

Route::get('/dashboard/patient-contact', function () {
    $data=App\Contact::all();
    return view('dashboard.patient-contact')->with('contacts',$data);
});

Route::get('/dashboard/patient-app', function () {
    $data=App\Appointment::all();
    return view('dashboard.patient-app')->with('appointments',$data);
    
});

/*Route::get('/dashboard/patient-contact', function () {
    $data=App\Appointment::all();
    return view('dashboard.patient-contact')->with('appointments',$data);
});*/

Route::delete('/contact-delete/{id}','ContactController@contactdelete');



/*end dashboard routes*/




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' =>['auth','admin']], function(){
    /*Route::get('/index', function () {
        return view('index');
    });*/
    Route::get('/dashboard', function () {
        return view('dashboard.index');
    });
    Route::get('/doctor/doc_dash', function () {
        return view('doctor.doc_dash');
    });
    
    

});
Route::get('/index1', function () {
    return view('index1');
});

Route::get('/patient/patient_dash', function () {
    return view('patient.patient_dash');
});

/*contact routes*/

Route::post('/save-contact','ContactController@store');
Route::post('/saveAppointment','Admin\AppointmentController@store');

