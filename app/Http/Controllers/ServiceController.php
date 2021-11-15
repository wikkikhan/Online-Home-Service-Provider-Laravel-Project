<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Myrequest;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{
    //add new Service category
    function add_new(Request $req)
    {     
        $this->validate($req,[
            'image'=>'image|required',
        ]);

        $service = new Service;
        if($req->has('image'))
        {
            $file =$req->image;
            $filename=$file->getClientOriginalName();
            $service->image=$filename;
            $file->move('uploads',$filename);
            $service->title=$req->title;
            $service->description=$req->description;
        }
            $service->save();
        //     alert()->info('Your form submited successfully ')->autoclose("2000");
        // return back();
            return redirect('/admin/servicedisplay');
    }
    //Display all the Services on admin portal
    function service_display()
    {
        $data= Service::all(); //select("select * from services");
        if(count($data)>0)
        {
            return view('admin/index',['collection'=>$data]);
        }else 
        {
            return view('admin/index',['collection'=>$data]);
        }
    }

    //Delete the services
    function Delete_service($id)
    {
        $imagePath = Service::select('image')->where('id', $id)->first();

         $filePath = 'uploads/'.$imagePath->image;

                   if (file_exists($filePath)) {

                        unlink($filePath);

           Service::where('id', $id)->delete();

        }else{
         Service::where('id', $id)->delete();
        }
        //$deleted = Service::find($id);
        //$deleted->delete();
        return back();
        //return redirect('/admin/servicedisplay');
    }
    //update Service Details
    function Update_service()
    {

    }

}
