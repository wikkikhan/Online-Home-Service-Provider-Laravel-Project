<x-header data="hello"></x-header>
          
      <!-- ******************************************************************* -->
      <div class="container-fluid mt-5 p-5 shadow">
        <div class="row">
          <div class="col-xl-8 col-md-8 col-sm-12">
            <div class="row">
              <div id="demo" class="carousel slide" data-ride="carousel">
                <ul class="carousel-indicators">
                  <li data-target="#demo" data-slide-to="0" class="active"></li>
                  <li data-target="#demo" data-slide-to="1"></li>
                  <li data-target="#demo" data-slide-to="2"></li>
                  <li data-target="#demo" data-slide-to="3"></li>
                  <li data-target="#demo" data-slide-to="4"></li>
                </ul>
                <div class="carousel-inner">
                  <div class="carousel-item ">
                    <img src="{{asset('assets/img/background1.webp')}}" alt="Los Angeles" width="800" height="320">
                    <div class="carousel-caption">
                      <h3>Los Angeles</h3>
                      <p>We had such a great time in LA!</p>
                    </div>   
                  </div>
                  <div class="carousel-item">
                    <img src="{{asset('assets/img/background.jpeg')}}" alt="Chicago" width="800" height="320">
                    <div class="carousel-caption">
                      <h3>Chicago</h3>
                      <p>Thank you, Chicago!</p>
                    </div>   
                  </div>
                  <div class="carousel-item">
                    <img src="{{asset('assets/img/img3.PNG')}}" alt="New York" width="800" height="320">
                    <div class="carousel-caption">
                      <h3>New York</h3>
                      <p>We love the Big Apple!</p>
                    </div>   
                  </div>
                  <div class="carousel-item active">
                    <img src="{{asset('assets/img/img2.jpg')}}" alt="New York" width="800" height="320">
                    <div class="carousel-caption">
                      <h3>Pakistan</h3>
                      <p>We love Pakistan!</p>
                    </div>   
                  </div>
                  <div class="carousel-item">
                    <img src="{{asset('assets/img/img1.jpg')}}" alt="New York" width="800" height="320">
                    <div class="carousel-caption">
                      <h3>New York</h3>
                      <p>We love the Big Apple!</p>
                    </div>   
                  </div>
                </div>
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                  <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                  <span class="carousel-control-next-icon"></span>
                </a>
              </div>
            </div>
            <div class="row mt-5">
            
              <div class="col-xl-4 col-md-4 col-sm-12 rounded-circle text-center">
                <a href="openApplications.html">
                <div class="view overlay zoom">
                  <img src="{{asset('assets/img/pan-xiaozhen-IYE0ImQlY90-unsplash.jpg')}}" class="img-fluid " alt="smaple image">
                <div class="mask flex-center">
                <p class="white-text font-weight-bolder">Click here</p>
                </div>
                </div>
              </a>
              </div>
              <div class="col-xl-4 col-md-4 col-sm-12 rounded-circle text-center">
                <a href="lOCandidates.html">
                <div class="view overlay zoom">
                  <img src="{{asset('assets/img/amilcar-vanden-bouch-jmH34Zpp52k-unsplash.jpg')}}" class="img-fluid " alt="smaple image">
                <div class="mask flex-center">
                <p class="white-text font-weight-bolder">Click here</p>
                </div>
                </div>
              </a>
              </div>
              <div class="col-xl-4 col-md-4 col-sm-12 rounded-circle text-center">
                <a href="allResults.html">
                <div class="view overlay zoom">
                  <img src="{{asset('assets/img/pan-xiaozhen-IYE0ImQlY90-unsplash.jpg')}}" class="img-fluid " alt="smaple image">
                <div class="mask flex-center">
                <p class="note-danger font-weight-bolder">Click here</p>
                </div>
                </div>
              </a>
              </div>
             
              
            </div>
          </div>
          <div class="col-xl-4 col-md-4 col-sm-12 shadow" style=" overflow-wrap: break-word; width: 150; background: sandybrown;">
            <div class="row text-white p-2" style="height: 60px; background: maroon;">
              <h2 style="font-weight: 400;">Important Updates </h2>
            </div>
            <p>
              Donec nec vestibulum enim. Sed eleifend justo ac iaculis tincidunt.
               In fringilla est at placerat sagittis. Aenean bibendum dui vel elit
                accumsan dapibus. Ut placerat porttitor pretium. Quisque sit amet 
                egestas nunc, non bibendum odio. Aliquam tellus lacus, ultricies
                 dapibus mauris in, condimentum porttitor tellus. In interdum lacus 
                 quis sapien rutrum, in commodo mauris porttitor.
              <hr class="note-danger accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 400px; height: 3px;">
              Donec vitae massa erat. Vestibulum nisi tellus, condimentum ac nunc quis, pulvinar porttitor nisl. Nam et leo eros. Morbi 
              sed turpis vel nisl iaculis venenatis a non risus. Nunc rutrum, erat eget 
              porta ultrices, massa quam lobortis velit, eu malesuada dolor justo et 
              sapien. Nulla eget odio sit amet nisl vehicula interdum. Nullam venenatis 
              id nisl eu vehicula. Sed sed dignissim metus, at pretium sem. Nulla a 
              convallis nibh, id bibendum magna. Etiam a eleifend augue. Maecenas fermentum 
              mperdiet ornare. Vestibulum ac turpis quis nibh congue scelerisque. In mollis
               justo quis blandit pretium. Proin luctus mi et placerat ultrices. Ut quis
                leo magna.
            </p>
          </div>
        </div>
      </div>
<!-- ***********************************3rd Section*************************************************** -->
      
      <div class="container mt-5 pt-5">
        <h1 class="text-center ">Our Top Services</h1>
        <div class="row ">
          <button class="btn peach-gradient">plumber</button>
          <button class="btn purple-gradient">AC Repair</button>
          <button class="btn blue-gradient">Electrition</button>
          <button class="btn aqua-gradient">Carpenter</button>
        </div>
        <div class="row col-xl-12 col-md-8 col-sm-12 shadow p-2 rounded-lg" style="min-height: 100px;">
          <p>The standard chunk of Lorem Ipsum used since the 1500s is 
            reproduced below for those interested. Sections 1.10.32 and 1.10.33 from 
            de Finibus Bonorum et Malorum" by
             Cicero are also reproduced in their exact original form, accompanied by 
             English versions from the 1914 translation by H. Rackham.</p>
        </div>
        <br><br>
      </div>
      
     
<!-- ***************************************Section 4th******************************************* -->

      <div class="container_fluid" style="min-height: 180px; background-color: rgb(245, 110, 110);">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12   pt-3 text-white text-center">
              <img src="{{asset('assets/logo/book.png')}}" alt="book" style="width: 50px; height: 50px;">
              <h3 class="mt-2 font-weight-bolder">7171</h3>
              <h3 class="">Tests</h3>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pt-3 text-white text-center">
              <img src="{{asset('assets/logo/group.png')}}" alt="book" style="width: 50px; height: 50px;">
              <h3 class="mt-2 font-weight-bolder">20000</h3>
              <h3 class="">Employees</h3>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pt-3 text-white text-center">
              <img src="{{asset('assets/logo/pencil.png')}}" alt="book" style="width: 50px; height: 50px;">
              <h3 class="mt-2 font-weight-bolder">7171</h3>
              <h3 class="">Test Center</h3>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pt-3 text-white text-center">
              <img src="{{asset('assets/logo/schedule.png')}}" alt="book" style="width: 50px; height: 50px;">
              <h3 class="mt-2 font-weight-bolder">7171</h3>
              <h3 class="">Years Services</h3>
            </div>
          </div>
        </div>
      </div>
      

      <!-- ******************************Start 5th Section*************************************** -->

      <div class="container_fluid mt-5 text-center pt-2" style="min-height: 290px; background-color: #ffb397;">
        <h1 style="color: maroon; font-weight: 400;">Our Partners</h1>
        <hr class="note-danger accent-2 mt-0 d-inline-block mx-auto" style="width: 180px; height: 3px;">
        <div class="container">
          <div class="row mt-3 pb-2">
            <div class="col-xl-3 col-md-4 col-sm-12 mt-2">
               
                  <div class="view overlay">
                    <!-- <img src="https://mdbootstrap.com/img/Photos/Others/forest-sm.jpg" class="img-fluid " alt="smaple image"> -->
                    <div class="card text-white bg-secondary hoverable" style="height: 160px; ">
                      <div class="card-body pt-5">
                        <h5 class="card-title">Coordination & Operations Division</h5>
                      </div>
                      <div class="mask flex-center rgba-red-strong rounded">
                        <p class="white-text">Click Here</p>
                      </div>
                    </div>
                  </div>
            </div>
     
            <div class="col-xl-3 col-md-4 col-sm-12 mt-2">
            <div class="view overlay">
              <!-- <img src="https://mdbootstrap.com/img/Photos/Others/forest-sm.jpg" class="img-fluid " alt="smaple image"> -->
              <div class="card text-white bg-secondary hoverable" style="height: 160px; ">
                <div class="card-body pt-5">
                  <h5 class="card-title">Academics & Research Division</h5>
                </div>
                <div class="mask flex-center rgba-red-strong rounded">
                  <p class="white-text">Click Here</p>
                </div>
              </div>
            </div>
          </div>
            <!-- <div class="col-xl-3 col-md-4 col-sm-12 mt-2">
                <div class="card text-white bg-secondary hoverable" style="height: 160px;">
                  <div class="card-body pt-5">
                      <h5 class="card-title">Corporate Social Responsibility</h5>
                  </div>
              </div>
            </div> -->
            <div class="col-xl-3 col-md-4 col-sm-12 mt-2">
              <div class="view overlay">
                <!-- <img src="https://mdbootstrap.com/img/Photos/Others/forest-sm.jpg" class="img-fluid " alt="smaple image"> -->
                <div class="card text-white bg-secondary hoverable" style="height: 160px; ">
                  <div class="card-body pt-5">
                    <h5 class="card-title">Corporate Social Responsibility</h5>
                  </div>
                  <div class="mask flex-center rgba-red-strong rounded">
                    <p class="white-text">Click Here</p>
                  </div>
                </div>
              </div>
            </div>

           
            <div class="col-xl-3 col-md-4 col-sm-12 mt-2">
              <div class="view overlay">
                <!-- <img src="https://mdbootstrap.com/img/Photos/Others/forest-sm.jpg" class="img-fluid " alt="smaple image"> -->
                <div class="card text-white bg-secondary hoverable" style="height: 160px; ">
                  <div class="card-body pt-5">
                    <h5 class="card-title">Services & Corporate Affairs Division</h5>
                  </div>
                  <div class="mask flex-center rgba-red-strong rounded">
                    <p class="white-text">Click Here</p>
                  </div>
                </div>
              </div>
            </div>
        </div>
        </div>
      </div>
      <!-- ******************************End 5th Section*************************************** -->
      </div>
      </div>
      <br><br><br>
 @include('users/footer')