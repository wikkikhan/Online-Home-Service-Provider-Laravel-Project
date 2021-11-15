@include('admin/header')
<div class="container-fluid mt-5 p-5 shadow" style="min-height:620px">
  <div class="row">
  <div class="col-lg-12 col-md-12 col-sm-12 text-center text-uppercase  p-4" style="background:burlywood">
  <h2 style="font-weight:700; color:blue">Dashboard</h2>
  </div>
  </div>
<div class="mycontent">
@if(count($collection)>0)
@foreach($collection as $item)
            <div  class="flex_item">
                <div class="card card-primary">
                    <div class="card-header">
                    <div class="row ">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                            Title: <span style="color:20px;text-decoration: double;">{{$item->title}}</span>
                            </div>
                        </div>
                    </div>
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
                            <div class="col-lg-6 col-md-12 col-sm-12" style="text-align:center;">
                             <a href="#">  <button class="btn btn-success justify" style="width: 100%;">Update</button></a> 
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12" >
                            <a href={{"/Delete/$item->id"}}>  <button class="btn btn-success" style="width: 100%;">Delete</button></a> 
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        @else
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 text-center p-4">
                <h4>Service Not Available! <a href={{"http://127.0.0.1:8000/admin/add"}}>Add New</a></h4>
            </div>
        </div>
        @endif
      </div>
</div>
</body>
</html>