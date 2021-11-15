 @include('admin/header')
 <!-- ******************************************************************* -->
 <div class="container pt-5 mt-5">
        
        </div>
        <div class="container rounded mt-5 p-5 mb-5 bg-light" style="border: 1px solid rgb(211, 210, 210);">
          <div class="row pb-3">
            <h1 style="font-weight: 500;">Customer Details:</h1>
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
                                  <th class="col-2 text-center">Email</th>
                                  <th class="col-2 text-center">Phone_No</th>
                                  <th class="col-2 text-center">CNIC</th>
                                  <th class="col-2 text-center">Delete</th>
                                  <th class="col-2 text-center">Details</th>
                              </tr>
                          </thead>
                          <tbody class="text-white">

                    @foreach($collection as $item)
                          <tr class="d-flex">
                              <td class="col-2 text-center">{{$item->Name}}</td>
                              <td class="col-2 text-center">{{$item->email}}</td>
                              <td class="col-2 text-center">{{$item->phone}}</td>
                              <td class="col-2 text-center">{{$item->CNIC}}</td>
                              <td class="col-2 text-center"><button class="btn btn-primary rounded">Delete</button></td>
                              <td class="col-2 text-center"><button class="btn btn-primary rounded">Details</button></td>
                          </tr>
                    @endforeach
                      </tbody>
                  </table>
             
             </div>
      
              </div>
              </div>
          </div>
        </div>
     
       
  
  </body>
  </html>