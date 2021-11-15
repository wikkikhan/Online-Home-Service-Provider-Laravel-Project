<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\EmployeeController;
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



//*********************************
//  Customer Part
//********************************
Route::get('/index', function () {
    if(session()->has('cnic') )
    {  
        return view('users/index');
    }
    return view('users/login');
  
});
Route::get('/Services', function () {
    if(session()->has('cnic'))
    {
        return redirect('users/Services');
    }
    return view('users/login');
});
//if already login so login page will not show till logout
Route::get('/login', function () {
    if(session()->has('cnic'))
    {
        return redirect('index');
    }
    return view('users/login');
});
Route::get('/logout', function () {
    if(session()->has('cnic'))
    {
        session()->pull('cnic');
        session()->pull('customer_name');
    }
    return view('users/login');
});


//logout for the customer 

Route::get('/Signup', function () {
    return view('users/createacount');
});

Route::post('/SignUp',[UserController::class,'Signup']);
Route::post('/Login',[UserController::class,'Login']);
//show all services to the customer
Route::get('/users/Services',[UserController::class,'Show_services']);

//Show the Employee to user/customer
Route::get('/users/Employeelist/{id}',[UserController::class,'Show_employee']);
//sent request to the Employee for hiring
Route::get('/users/Employeelist/Employeehire/{id}',[UserController::class,'hire_request']);
//show employee profile
Route::get('/users/Employeelist/Employeeprofile/{id}',[UserController::class,'Employee_profile']);
/*--------------->End of Customer Part<----------------*/

/*--------------->Admin part<----------------*/

Route::view('/admin/signup','admin/SignUp');
Route::post('/admin/SignUp',[AdminController::class,'Signup']);
Route::post('/admin/Login',[AdminController::class,'Login']);

//logout admin
Route::get('/admin/logout', function () {
    if(session()->has('admin_id'))
    {
        session()->pull('admin_id');
        session()->pull('admin_name');
    }
    return view('admin/login');
});

//if already login 
Route::get('/admin/login', function () {
    if(session()->has('admin_id'))
    {
        return redirect('admin/index');
    }
    return view('admin/login');
});
//go to index page 
Route::get('/admin/index', function () {
    if(session()->has('admin_id'))
    {
        return redirect('admin/servicedisplay');
    }
    return view('admin/login');
});
//go to customer page 
Route::get('/admin/customer', function () {
    if(session()->has('admin_id'))
    {
        return view('admin/Customer');
    }
    return view('admin/login');
});
//go to employee page 
Route::get('/admin/employee', function () {
    if(session()->has('admin_id'))
    {
        return redirect('admin/Employee');
    }
    return view('admin/login');
});
//go to request page 
Route::get('/admin/request', function () {
    if(session()->has('admin_id'))
    {
        return redirect('admin/request1');
    }
    return view('admin/login');
});
//go to add new service page 
Route::get('/admin/add', function () {
    if(session()->has('admin_id'))
    {
        return view('admin/addnew');
    }
    return view('admin/login');
});
//go to employee Details page 
Route::get('/admin/employeedetails', function () {
    if(session()->has('admin_id'))
    {
        return view('admin/employee_details');
    }
    return view('admin/login');
});

//show all employees
Route::get('/admin/Employee',[AdminController::class,'Show_emp']);
//show all customer
Route::get('/admin/Customer',[AdminController::class,'Show_customer']);
//show all the request to the admin
Route::get('/admin/request1',[AdminController::class,'Request']);
//verify the request
Route::get('/admin/verify/{id}',[AdminController::class,'Verify']);
//delte the request
Route::get('/admin/Delete/{id}',[AdminController::class,'Delete_Request']);
//delete the Employee leave
Route::get('/admin/empDelete/{id}',[AdminController::class,'Delete_employee']);


/*-------------->End Admin part<----------------*/



/*----->service adding,retriving,updating and removing<----- */
//add new service
Route::post('/admin/addservice',[ServiceController::class,'add_new']);
//go to display index page 
Route::get('/admin/servicedisplay',[ServiceController::class,'service_display']);
//remove Service
Route::get('Delete/{id}',[ServiceController::class,'Delete_service']);
//go to display customer page page 
Route::get('/admin/customer_display',[ServiceController::class,'customer_display']);

/*------------>End service add part<----------- */



/*----------------->Employee part<-------------------*/
//Route::view('employee/index','Employee/index');
//Route::view('/employee/Login','Employee/Login');
//Route::view('/employee/SignUp','Employee/CreateLogin');

//add new Empolyee and login
Route::post('/employee/SignUp',[EmployeeController::class,'add_emp']);
Route::post('/employee/login',[EmployeeController::class,'Login']);
//login to Employee
Route::get('/employee/Login',function(){
    if(session()->has('emp_id'))
    {
        return view('employee/index');
    }else{
        return view('Employee/Login');
    }   });
//SignUp
Route::get('/employee/SignUp', function () {
    if(session()->has('emp_id'))
    {
        return redirect('employee/index');
    }else{
        return view('employee/CreateLogin');
    }
});
//logout admin
Route::get('/employee/logout', function () {
    if(session()->has('emp_id'))
    {
        session()->pull('emp_id');
        session()->pull('emp_name');
    }
    return view('employee/login');
});
//Index page 
Route::get('/employee/index', function () {
    if(session()->has('emp_id'))
    {
        return view('employee/index');
    }else{
        return view('employee/Login');
    }
    
});
Route::get('/employee/services', function () {
    if(session()->has('emp_id'))
    {
        return redirect('employee/servicedisplay');
    }else{
        return view('employee/Login');
    }
});

Route::get('/employee/customer_request', function () {
    if(session()->has('emp_id'))
    {
        return redirect('employee/customer_request');
    }else{
        return view('employee/Login');
    }
});
//display all services
Route::get('/employee/servicedisplay',[EmployeeController::class,'service_display']);
//update the services category
Route::get('/employee/enroll/{myid}',[EmployeeController::class,'enroll_service']);
//leave the services category
Route::get('/employee/leave/{id}',[EmployeeController::class,'leave_service']);
//display all request come from customer
Route::get('/employee/customer_request',[EmployeeController::class,'customer_request']);


//Accept request come from customer
Route::get('/employee/Accept/{id}/{emp}',[EmployeeController::class,'Accept_request']);
//Reject request come from customer
Route::get('/employee/Reject/{id}',[EmployeeController::class,'Reject']);

/*----------------->END Employee part<-------------------*/