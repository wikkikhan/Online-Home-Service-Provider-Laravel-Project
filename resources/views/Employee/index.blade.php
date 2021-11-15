@include('Employee/header')
<div class="container-fluid mt-5 p-5 shadow">
        <div class="row ">
          <div class="col-xl-12 col-md-12 col-sm-12">
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
                  <div class="carousel-item active">
                    <img src="{{asset('assets/img/ehmitrich-Jt01DmHeiqM-unsplash.jpg')}}" alt="Los Angeles" width="100%" height="600">
                    <div class="carousel-caption">
                      <h3>Los Angeles</h3>
                      <p>We had such a great time in LA!</p>
                    </div>   
                  </div>
                  <div class="carousel-item">
                    <img src="{{asset('assets/img/erik-mclean-IxfhMTROke8-unsplash.jpg')}}" alt="Chicago" width="100%" height="600">
                    <div class="carousel-caption">
                      <h3>Chicago</h3>
                      <p>Thank you, Chicago!</p>
                    </div>   
                  </div>
                  <div class="carousel-item">
                    <img src="{{asset('assets/img/dan-smedley-2wVRh5MpQ0Y-unsplash.jpg')}}" alt="New York" width="100%" height="600">
                    <div class="carousel-caption">
                      <h3>New York</h3>
                      <p>We love the Big Apple!</p>
                    </div>   
                  </div>
                  <div class="carousel-item">
                    <img src="{{asset('assets/img/ehmitrich-fW6lwDM26o0-unsplash.jpg')}}" alt="New York" width="100%" height="600">
                    <div class="carousel-caption">
                      <h3>Pakistan</h3>
                      <p>We love Pakistan!</p>
                    </div>   
                  </div>
                  <div class="carousel-item">
                    <img src="{{asset('assets/img/ehmitrich-Jt01DmHeiqM-unsplash.jpg')}}" alt="New York" width="100%" height="600">
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
            <!-- <div class="row mt-5">
              <div class="col-xl-4 col-md-4 col-sm-12 rounded-circle text-center mt-2">
                <a href="openApplications.html">
                <div class="view overlay zoom">
                  <img src="imgs/Nail-polish-face-cream-and-perfumes-touted-as-attractive-sectors-for-halal-cosmetics-growth-in-2020_wrbm_large.jpg" class="img-fluid " alt="smaple image">
                <div class="mask flex-center">
                <p class="white-text font-weight-bolder">Fast Secure Payment</p>
                </div>
                </div>
              </a>
              </div>
              <div class="col-xl-4 col-md-4 col-sm-12 rounded-circle text-center mt-2">
                <a href="lOCandidates.html">
                <div class="view overlay zoom">
                  <img src="imgs/cosmetics-on-pink-table.jpg" class="img-fluid " alt="smaple image">
                <div class="mask flex-center">
                <p class="white-text font-weight-bolder">Details</p>
                </div>
                </div>
              </a>
              </div>
              <div class="col-xl-4 col-md-4 col-sm-12 rounded-circle text-center mt-2">
                <a href="allResults.html">
                <div class="view overlay zoom">
                  <img src="imgs/EU-cosmetic-claims-must-be-planned-during-early-stage-NPD-says-expert-consultant.jpg" class="img-fluid " alt="smaple image">
                <div class="mask flex-center">
                <p class="note-danger font-weight-bolder">Candidates List</p>
                </div>
                </div>
              </a>
              </div> -->
             
              
            
          </div>
        </div>
      </div>      
          
      <!-- ******************************************************************* -->
      
      <div class="container mt-5">
        <div class="row">
            <div class="col text-center">
                <p style="font-size: larger; color: #01579B;">Looking for reliable Job in Construction, Renovation, and Maintenance & Repair Services? Apply Today!</p>
            </div>
        </div>
        <div class="row">
            <div class="col text-center text-white pt-1" style="background: #F57C00;">
                <h2 style="font-weight: 400;">Our Services</h2>
            </div>
        </div>
      </div>
      <div class="container pt-5">
          <a href=""><img src="{{asset('assets/icons/Capture1.PNG')}}" alt="Construction"></a>
          <a href=""><img src="{{asset('assets/icons/Capture2.PNG')}}" alt="Construction"></a>
          <a href=""><img src="{{asset('assets/icons/Capture3.PNG')}}" alt="Construction"></a>
          <a href=""><img src="{{asset('assets/icons/Capture4.PNG')}}" alt="Construction"></a>
          <a href=""><img src="{{asset('assets/icons/Capture5.PNG')}}" alt="Construction"></a>
          <a href=""><img src="{{asset('assets/icons/Capture6.PNG')}}" alt="Construction"></a>
          <a href=""><img src="{{asset('assets/icons/Capture7.PNG')}}" alt="Construction"></a>
          <a href=""><img src="{{asset('assets/icons/Capture8.PNG')}}" alt="Construction"></a>
          <a href=""><img src="{{asset('assets/icons/Capture9.PNG')}}" alt="Construction"></a>
          <a href=""><img src="{{asset('assets/icons/Capture10.PNG')}}" alt="Construction"></a>
      </div>
      <br>
      <!-- ****************************************************************** -->
@include('Employee/footer')