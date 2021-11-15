<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Admin as ModelsAdmin;
use App\Models\Employee;
use App\Models\Myrequest;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    //SignUp part
    public function Signup(Request $req)
    {
            $member= new Admin;
            $member->Name=$req->username;
            $member->email=$req->email;
            $member->admin_id=$req->admin_id;
            $member->password=$req->password;
            $inserted= $member->save();
            if($inserted)
            {
                return redirect('admin/login'); //->with('msg2','Acount have been created succssfulyy!,Please Login!');
            }
        }
    public function Login(Request $r)
    {      
            $admin_id=$r->admin_id;
            $password=$r->password;

            $data = Admin::where('admin_id',$admin_id)->where('password',$password)->get();
            if(count($data)>0)
            {   $r->session()->put('admin_id',$admin_id);
                $name = DB::table("Admins")->where('admin_id',$admin_id)->first();
                $r->session()->put('admin_name',$name->Name);
               return redirect('/admin/index');
            }
            else{
                return redirect('/admin/login')->with('txt1','AdminID or Password is Wrong!');
            }      
    }
    //show All request
    public function Request()
    {
            $data = DB::select("select * from Employees where verif IS NULL and service_id IS Not NULL");
            return view('admin/request',['collection'=>$data]);
    }
    //Verify request
    public function Verify($id)
    {
          $data =Employee::find($id);
          $data->verif='yes';
          $saved = $data->save();
          if($saved)
          {
              return redirect('admin/request');
          }
    }
    //Delete 
    public function Delete_Request($id)
    {
        $data =Employee::find($id);
          $data->service_id=NULL;
          $data->serviceTitle='NULL';
          $saved = $data->save();
          if($saved)
          {
              return redirect('admin/request');
          }
    }
    //Delete Employee
    public function Delete_employee($id)
    {
        $data =Employee::find($id);
        $deleted = $data->delete();
        if($deleted)
        {
            return redirect('admin/Employee');
        }
    }
      //show All Employee
      public function Show_emp()
      {
            $data = DB::select("select * from Employees where verif IS NOT NULL ");
            return view('admin/Employee',['collection'=>$data]);
      }
      //show All Customer
      public function Show_customer()
      {
            $data = DB::select("select * from customers");
            return view('admin/Customer',['collection'=>$data]);
      }
}
