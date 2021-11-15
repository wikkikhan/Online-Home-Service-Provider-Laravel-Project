@include('Employee/header')
<div class="container-fluid mt-5 p-5 shadow" style="min-height:620px">
  <div class="row">
  <div class="col-lg-12 col-md-12 col-sm-12 text-center text-uppercase  p-4" style="background:burlywood">
  <h2 style="font-weight:700; color:blue">Services Available</h2>
  </div>
  </div>
<div class="mycontent">
@if(count($collection)>0)
@foreach($collection as $item)
            <div  class="flex_item">
                <div class="card card-primary">
                   
                    
                        @if($employee==$item->id)
                        <div class="card-header bg-success">
                        <div class="row ">
                        <div class="col-lg-8 col-md-8 col-sm-12">
                            Title: <span style="color:20px;text-decoration: double;">{{$item->title}}</span>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 ">
                            <a href={{"leave/$emp_id"}} style="color:20px;text-decoration: double; text-align: right;">Released</a>
                            </div>
                        </div>
                        </div>
                        @else
                        <div class="card-header ">
                         <div class="row ">
                           <div class="col-lg-12 col-md-12 col-sm-12">
                            Title: <span style="color:20px;text-decoration: double;">{{$item->title}}</span>
                            </div>
                         </div>
                        </div>
                        @endif 
                       
                   
                    <div class="card-body">
                        <div style="width:100%;height:200px; border:0px solid black;border-radius: 20px;;">
                        <img src="{{asset('uploads')}}/{{$item->image}}" width="100%" height="200px" alt="Image">
                    </div>
                    <h4>Description:</h4>
                    <p class="card-text" style="height:40px;">
                    {{$item->description}}</p>
                    
                    </div> 
                    <div class="card-footer" style="min-height:50px;">
                        <div class="row">
                            <!-- <div class="col-lg-6 col-md-12 col-sm-12" style="text-align:center;">
                           <p class="btn btn-success justify" >Employees:{{$item->total_employee}}</p>
                            <a href="#">  <button class="btn btn-success justify" style="width: 100%;">Profile</button></a> 
                            </div> -->
                            @if($alert == 'no')
                            <div class="col-lg-12 col-md-12 col-sm-12" >
                            <a href={{"enroll/$item->id"}}>  <button class="btn btn-success" style="width: 100%;">Enrolled</button></a> 
                            </div>
                            @else
                            <div class="col-lg-12 col-md-12 col-sm-12" >
                             <button class="btn btn-success" style="width: 100%;" disabled> Already Enrolled</button> 
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            @endforeach
        @else
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 text-center p-4">
                <h4>Service Not Available!</h4>
            </div>
        </div>
        @endif
      </div>
</div>
@include('Employee/footer')
