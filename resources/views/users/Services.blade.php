<x-header data="ss"></x-header>

<div class="container-fluid  mt-5 mb-5" style="min-height:1px;">

    </div>
    <div class="container-fluid mt-5" style="background: #ff9672; height: 150px;">
        <div class="row pl-5">
            <div class="col-lg-2 bg-light mt-5 rounded-lg text-center pt-2" style="height: 50px; color: #ff9672;;">
                <h3 style="font-weight: 400;" >All Services</h3>
            </div>
        </div>
    </div>
    <div class="container-fluid mt-3 mb-3" style="min-height:1000px;">
        <div class="mycontent">
            @foreach($collection as $service)
            <div  class="flex_item">
                <div class="card card-primary">
                    <div class="card-header">
                    <div class="row " >
                            <div class="col-lg-6 col-md-6 col-sm-12">
                            Title: {{$service->title}}
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                            <spna style="float:right"><img src="{{asset('assets/img/Thumb-up.png')}}" width="40px;" height="40px"></spna>
                            </div>
                        </div>
                         
                    </div>
                    <div class="card-body">
                    <div style="width:100%;height:200px; border:0px solid black;border-radius: 20px;;">
                        <img src="{{asset('uploads')}}/{{$service->image}}" width="100%" height="200px" alt="Image">
                    </div>
                   <h4>Description:</h4>
                   {{$service->description}}
                    </div> 
                    <div class="card-footer" style="min-height:50px;">
                        <div class="row">               
                            <div class="col-lg-12 col-md-12 col-sm-12" >
                            <a href={{"Employeelist/$service->id"}}>  <button class="btn btn-success" style="width: 100%;">Click for Employee Hiring</button></a> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
      
@include('users/footer')