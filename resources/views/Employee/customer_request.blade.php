@include('employee/header')
   
      <!-- ******************************************************************* -->
      <div class="container pt-5 mt-5">
        
      </div>
      <div class="container rounded mt-5 p-5 mb-5 bg-light" style="border: 1px solid rgb(211, 210, 210);">
        <div class="row pb-3">
          <h1 style="font-weight: 500;">Customers Requests:</h1>
        </div>
        <div class="row">
          
        </div>
        <div class="container mdb-color shadow" style="border:1px solid black; border-radius:10px;min-height: 550px;margin-top: 22px;">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="table-responsive">
                     <table class="table  table-striped  table-hover">
                        <thead>
                            <tr class="d-flex text-white" style="font-weight: 900;">
                                
                                <th class="col-2 text-center">Name</th>
                                <th class="col-3 text-center">Phone_No</th>
                                <th class="col-3 text-center">city</th>
                                <th class="col-2 text-center">Accept</th>
                                <th class="col-2 text-center">Reject</th>
                            </tr>
                        </thead>
                        <tbody class="text-white">
                        
                        @foreach($collection as $customer)
                        <tr class="d-flex">
                        
                            <td class="col-2 text-center">{{$customer->customer_name}}</td>
                            <td class="col-3 text-center">{{$customer->phone}}</td>
                            <td class="col-3 text-center">{{$customer->city}}</td>
                            <td class="col-2 text-center"><a href={{"Accept/$customer->id/$customer->employee_id"}}><button class="btn btn-primary rounded">Accept</button> </a></td>
                            <td class="col-2 text-center"><a href={{"Reject/$customer->id"}}> <button class="btn btn-primary rounded">Reject</button> </a></td>
                        </tr>
                        @endforeach
                   
                    </tbody>
                </table>
           
           </div>
    
            </div>
            </div>
        </div>
      </div>
   
@include('employee/footer')