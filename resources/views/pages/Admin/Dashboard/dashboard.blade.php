<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> Adedokun Julius Portfolio </title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

 <link rel="icon" type="image/jpg" href="{{asset('assets/img/logofav.jpg')}}">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">


</head>

<body>

    

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="{{asset('assets/img/profile.jpg')}}" alt="" class="img-fluid">
        <h1 class="text-light"><a href="">Welcome {{auth()->user()->name}}</a></h1>
       
      </div>

      <nav class="nav-menu">
          <div class="dropdown show">
                <a class="btn btn-secondary dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <li class="text-white"><i class="bx bx-user"></i> <span> My About Profile</li>
                </a>
                       
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                      
                      
                       @if(count($abouts) > 0)
                          @foreach ($abouts as $about)
                            
                              <a class="dropdown-item text-primary" href="/about/{{$about->id}}/edit">Edit About Profile</a>
                              
                          @endforeach
                       @endif
                            
                        
                        
                        
                      </div>
                      
          </div>

           <div class="dropdown show">
                <a class="btn btn-secondary dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <li class="text-white"><i class="bx bx-file-blank "></i> <span> My Education Profile</span></li>
                </a>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item text-primary" href="/education/create">Create Education Profile</a>
                        <a class="dropdown-item text-primary" href="/editprofile">Edit Education Profile</a>
                       </div>
             </div>



          <div class="dropdown show">
                <a class="btn btn-secondary dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <li class="text-white"><i class="bx bx-file-blank"></i> <span>My Experience Profile</span></li>
                </a>

                      <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item text-primary" href="/experience/create">Create Experience Profile</a>
                        <a class="dropdown-item text-primary" href="/editprofile">Edit Experience Profile</a>
                       </div>
             </div>

             
          <div class="dropdown show">
                <a class="btn btn-secondary dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <li class="text-white"><i class="bx bx-file-blank"></i> <span>My Portfolio Gallery</span></li>
                </a>

                      <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item text-primary" href="/portfolio/create">Create Portfolio Gallery</a>
                        <a class="dropdown-item text-primary" href="/editprofile">Edit Portfolio Gallery</a>
                       </div>
             </div>

             

             <div>
                <form method = "POST" action = "/signout">
                     {{ csrf_field() }}
                    <button class="btn btn-secondary"> Click Here To Logout From Your Dashboard</button>
                </form>
             </div>


         
            

      </nav><!-- .nav-menu -->
      <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

    </div>
  </header><!-- End Header -->



{{-- BODY SECTION STARTS HERE --}}
<!-- Trigger the modal with a button -->


  
    <br/><br/><br/>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
             @include('includes.error')
            <div class="card">
                <div class="card-header">
                <div class="row">
                  <div class="col-sm-6">
                     <h3 class="text-info">WELCOME {{auth()->user()->name}}</h3>
                  </div>

                  <div class="col-sm-6">
                     
                              <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">
                                Update Password
                              </button>

                              <!-- Modal -->
                              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">Change Your Password Here</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      <form method="POST" action="/update_password/admin">
                                       
                                        {{ csrf_field() }}
                                            {{method_field('PATCH')}}
                                          <div class = "form-group">
                                              <label> New Password</label>
                                              <input type="password" name = "password" class="form-control" value="">
                                          </div>

                                          <div class = "form-group">
                                              <label> Confirm Password</label>
                                              <input type="password" name = "password_confirmation" class="form-control">
                                          </div>

                                          <button class = "btn btn-primary">Update</button>
                                      </form>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                      
                                    </div>
                                  </div>
                                </div>
                              </div>
                              
                  </div>

                </div>
                
                
                </div>

                <div class="card-body">

                        <h5 class = "text-danger"> PLEASE READ THROUGH THE INSTRUCTIONS BELOW TO UNDERSTAND 
                                        HOW TO MANAGE YOUR SITE! </h5>
                            
                            <div class = "container">
                            <ul class="list-group">
                                <li class = "list-group-item"> Always Ensure You Use a Laptop When Trying to Access Your Dashboard For Better Ease of Use</li>
                                <li class = "list-group-item"> Navigate Through the SideBar displaying Your Pics to Edit,Delete and Update the Content of Your Site </li>
                                <li class = "list-group-item"> If By Any Means You Access Your Dashboard Through a Mobile Device, Click on the Button at The Top Right Corner to See The SideBar</li>
                                <li class = "list-group-item"> Always  Ensure You Logout From Your Dashboard Before Leaving The Site, For Security Reasons</li>
                                <li class = "list-group-item"> Do Know that Anything You Do Here Shows On the Index Page of Your Site, that is the main page of the site. Always Check To See the Effect</li>
                            </ul>
                            </div>
                        

                    </div>
            </div> 
        </div>    
    </div> 
</div>




  

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Adedokun Julius</span></strong>
      </div>
      <div class="credits">
        
        Designed by Mydesoft</a>
      </div>
    </div>
  </footer><!-- End  Footer -->
  <!-- Vendor JS Files -->
  <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('assets/vendor/counterup/counterup.min.js')}}"></script>
  <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/vendor/venobox/venobox.min.js')}}"></script>
  <script src="{{asset('assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('assets/vendor/typed.js/typed.min.js')}}"></script>
  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>

                         
            
