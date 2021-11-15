<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Myrequest;
use App\Models\Service;
use Illuminate\Support\Facades\DB;
class EmployeeController extends Controller
{
    //add employee
    function add_emp(Request $req)
    {
        $member = new Employee;
        $member->Name=$req->name;
        $member->fatherName=$req->fname;
        $member->email=$req->email;
        $member->CNIC=$req->CNIC;
        $member->city=$req->city;
        $member->Experiance=$req->experiance ;
        $member->phone=$req->phone;
        $member->password=$req->password;
       $inserted= $member->save();
        return redirect('/employee/Login')->with('emp','Acount have been created successfully! please Login');
     }
     function Login(Request $r)
     {      
          
             $emp_id=$r->emp_id;
             $password=$r->password;
 
             $data = Employee::where('CNIC',$emp_id)->where('password',$password)->get();
             if(count($data)>0)
             {   $r->session()->put('emp_id',$emp_id);
                 $name = DB::table("Employees")->where('CNIC',$emp_id)->first();
                 $r->session()->put('myid',$name->id); //use for later updateing purpose
                 $r->session()->put('emp_name',$name->Name);
                return view('/employee/index');
             }
            else
                 return view('/employee/login')->with('emp2','Employee ID or Password is Wrong!');
                
        }
          //Display all the Services on admin portal
    function service_display()
    {  
        $data= Service::all(); //select("select * from services");
        $emp_id=session('emp_id');
        $employee = DB::table("Employees")->where('CNIC',$emp_id)->first();
        if($employee->verif == NULL){
        if(count($data)>0)
        {
            return view('employee/services',['collection'=>$data,'alert'=>'no','employee'=>$employee->service_id,'emp_id'=>$employee->id]);
        }else 
        {
            return view('employee/services',['collection'=>$data,'alert'=>'no','employee'=>$employee->service_id,'emp_id'=>$employee->id]);
        }
      }else{
        return view('employee/services',['collection'=>$data,'alert'=>'yes','employee'=>$employee->service_id,'emp_id'=>$employee->id]);
      }
    }

    //enroll in service
    function enroll_service($myid)
    {     
            $id = session('myid'); 
            $name = Service::find($myid); //get the select service
            $member = Employee::find($id); //get the current user
           // echo $name;
             $member->serviceTitle = $name->title;
             $member->service_id=$myid;
             $update = $member->save();
           if($update)
            {
               return back();
            }
           
    }
    // Leave a particular category
    function leave_service($id)
    {
        $member = Employee::find($id); //get the current user
        // echo $name;
          $member->serviceTitle = null;
          $member->service_id=null;
          $member->available=NULL;
          $member->verif=NUll;
          $update = $member->save();
        if($update)
         {
            return back();
         }
    }
    //show all customer requestes
    function customer_request()
    {   
        $emp_id=session('emp_id');
        $employee = DB::table("Employees")->where('cnic',$emp_id)->first();
        $data = DB::select("select * from Myrequests where employee_id ='$employee->id' and request IS NULL");
        return view('employee/customer_request',['collection'=>$data]);
    }

    //Accept  response of customer
    function Accept_request($id,$emp)
    {
        //make the employee busy/Not available
        $employee = Employee::find($emp);
        $employee->available='NO';
        $employee->save();
       //accept the request
        $accept = Myrequest::find($id);
        $accept->request='Accept';
        $accepted = $accept->save();
       if($accepted)
       {
        return back();
       }
    }
    //Reject the responce
    function Reject($id)
    {
        $reject = Myrequest::find($id);
        $reject->request='Accept';
        $rejected = $reject->delete();
       if($rejected)
       {
        return back();
       }
    }
}


