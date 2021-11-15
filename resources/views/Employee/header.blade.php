<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{asset('assets/css/service.css')}}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark mdb-color fixed-top">

        <a class="navbar-brand" href="#">
            <img src="{{asset('assets/img/logo.png')}}" alt="educationLogo" width="165" height="60">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse font-weight-bolder" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
              <li class="nav-item nav-pills active">
                  <a class="btn btn-secondary rounded-lg text-white" href="http://127.0.0.1:8000/employee/index" data-toggle="tooltip" data-placement="top" title="Home">Home<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="btn text-white rounded-lg" href="http://127.0.0.1:8000/employee/services" title="Our Services Details">Services</a>
              </li>
              <li class="nav-item">
                  <a class="btn text-white rounded-lg" href="http://127.0.0.1:8000/employee/customer_request" data-toggle="tooltip" data-placement="top" title="Request">Request</a>
              </li>
              <!-- <li class="nav-item dropdown">
                <a class="btn rounded-lg text-white dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Services
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Construction</a>
                  <a class="dropdown-item" href="#">Cleaner & Janitor</a>
                  <a class="dropdown-item" href="#">Electrician</a>
                  <a class="dropdown-item" href="#">Generator Maintenance</a>
                  <a class="dropdown-item" href="#">Painter</a>
                  <a class="dropdown-item" href="#">Plumber</a>
                  <a class="dropdown-item" href="#">HVAC Technician</a>
                  <a class="dropdown-item" href="#">Electrician</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Maintenance Packages</a>
                </div>
              </li> -->
              
              <li class="nav-item">
                <a class="btn text-white rounded-lg" href="#" title="About Us">About Us</a>
            </li>
            <li class="nav-item">
              <a class="btn text-white rounded-lg" href="#" title="Contact Us">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="btn text-white rounded-lg" href="http://127.0.0.1:8000/employee/logout" title="LogOut">Log Out</a>
        </li>
            </ul>
            <ul class="navbar-nav">
                <li><h5 class="mt-3 text-secondary mr-2">{{session('emp_name')}}</h5></li>
                <li>
                    <a href="#">
                        <img src="{{asset('assets/logo/profile.png')}}" alt="educationLogo" width="65" height="60">
                    </a>
                </li>
            </ul>
        </div>
    </nav>
      <!-- *****************************End navbar*********************************** -->
      