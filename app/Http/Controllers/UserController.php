<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Service;
use App\Models\Employee;
use App\Models\Myrequest;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
    //Create Acount
    function Signup(Request $req)
    {
            $member= new Customer;
            $member->Name=$req->username;
            $member->email=$req->email;
            $member->phone=$req->phone;
            $member->city=$req->city;
            $member->CNIC=$req->CNIC;
            $member->password=$req->password;
           $inserted = $member->save();
            if($inserted)
            {
                return redirect('Signup')->with('msg','Acount have been created succssfulyy!,Please Login!');
            }
    }
    //login customer
    function Login(Request $r)
    {      
         
            $CNIC=$r->cnic;
            $password=$r->password;

            $data = Customer::where('CNIC',$CNIC)->where('password',$password)->get();
            if(count($data)>0)
            {   $r->session()->put('cnic',$CNIC);
                $name = DB::table("Customers")->where('CNIC',$CNIC)->first();
                $r->session()->put('customer_name',$name->Name);
               return redirect('/index');
            }
            else{
                return redirect('/login')->with('msg1','CNIC or Password is Wrong!');
            }

    }

    //retrive Customer Details
    function Show_services()
    {
        $data =Service::all();
        return view('users/Services',['collection'=>$data]);
    }
    //show all emplyees of the service id
    function Show_employee($id)
    {
        $data = DB::select("select * from Employees where verif IS Not NULL and service_id='$id'");
        return view('users/Employee',['collection'=>$data]);
    }
   //sent request to the employee
   function hire_request($id)
   { 
   // $sql = DB::select("Select * from employees where id='$id' and available IS NULL");
    $sql = DB::table("Employees")->where('id',$id)->first();
    if($sql->available==NULL)
    {   $emp_id = session('cnic');
        $customer = DB::table("Customers")->where('cnic',$emp_id)->first();
        $customerRequest =new Myrequest;
        $customerRequest->customer_id=$customer->id;
        $customerRequest->customer_name=$customer->Name;
        $customerRequest->employee_id=$id;
        $customerRequest->city=$customer->city;
        $customerRequest->phone=$customer->phone;
   // $update=Employee::find($id);
    //$update->available='NO';
    $updated= $customerRequest->save();
    if($updated)
     {
        return back();
     }
    }else{
        return back();
           //return view('users/Employee')->with('noAvailable','Employee Not Available')
    }
   }
}
