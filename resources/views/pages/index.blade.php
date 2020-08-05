@extends('layouts.master')


@section('content')
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <h1>Adedokun Julius</h1>
      <p>I'm a <span class="typed" data-typed-items="Civil Engineer,  Safety & Health Engineer, Certified Project Manager"></span></p>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>About</h2>
          <p>I’m an intelligent and presentable individual with an outgoing, likable personality; possessing the ability to work 
          effectively as part of a team as well on own initiative. I also possess a fresh, modern approach to Engineering 
          industry and employ creative and enthusiastic methods to problem solving. I am a determined individual 
          who sees tasks through to the end whilst planning and organizing activities to meet timelines.</p>
        </div>

        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <img src="assets/img/profile.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>Civil Engineer &amp; Health and Safety Personnel.</h3>
            <p class="font-italic">
              I am a certified Engineer that has been inducted into the the Nigeria Society of Engineering (GNSE)					            
              ,Chartered Institute of Environmental Health and Safety USA (CIEHS)          
              and Chartered Institute of Project Management and Facility Management (CIPM)         

            </p>
            
              @if(count($abouts) > 0)
            <div class="row">
              <div class="col-lg-6">
               <ul>
            
                @foreach ($abouts as $about )
                   <li><i class="icofont-rounded-right"></i> <strong>Birthday:</strong> 2 September</li>
                  <li><i class="icofont-rounded-right"></i> <strong>Website:</strong>{{$about->site}} </li>
                  <li><i class="icofont-rounded-right"></i> <strong>Phone:</strong> {{$about->phone}}</li>
                  <li><i class="icofont-rounded-right"></i> <strong>City:</strong>{{ $about->state}} </li>
                       </ul>
              </div>


                <div class="col-lg-6">
                <ul>
                  
                  <li><i class="icofont-rounded-right"></i> <strong>Degree:</strong> {{$about->degree}}</li>
                  <li><i class="icofont-rounded-right"></i> <strong>Email:</strong> {{$about->email}}</li>
                  <li><i class="icofont-rounded-right"></i> <strong>Freelance:</strong> Available</li>
                </ul>
              </div>
            </div>

                @endforeach
              @endif
               
                 
             
            
            
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Facts Section ======= -->
    <section id="facts" class="facts">
      <div class="container">

        <div class="section-title">
          <h2>Facts</h2>
          <p>As an Engineer that has a vast experience and knowledge in Engineering Field, I have been able to complete numerous
          projects and worked with several clients.
           </p>
        </div>

        <div class="row no-gutters">

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up">
            <div class="count-box">
              <i class="icofont-simple-smile"></i>
              <span data-toggle="counter-up">20</span>
              <p><strong>Happy Clients</strong></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="count-box">
              <i class="icofont-document-folder"></i>
              <span data-toggle="counter-up">30</span>
              <p><strong>Projects</strong></p>
            </div>
          </div>

         

      
        </div>

      </div>
    </section><!-- End Facts Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Skills  &amp; Interests</h2>
          <p></p>
        </div>

        <div class="row skills-content">

          <div class="col-lg-6" data-aos="fade-up">

           

            <div class="progress">
              <span class="skill">AUTOCAD<i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">ORION<i class="val">85%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">LEVELLING INSTRUMENT<i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>


          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

            
            <div class="progress">
              <span class="skill">CIVIL3D <i class="val">85%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">RCD<i class="val">85%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

              <div class="progress">
              <span class="skill">STAADpro<i class="val">85%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End Skills Section -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container">

        <div class="section-title">
          <h2>Resume</h2>
          <p>Below is my Curriculum Vitae and Professional Experiences.</p>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-up">
            <h3 class="resume-title">Sumary</h3>
            <div class="resume-item pb-0">
              <h4>Julius Adedokun</h4>
              <p><em>Innovative and driven Civil Engineer with 3+ years of experience designing and constructing projects from initial concept to final.</em></p> 
            </div>

         {{-- THE EDUCATION PAGE --}}
         @if(count($educations) > 0)
          
                <h3 class="resume-title">Education</h3>
                    <div class="resume-item">
                      @foreach ($educations as $education)
                         <h4> {{$education->qualification}}</h4>
                         <h5>{{$education->date}}</h5>
                        <p><em>{{$education->institution}}</em></p>
                        <p><em> Course of Study : {{$education->course}} </em></p>
                        @endforeach
                  </div>
                
     
         @endif
         </div>
            
             
         {{-- EXPERIENCE PAGE --}}
        
              <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
              @if(count($experiences) > 0)
                  <h3 class="resume-title">Professional Experience</h3>
               
                  <div class="resume-item">
                      
                  @foreach ($experiences as $experience ) <br/>
                      <h4>{{$experience->position}}</h4>
                       <h5>{{$experience->year}}</h5>
                       <p><em>{{$experience->company}}</em></p>
                       <li>{{$experience->responsibilities}}</li>
                      @endforeach
                    </ul>
                    @endif 
                  </div>
               
              </div>
       
        </div>

      </div>
    </section><!-- End Resume Section -->



    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container">
        <div class="section-title">
          <h2>Portfolio</h2>
          <p> My portfolio below shows some of the projects worked on and pictures of me during the project work</p>
        </div>

        
        
       
            @if(count($portfolios) > 0)
             @foreach ($portfolios as $portfolio )
             <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">
                <div class="col-md-4 portfolio-item filter-app">
                  <div class="portfolio-wrap">
                           <img src =  "{{asset('storage/portfolio_images/'.$portfolio->portfolio_image1)}}" width="320" height="400"><br/><br/>
                  </div>
                </div>



                <div class="col-md-4 portfolio-item filter-app">
                  <div class="portfolio-wrap">
                           <img src =  "{{asset('storage/portfolio_images/'.$portfolio->portfolio_image2)}}" width="320" height="400"><br/><br/>
                  </div>
                </div>


              <div class="col-md-4 portfolio-item filter-app">
                  <div class="portfolio-wrap">
                           <img src =  "{{asset('storage/portfolio_images/'.$portfolio->portfolio_image3)}}" width="320" height="400"><br/><br/>
                  </div>
                </div>




               </div> 
             @endforeach
              @endif
            {{-- {{$portfolios}} --}}
          
    </section><!-- End Portfolio Section -->

  

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <p>You Can Contact Me by Filling the Contact Form Below. </p>
        </div>

        <div class="row" data-aos="fade-in">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Location:</h4>
                <p>Ojodu, Lagos State</p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>adedokunjulius@gmail.com</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Call:</h4>
                <p>+2347032825069, 08109620167</p>
              </div>

              <iframe src="https://www.google.com/maps/place/Ojodu/@6.6326657,3.3399401,14z/data=!3m1!4b1!4m5!3m4!1s0x103b93ea60971ee3:0xd335301146fdc207!8m2!3d6.6336683!4d3.3573431" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="/contact" method="POST" role="form">
               {{ csrf_field() }}
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" required/>
                  <div class="validate"></div>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" required />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" required />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
              <div class="text-center"><button class="btn btn-primary">Send Message</button></div>
            </form>
            @include('includes.error')
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  @endsection

