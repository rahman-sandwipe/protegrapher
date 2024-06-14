<section class="footer-area">
    <div class="section-space">
       <div class="container max-width">
          <div class="row rowsafari">
             <div class="col-lg-3 col-sm-6 col-md-6 col-12 res-padding-bottom">
                <div class="section-margin-bottom">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset($config->web_logo) }}" alt="{{ $config->web_name }}" class="img-fluid">
                    </a>
                </div>
                <p class="text-white section-margin-bottom">{!! $config->web_metadesc !!}</p>
                <ul class="display-table">
                    @foreach ($socials as $social)
                    <li class="display-table-cell">
                        <a href="{{ $social->link }}" class="text-white">
                            <i class="{{ $social->icon }}"></i>
                        </a>
                    </li>
                    @endforeach
                </ul>
             </div>
             <div class="col-lg-3 col-sm-6 col-md-6 col-12 res-padding-bottom">
                {{-- <h5 class="section-margin-bottom"><a href="#" class="text-white">Recent Post</a></h5>
                <div class="section-margin-bottom">
                   <div class="reach-img-display">
                      <img src="images/85x85x1.png" alt="85x85x1">
                   </div>
                   <div class="align-middle reach-us-contant-display">
                      <p class="para"><a href="#">Discover the bower of finance power</a>
                         <br><span>August 18,2019</span>
                      </p>
                   </div>
                </div>
                <div>
                   <div class="reach-img-display">
                      <img src="images/85x85x2.png" alt="85x85x2">
                   </div>
                   <div class="align-middle reach-us-contant-display">
                      <p class="para"><a href="#">Our approach is collaborate and adaptive</a>
                         <br><span>August 8,2019</span>
                      </p>
                   </div>
                </div> --}}
             </div>
             <div class="col-lg-3 col-sm-6 col-md-6 col-12 res-row-padding-bottom">
                <h5 class="section-margin-bottom"><a href="#" class="text-white">Address</a></h5>
                <div class="section-margin-bottom">
                   <p class="para"><span>Address:</span> {{ $config->author_address }}</p>
                </div>
                <div class="section-margin-bottom">
                   <p class="para"><span>Email:</span> {{ $config->author_mail }}</p>
                </div>
                <div class="section-margin-bottom">
                   <p class="para"><span>Phone:</span> {{ $config->author_phone }}</p>
                </div>
             </div>
             <div class="col-lg-3 col-sm-6 col-md-6 col-12">
                <h5 class="section-margin-bottom"><a href="#" class="text-white">Signup for newsletter</a></h5>
                <div class="section-margin-bottom">
                   {{-- <p class="para">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p> --}}
                </div>
                <form action="http://keenicon.us11.list-manage.com/subscribe/post?u=e479edaf1c9c3d2aa4e927ed8&amp;id=07753442c3" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" novalidate>
                   <div>
                      <input class="form-input" type="email" name="EMAIL" value="" id="mce-EMAIL" placeholder="Enter Your Email">
                   </div>
                   <div class="btn-wrapper">
                      <input type="submit" id="mc-embedded-subscribe" class="boxed-btn btn-rounded" name="submit" value="Submit">
                   </div>
                   <div class="subs-error-top" id="ResultMsg"><span id="SuccessMsg" class="email-success SuccessMsg"></span><span id="FailureMsg" class="email-failure FailureMsg"></span>
                   </div>
                   <div id="mce-responses">
                      <div class="response response-msg" id="mce-error-response"></div>
                      <div class="response response-msg" id="mce-success-response"></div>
                   </div>
                </form>
             </div>
          </div>
       </div>
       <div class="footer-align line-mar">
          <p class="text-white copy-right">&copy; All Rights Reserved</p>
       </div>
    </div>
</section>