@extends('frontends.master')
@section('front_contents')
   <!--============================================== SUB HEADER AREA START ==================================================-->
   <section class="form-header-space section-white-bg static-header-bg" id="home">
      <div class="container">
         <div class="row rowsafari">
         <div class="col-lg-6 col-sm-12 col-md-6 col-12">
         </div>
            <div class="col-lg-6 col-sm-12 col-md-6 col-12 header-align">
               <div class="section-margin-bottom border-rounded">
                  <img src="{{ asset($settings->web_fevicon) }}" alt="Web Fevicon" class="img-fluid border-rounded">
               </div>
               <div>
                  <h3 class="section-margin-bottom">Focus</h3>
                  <h1 class="section-margin-bottom sub-head-bg">Photography</h1>
                  <h3>Services</h3>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--================================================= SUB HEADER AREA END ==========================================================-->
   <!--============================================================= ABOUT US AREA START ==============================================================-->
   <section class="section-space section-gray-bg" id="about">
      <div class="container">
         <div class="row rowsafari">
            <div class="col-lg-6 col-sm-12 col-md-12 col-12 order-lg-1 order-md-2 order-2 res-text-align">
               <div class="sec-padding-right">
                  <div class="section-margin-bottom section-subhead-background">
                     <ul class="section-lineimg-ul">
                        <li class="section-lineimg-li">
                           <img src="uploads/abouts/50x2.png" alt="50x2" class="img-fluid">
                        </li>
                        <li class="section-content-li">
                           <h5 class="text-white section-subhead-leftright-img">About Us</h5>
                        </li>
                        <li class="section-lineimg-li">
                           <img src="uploads/abouts/50x2.png" alt="50x2" class="img-fluid">
                        </li>
                     </ul>
                  </div>
                  <h3 class="section-margin-bottom">We Are Offering The Best <span class="coler-text">Photography</span> Services For You</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  <div class="btn-wrapper">	<a href="#" class="boxed-btn btn-rounded btn-right-space">Contact Us</a>
                  </div>
               </div>
            </div>
            <div class="col-lg-6 col-sm-12 col-md-12 col-12 order-lg-2 order-md-1 order-1 res-padding-bottom">
               <div class="sec-padding-left">
                  <img src="uploads/abouts/760x800x1.jpg" alt="760x800x1" class="img-fluid">
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--======================================================== ABOUT US AREA END =======================================================-->
   
   <!--======================================================== PROJECT AREA START ==========================================================-->
   <section class="section-space section-white-bg">
      <div class="container">
         <div class="row rowsafari">
            <div class="col-lg-6 col-sm-12 col-md-12 col-12 order-lg-1 order-md-2 order-2">
               <div class="tab-content">
                  <div class="tab-pane active" id="img-one" role="tabpanel" aria-labelledby="img-one-tab">
                     <img src="uploads/projects/760x640x1.jpg" alt="760x640x1" class="img-fluid">
                  </div>
                  <div class="tab-pane fade" id="img-two" role="tabpanel" aria-labelledby="img-two-tab">
                     <img src="uploads/projects/760x640x2.jpg" alt="760x640x2" class="img-fluid">
                  </div>
                  <div class="tab-pane fade" id="img-three" role="tabpanel" aria-labelledby="img-three-tab">
                     <img src="uploads/projects/760x640x3.jpg" alt="760x640x3" class="img-fluid">
                  </div>
                  <div class="tab-pane fade" id="img-four" role="tabpanel" aria-labelledby="img-four-tab">
                     <img src="uploads/projects/760x640x4.jpg" alt="760x640x4" class="img-fluid">
                  </div>
                  <div class="tab-pane fade" id="img-five" role="tabpanel" aria-labelledby="img-five-tab">
                     <img src="uploads/projects/760x640x5.jpg" alt="760x640x5" class="img-fluid">
                  </div>
                  <div class="tab-pane fade" id="img-six" role="tabpanel" aria-labelledby="img-six-tab">
                     <img src="uploads/projects/760x640x6.jpg" alt="760x640x6" class="img-fluid">
                  </div>
                  <div class="tab-pane fade" id="img-seven" role="tabpanel" aria-labelledby="img-seven-tab">
                     <img src="uploads/projects/760x640x7.jpg" alt="760x640x7" class="img-fluid">
                  </div>
                  <div class="tab-pane fade" id="img-eight" role="tabpanel" aria-labelledby="img-eight-tab">
                     <img src="uploads/projects/760x640x8.jpg" alt="760x640x8" class="img-fluid">
                  </div>
               </div>
            </div>
            <div class="col-lg-6 col-sm-12 col-md-12 col-12 order-lg-2 order-md-1 order-1 res-padding-bottom res-text-align">
               <div class="sec-padding-left">
                  <div class="section-margin-bottom section-subhead-background">
                     <ul class="section-lineimg-ul">
                        <li class="section-lineimg-li">
                           <img src="uploads/projects/50x2.png" alt="50x2" class="img-fluid">
                        </li>
                        <li class="section-content-li">
                           <h5 class="text-white section-subhead-leftright-img">Projects</h5>
                        </li>
                        <li class="section-lineimg-li">
                           <img src="uploads/projects/50x2.png" alt="50x2" class="img-fluid">
                        </li>
                     </ul>
                  </div>
                  <h3 class="section-margin-bottom">Some Outstanding  <span class="coler-text"> Samples</span> Of Our Recent Work</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  <div class="how-it-work-tab-nav">
                     <ul class="nav nav-tabs">
                        <li class="nav-item">
                           <a href="#img-one" class="nav-link active" id="img-one-tab" data-toggle="tab" aria-controls="img-one"></a>
                        </li>
                        <li class="nav-item">
                           <a href="#img-two" class="nav-link" id="img-two-tab" data-toggle="tab" aria-controls="img-two"></a>
                        </li>
                        <li class="nav-item">
                           <a href="#img-three" class="nav-link" id="img-three-tab" data-toggle="tab" aria-controls="img-three"></a>
                        </li>
                        <li class="nav-item">
                           <a href="#img-four" class="nav-link" id="img-four-tab" data-toggle="tab" aria-controls="img-four"></a>
                        </li>
                        <li class="nav-item">
                           <a href="#img-five" class="nav-link" id="img-five-tab" data-toggle="tab" aria-controls="img-five"></a>
                        </li>
                        <li class="nav-item">
                           <a href="#img-six" class="nav-link" id="img-six-tab" data-toggle="tab" aria-controls="img-six"></a>
                        </li>
                        <li class="nav-item">
                           <a href="#img-seven" class="nav-link" id="img-seven-tab" data-toggle="tab" aria-controls="img-seven"></a>
                        </li>
                        <li class="nav-item">
                           <a href="#img-eight" class="nav-link" id="img-eight-tab" data-toggle="tab" aria-controls="img-eight"></a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--======================================================= PROJECT AREA END =======================================================-->
   
   <!--====================================================== SERVICE AREA START ========================================================-->
   <section class="section-space service section-gray-bg" id="service">
      <div class="container">
         <div class="width-50">
            <div class="section-margin-bottom section-subhead-background">
               <ul class="section-lineimg-ul">
                  <li class="section-lineimg-li">
                     <img src="uploads/services/50x2.png" alt="50x2" class="img-fluid">
                  </li>
                  <li class="section-content-li">
                     <h5 class="text-white section-subhead-leftright-img">Services</h5>
                  </li>
                  <li class="section-lineimg-li">
                     <img src="uploads/services/50x2.png" alt="50x2" class="img-fluid">
                  </li>
               </ul>
            </div>
            <h2 class="text-center section-padding-bottom">Our Major<span class="coler-text"> Photography</span> Services</h2>
         </div>
         <div class="row rowsafari">
            <div class="col-lg-4 col-sm-12 col-md-4 col-12 text-center section-padding-bottom">
               <div class="section-margin-bottom">
                  <img src="uploads/services/80x80x1.png" alt="80x80x1" class="img-fluid">
               </div>
               <h4 class="section-margin-bottom"><a href="#">OutDoor Photography</a></h4>
               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
            </div>
            <div class="col-lg-4 col-sm-12 col-md-4 col-12 text-center section-padding-bottom">
               <div class="section-margin-bottom">
                  <img src="uploads/services/80x80x2.png" alt="80x80x2" class="img-fluid">
               </div>
               <h4 class="section-margin-bottom"><a href="#">Wedding Photography</a></h4>
               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
            </div>
            <div class="col-lg-4 col-sm-12 col-md-4 col-12 text-center section-padding-bottom">
               <div class="section-margin-bottom">
                  <img src="uploads/services/80x80x3.png" alt="80x80x3" class="img-fluid">
               </div>
               <h4 class="section-margin-bottom"><a href="#">Aerial Drone Photography</a></h4>
               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
            </div>
         </div>
         <div class="row rowsafari">
            <div class="col-lg-4 col-sm-12 col-md-4 col-12 text-center res-padding-bottom">
               <div class="section-margin-bottom">
                  <img src="uploads/services/80x80x4.png" alt="80x80x4" class="img-fluid">
               </div>
               <h4 class="section-margin-bottom"><a href="#">Virtulal Reality</a></h4>
               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
            </div>
            <div class="col-lg-4 col-sm-12 col-md-4 col-12 text-center res-padding-bottom">
               <div class="section-margin-bottom">
                  <img src="uploads/services/80x80x5.png" alt="80x80x5" class="img-fluid">
               </div>
               <h4 class="section-margin-bottom"><a href="#">Photo Restoration</a></h4>
               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
            </div>
            <div class="col-lg-4 col-sm-12 col-md-4 col-12 text-center">
               <div class="section-margin-bottom">
                  <img src="uploads/services/80x80x6.png" alt="80x80x6" class="img-fluid">
               </div>
               <h4 class="section-margin-bottom"><a href="#">Commercial Videography</a></h4>
               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
            </div>
         </div>
      </div>
   </section>
   <!--================================================== SERVICE AREA END =================================================-->

   <!--================================================= WEDDING AREA START ====================================================-->
   <section class="section-space wedding-area section-white-bg">
      <div class="container">
         <div class="row rowsafari">
            <div class="col-lg-6 col-sm-12 col-md-12 col-12 res-text-align res-padding-bottom">
               <div class=" sec-padding-right">
                  <div class="section-margin-bottom section-subhead-background">
                     <ul class="section-lineimg-ul">
                        <li class="section-lineimg-li">
                           <img src="uploads/weddings/50x2.png" alt="50x2" class="img-fluid">
                        </li>
                        <li class="section-content-li">
                           <h5 class="text-white section-subhead-leftright-img">Wedding</h5>
                        </li>
                        <li class="section-lineimg-li">
                           <img src="uploads/weddings/50x2.png" alt="50x2" class="img-fluid">
                        </li>
                     </ul>
                  </div>
                  <h3 class="text-center">Your Wedding Our Visualization</h3>
                  <div class="how-it-work-tab-nav wedding-tab-width">
                     <ul class="nav nav-tabs">
                        <li class="nav-item">
                           <a href="#img-nine" class="nav-link active show" id="img-nine-tab" data-toggle="tab" aria-controls="img-nine"></a>
                        </li>
                        <li class="nav-item">
                           <a href="#img-ten" class="nav-link" id="img-ten-tab" data-toggle="tab" aria-controls="img-ten"></a>
                        </li>
                        <li class="nav-item">
                           <a href="#img-eleven" class="nav-link" id="img-eleven-tab" data-toggle="tab" aria-controls="img-eleven"></a>
                        </li>
                        <li class="nav-item">
                           <a href="#img-twelve" class="nav-link" id="img-twelve-tab" data-toggle="tab" aria-controls="img-twelve"></a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="col-lg-6 col-sm-12 col-md-12 col-12">
               <div class="tab-content sec-padding-left">
                  <div class="tab-pane active show" id="img-nine" role="tabpanel" aria-labelledby="img-nine-tab">
                     <img src="uploads/weddings/760x450x1.jpg" alt="760x450x1" class="img-fluid">
                  </div>
                  <div class="tab-pane" id="img-ten" role="tabpanel" aria-labelledby="img-ten-tab">
                     <img src="uploads/weddings/760x450x2.jpg" alt="760x450x2" class="img-fluid">
                  </div>
                  <div class="tab-pane" id="img-eleven" role="tabpanel" aria-labelledby="img-eleven-tab">
                     <img src="uploads/weddings/760x450x3.jpg" alt="760x450x3" class="img-fluid">
                  </div>
                  <div class="tab-pane" id="img-twelve" role="tabpanel" aria-labelledby="img-twelve-tab">
                     <img src="uploads/weddings/760x450x4.jpg" alt="760x450x4" class="img-fluid">
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--================================================= WEDDING AREA END ====================================================-->
   
   <!--=========================================================== COUNDERUP AREA START ===================================================-->
   <section class="section-space countup-area">
      <div class="container max-width">
         <div class="row rowsafari counter-width">
            <div class="col-lg-3 col-sm-6 col-md-3 col-12 text-center">
               <div class="res-padding-bottom">
                  <p class="count-num">14,567</p>
                  <p class="title-counterup">Projects</p>
               </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-md-3 col-12 text-center">
               <div class="res-padding-bottom">
                  <p class="count-num">4,567</p>
                  <p class="title-counterup">Photographers</p>
               </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-md-3 col-12 text-center">
               <div class="res-row-padding-bottom">
                  <p class="count-num">167</p>
                  <p class="title-counterup">Customers</p>
               </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-md-3 col-12 text-center">
               <div>
                  <p class="count-num">67</p>
                  <p class="title-counterup">Years</p>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--============================================================== COUNDERUP AREA END ==================================================-->
   
   <!--============================================================ TEAM AREA START =====================================================-->
   <section class="section-space team section-gray-bg" id="portfolio">
      <div class="container">
         <div class="row rowsafari">
            <div class="col-lg-6 col-sm-12 col-md-8 col-12 sec-padding-right-team">
               <div id="carouselExampleControls" class="carousel vert slide" data-ride="carousel" data-interval="900">
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <div class="box">
                           <img class="img-fluid" src="uploads/teams/480x450x1.jpg" alt="480x450x1">
                           <div class="box-content">
                              <div class="title"></div>
                           </div>
                           <div class="team-content">
                              <div class="text-center">
                                 <h6 class="post first-post section-margin-bottom">Pete Sariya</h6>
                                 <h6 class="post second-post">Web Designer</h6>
                                 <ul class="icon">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-youtube"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="box">
                           <img class="d-block img-fluid" src="uploads/teams/480x450x2.jpg" alt="480x450x2">
                           <div class="box-content">
                              <div class="title"></div>
                           </div>
                           <div class="team-content">
                              <div class="text-center">
                                 <h6 class="post first-post section-margin-bottom">Walter Melon</h6>
                                 <h6 class="post second-post">Web Designer</h6>
                                 <ul class="icon">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-youtube"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="box">
                           <img class="d-block img-fluid" src="uploads/teams/480x450x3.jpg" alt="480x450x3">
                           <div class="box-content">
                              <div class="title"></div>
                           </div>
                           <div class="team-content">
                              <div class="text-center">
                                 <h6 class="post first-post section-margin-bottom">Brock Lee</h6>
                                 <h6 class="post second-post">Web Designer</h6>
                                 <ul class="icon">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-youtube"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="prev-nxt-arrow">
                     <a class="bottom-arrow" href="#carouselExampleControls" role="button" data-slide="next"><span class="rounded-circle" aria-hidden="true"><i class="fa fa-angle-double-up"></i></span>
                     </a>
                     <a class="top-arrow" href="#carouselExampleControls" role="button" data-slide="prev"><span class="rounded-circle" aria-hidden="true"><i class="fa fa-angle-double-down"></i></span>
                     </a>
                  </div>
               </div>
            </div>
            <div class="col-lg-6 col-sm-12 col-md-12 col-12 res-text-align">
               <div class="sec-padding-left">
                  <div class="section-margin-bottom section-subhead-background">
                     <ul class="section-lineimg-ul">
                        <li class="section-lineimg-li">
                           <img src="uploads/teams/50x2.png" alt="50x2" class="img-fluid">
                        </li>
                        <li class="section-content-li">
                           <h5 class="text-white section-subhead-leftright-img">Team</h5>
                        </li>
                        <li class="section-lineimg-li">
                           <img src="uploads/teams/50x2.png" alt="50x2" class="img-fluid">
                        </li>
                     </ul>
                  </div>
                  <h3 class="section-margin-bottom">Our Experienced<span class="coler-text"> Photographers</span> Team</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  <div class="btn-wrapper">
                     <a href="#" class="boxed-btn btn-rounded btn-right-space">Book Now</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--============================================================ TEAM AREA END ==========================================================-->
   
   <!--============================================================ VEDIO AREA START ================================================-->
   <section class="section-space video">
      <div class="container">
         <div class="width-50">
            <div class="section-margin-bottom section-subhead-background">
               <ul class="section-lineimg-ul">
                  <li class="section-lineimg-li">
                     <img src="uploads/videos/50x2.png" alt="50x2" class="img-fluid">
                  </li>
                  <li class="section-content-li">
                     <h5 class="text-white section-subhead-leftright-img">Video</h5>
                  </li>
                  <li class="section-lineimg-li">
                     <img src="uploads/videos/50x2.png" alt="50x2" class="img-fluid">
                  </li>
               </ul>
            </div>
            <h2 class="text-center section-padding-bottom">Our Video Projects</h2>
         </div>
         <div class="row rowsafari">
            <div class="col-lg-9 col-sm-12 col-md-12 col-12 order-lg-1 order-md-2 order-2">
               <div class="tab-content">
                  <div class="tab-pane active" id="video-one" role="tabpanel" aria-labelledby="video-one-tab">
                     <iframe src="https://www.youtube.com/embed/v64KOxKVLVg" class="iframe-video"></iframe>
                  </div>
                  <div class="tab-pane fade" id="video-two" role="tabpanel" aria-labelledby="video-two-tab">
                     <iframe src="https://www.youtube.com/embed/lM02vNMRRB0" class="iframe-video"></iframe>
                  </div>
                  <div class="tab-pane fade" id="video-three" role="tabpanel" aria-labelledby="video-three-tab">
                     <iframe src="https://www.youtube.com/embed/cFAylV8Wkwk?t=3" class="iframe-video"></iframe>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-sm-12 col-md-12 col-12 order-lg-2 order-md-1 order-1 res-padding-bottom">
               <div class="res-col">
                  <ul class="nav">
                     <li class="navitem">
                        <a href="#video-one" class="active" id="video-one-tab" data-toggle="tab" aria-controls="video-one">
                           <img src="uploads/videos/300x150x1.jpg" alt="300x150x1" class="img-fluid section-margin">
                        </a>
                     </li>
                     <li class="navitem">
                        <a href="#video-two" class="" id="video-two-tab" data-toggle="tab" aria-controls="video-two">
                           <img src="uploads/videos/300x150x2.jpg" alt="300x150x2" class="img-fluid section-margin">
                        </a>
                     </li>
                     <li class="navitem">
                        <a href="#video-three" class="" id="video-three-tab" data-toggle="tab" aria-controls="video-three">
                           <img src="uploads/videos/300x150x3.jpg" alt="300x150x3" class="img-fluid">
                        </a>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--============================================================== VIDEO AREA END ======================================================-->
   
   <!--========================================================== NEWS AREA START ================================================-->
   <section class="section-space news-area-bg news">
      <div class="container">
         <div class="width-50">
            <div class="section-margin-bottom section-subhead-background">
               <ul class="section-lineimg-ul">
                  <li class="section-lineimg-li">
                     <img src="uploads/articles/50x2.png" alt="50x2" class="img-fluid">
                  </li>
                  <li class="section-content-li">
                     <h5 class="text-white section-subhead-leftright-img">News</h5>
                  </li>
                  <li class="section-lineimg-li">
                     <img src="uploads/articles/50x2.png" alt="50x2" class="img-fluid">
                  </li>
               </ul>
            </div>
            <h2 class="text-center section-padding-bottom">Our Latest News</h2>
         </div>
         <div class="row rowsafari">
            <div class="col-lg-4 col-sm-12 col-md-12 col-12 res-padding-bottom">
               <div class="res-col">
                  <div class="section-margin-bottom">
                     <img src="uploads/articles/650x400x1.jpg" alt="650x400x1" class="img-fluid">
                  </div>
                  <div class="text-center">
                     <div>
                        <ul class="display-table mx-auto section-margin-bottom">
                           <li class="display-table-cell fa-head-padding"><a href="#"><i class="fa fa-calendar"></i>21 aug 2019</a></li>
                           <li class="display-table-cell fa-head-padding"><a href="#"><i class="fa fa-user"></i>Author</a></li>
                           <li class="display-table-cell letter-spacing"><a href="#"><i class="fa fa-comment"></i>87</a></li>
                        </ul>
                     </div>
                     <div>
                        <h5 class="section-margin-bottom"><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a></h5>
                        <p class="section-margin-bottom">Lorem ipsum dolor sit amet, consectetur consectetur adipiscing elit, sed do eiusmod tempor.Lorem ipsum dolor sit amet</p>
                        <div>	<a href="#" class="read-font">Read More</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-sm-12 col-md-12 col-12 res-padding-bottom">
               <div class="res-col">
                  <div class="section-margin-bottom">
                     <img src="uploads/articles/650x400x2.jpg" alt="650x400x2" class="img-fluid">
                  </div>
                  <div class="text-center">
                     <div>
                        <ul class="display-table mx-auto section-margin-bottom">
                           <li class="display-table-cell fa-head-padding"><a href="#"><i class="fa fa-calendar"></i>23 aug 2019</a></li>
                           <li class="display-table-cell fa-head-padding"><a href="#"><i class="fa fa-user"></i>Author</a></li>
                           <li class="display-table-cell letter-spacing"><a href="#"><i class="fa fa-comment"></i>67</a></li>
                        </ul>
                     </div>
                     <div>
                        <h5 class="section-margin-bottom"><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a></h5>
                        <p class="section-margin-bottom">Lorem ipsum dolor sit amet, consectetur consectetur adipiscing elit, sed do eiusmod tempor.Lorem ipsum dolor sit amet</p>
                        <div>	<a href="#" class="read-font">Read More</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-sm-12 col-md-12 col-12">
               <div class="res-col">
                  <div class="section-margin-bottom">
                     <img src="uploads/articles/650x400x3.jpg" alt="650x400x3" class="img-fluid">
                  </div>
                  <div class="text-center">
                     <div>
                        <ul class="display-table mx-auto section-margin-bottom">
                           <li class="display-table-cell fa-head-padding"><a href="#"><i class="fa fa-calendar"></i>25 aug 2019</a></li>
                           <li class="display-table-cell fa-head-padding"><a href="#"><i class="fa fa-user"></i>Author</a></li>
                           <li class="display-table-cell letter-spacing"><a href="#"><i class="fa fa-comment"></i>25</a></li>
                        </ul>
                     </div>
                     <div>
                        <h5 class="section-margin-bottom"><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a></h5>
                        <p class="section-margin-bottom">Lorem ipsum dolor sit amet, consectetur consectetur adipiscing elit, sed do eiusmod tempor.Lorem ipsum dolor sit amet</p>
                        <div>	<a href="#" class="read-font">Read More</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--========================================================= NEWS AREA END ================================================-->
   
   <!--====================================================== TESTIMONIAL AREA START =============================================-->
   <section class="section-space">
      <div class="container">
         <div class="row rowsafari">
            <div class="col-lg-4 col-sm-12 col-md-12 col-12 padding-auto no-padding">
               <div class="testimonial-left-content">
                  <h3 class="section-margin-bottom">What Our Clients Say About Us</h3>
                  <P>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.Lorem ipsum dolor sit amet</p>
               </div>
            </div>
            <div class="col-lg-8 col-sm-12 col-md-12 col-12 text-center no-padding">
               <div id="my-carousel" class="owl-carousel slider-header">
                  <div class="testimonial-main">
                     <div class="testimonial-left">
                        <div class="testimonial-center-content">
                           <img src="uploads/testimonials/300x250x1.png" class="img-fluid" alt="300x250x1">
                        </div>
                     </div>
                     <div class="testimonial-right padding-auto">
                        <div class="testimonial-right-content">
                           <p class="text-center section-margin-bottom">	<i class="fa fa-quote-left"></i>
                           </p>
                           <P class="section-margin-bottom">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.Lorem ipsum dolor sit amet</p>
                           <h6 class="first-post">Greta Life<small>Developer</small></h6>
                        </div>
                     </div>
                  </div>
                  <div class="testimonial-main">
                     <div class="testimonial-left">
                        <div class="testimonial-center-content">
                           <img src="uploads/testimonials/300x250x2.png" class="img-fluid" alt="300x250x2">
                        </div>
                     </div>
                     <div class="testimonial-right padding-auto">
                        <div class="testimonial-right-content">
                           <p class="text-center section-margin-bottom">	<i class="fa fa-quote-left"></i>
                           </p>
                           <P class="section-margin-bottom">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.Lorem ipsum dolor sit amet</p>
                           <h6 class="first-post">Monty Carlo<small>Developer</small></h6>
                        </div>
                     </div>
                  </div>
                  <div class="testimonial-main">
                     <div class="testimonial-left">
                        <div class="testimonial-center-content">
                           <img src="uploads/testimonials/300x250x3.png" class="img-fluid" alt="300x250x3">
                        </div>
                     </div>
                     <div class="testimonial-right padding-auto">
                        <div class="testimonial-right-content">
                           <p class="text-center section-margin-bottom">	<i class="fa fa-quote-left"></i>
                           </p>
                           <P class="section-margin-bottom">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.Lorem ipsum dolor sit amet</p>
                           <h6 class="first-post">Paige Turner<small>Developer</small></h6>
                        </div>
                     </div>
                  </div>
                  <div class="testimonial-main">
                     <div class="testimonial-left">
                        <div class="testimonial-center-content">
                           <img src="uploads/testimonials/300x250x4.png" class="img-fluid" alt="300x250x4">
                        </div>
                     </div>
                     <div class="testimonial-right padding-auto">
                        <div class="testimonial-right-content">
                           <p class="text-center section-margin-bottom">	<i class="fa fa-quote-left"></i>
                           </p>
                           <P class="section-margin-bottom">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.Lorem ipsum dolor sit amet</p>
                           <h6 class="first-post">Hal Appeno<small>Developer</small></h6>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--============================================================ TESTIMONIAL AREA END ===========================================-->
   
   <!--=============================================== CONTACT US AREA START ============================-->
   <section class="section-space contact section-gray-bg" id="contactus">
      <div class="container">
         <div class="contact-area-wrapper">
            <div class="row rowsafari">
               <div class="col-lg-6 col-sm-12 col-md-12 col-12 res-padding-bottom">
                  <div class="sec-padding-right">
                     <div class="contact-res-align">
                        <h5 class="section-margin-bottom">Get In Touch</h5>
                        <h3>Contact Us</h3>
                     </div>
                     <form action="#" class="form-res" method="post">
                        <div class="row rowsafari">
                           <div class="col-lg-6 col-sm-12 col-md-6 col-12">
                              <div class="form-textarea-top-spacing username-icon">
                                 <input type="text" name="fname" class="form-input" value="" placeholder="First Name" required autocomplete="off">
                              </div>
                           </div>
                           <div class="col-lg-6 col-sm-12 col-md-6 col-12">
                              <div class="form-textarea-top-spacing username-icon">
                                 <input type="text" name="lname" class="form-input" value="" placeholder="Last name" required autocomplete="off">
                              </div>
                           </div>
                        </div>
                        <div class="row rowsafari">
                           <div class="col-lg-6 col-sm-12 col-md-6 col-12">
                              <div class="form-textarea-top-spacing phone-icon">
                                 <input type="text" name="phone" class="form-input" value="" placeholder="Your Number" required autocomplete="off" onkeypress="return isNumber(event)">
                              </div>
                           </div>
                           <div class="col-lg-6 col-sm-12 col-md-6 col-12">
                              <div class="form-textarea-top-spacing email-icon">
                                 <input type="email" name="email" class="form-input" value="" placeholder="Your Email" required autocomplete="off">
                              </div>
                           </div>
                        </div>
                        <div class="row rowsafari">
                           <div class="col-lg-12 form-textarea-top-spacing">
                              <div class="textarea message-icon">
                                 <textarea name="message" class="form-control-text" placeholder="Message" required autocomplete="off"></textarea>
                              </div>
                           </div>
                        </div>
                        <div class="btn-wrapper">
                           <button class="boxed-btn btn-rounded" type="submit">Contact Us</button>
                        </div>
                        <div class="messageDiv"> <span class="sucessMessage"> </span>  <span class="failMessage"> 	</span>
                        </div>
                     </form>
                  </div>
               </div>
               <div class="col-lg-6 col-sm-12 col-md-12 col-12">
                  <div class="sec-padding-left">
                     <img src="uploads/contacts/600x710.jpg" alt="600x710" class="img-fluid">
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--============================================== CONTACT US AREA END ===========================================-->
   
@endsection