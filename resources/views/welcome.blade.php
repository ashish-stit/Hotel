@extends('frontpanel.layout')
@section('content')
    <section>
        <div class="block no-padding">
            <div class="container fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="main-featured-sec">
                            <div class="new-slide">
                                <img src="{{asset('public/images/1.jpg')}}">
                            </div>
                            <div class="job-search-sec">
                                <div class="job-search">
                                    <h3>The Easiest Way to Get Your New Job</h3>
                                    <span>Find Jobs, Employment & Career Opportunities</span>
                                    <form>
                                        <div class="row">
                                            <div class="col-lg-7 col-md-5 col-sm-12 col-xs-12">
                                                <div class="job-field">
                                                    <input type="text" placeholder="Job title, keywords or company name" />
                                                    <i class="fa fa-keyboard-o"></i>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12">
                                                <div class="job-field">
                                                    <select data-placeholder="City, province or region" class="chosen-city">
                                                        <option>New York </option>
                                                        <option>Istanbul</option>
                                                        <option>London</option>
                                                        <option>Russia</option>
                                                    </select>
                                                    <i class="fa fa-map-marker"></i>
                                                </div>
                                            </div>
                                            <div class="col-lg-1 col-md-2 col-sm-12 col-xs-12">
                                                <button type="submit"><i class="fa fa-search"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                    
                                </div>
                            </div>
                            <div class="scroll-to">
                                <a href="#scroll-here" title=""><i class="fa fa-arrow-down"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="scroll-here">
        <div class="block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="heading">
                            <h2>Popular Categories</h2>
                            <span>37 jobs live - 0 added today.</span>
                        </div><!-- Heading -->
                        <div class="cat-sec">
                            <div class="row no-gape">
                                <div class="col-lg-3 col-md-3 col-sm-6">
                                    <div class="p-category">
                                        <a href="#" title="">
                                            <i class="fa fa-bullhorn"></i>
                                            <span>Design, Art & Multimedia</span>
                                            <p>(22 open positions)</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6">
                                    <div class="p-category">
                                        <a href="#" title="">
                                            <i class="fa fa-graduation-cap"></i>
                                            <span>Education Training</span>
                                            <p>(6 open positions)</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6">
                                    <div class="p-category">
                                        <a href="#" title="">
                                            <i class="fa fa-line-chart "></i>
                                            <span>Accounting / Finance</span>
                                            <p>(3 open positions)</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6">
                                    <div class="p-category">
                                        <a href="#" title="">
                                            <i class="fa fa-users"></i>
                                            <span>Human Resource</span>
                                            <p>(3 open positions)</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cat-sec">
                            <div class="row no-gape">
                                <div class="col-lg-3 col-md-3 col-sm-6">
                                    <div class="p-category">
                                        <a href="#" title="">
                                            <i class="fa fa-phone"></i>
                                            <span>Telecommunications</span>
                                            <p>(22 open positions)</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6">
                                    <div class="p-category">
                                        <a href="#" title="">
                                            <i class="fa fa-cutlery"></i>
                                            <span>Restaurant / Food Service</span>
                                            <p>(6 open positions)</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6">
                                    <div class="p-category">
                                        <a href="#" title="">
                                            <i class="fa fa-building"></i>
                                            <span>Construction / Facilities</span>
                                            <p>(3 open positions)</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6">
                                    <div class="p-category">
                                        <a href="#" title="">
                                            <i class="fa fa-user-md"></i>
                                            <span>Health</span>
                                            <p>(3 open positions)</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="browse-all-cat">
                            <a href="#" title="">Browse All Categories</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="block double-gap-top double-gap-bottom">
            <div data-velocity="-.1" style="background: url(images/2.jpg) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible layer color"></div><!-- PARALLAX BACKGROUND IMAGE -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="simple-text-block">
                            <h3>Make a Difference with Your Online Resume!</h3>
                            <span>Your resume in minutes with Shortlist-chef resume assistant is ready!</span>
                            <a href="#" title="">Create an Account</a>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
    </section>

    <section>
        <div class="block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="heading">
                            <h2>Featured Jobs</h2>
                            <span>Leading Employers already using job and talent.</span>
                        </div><!-- Heading -->
                        <div class="job-listings-sec">
                            <div class="job-listing">
                                <div class="job-title-sec">
                                    <div class="c-logo"> <img src="{{asset('public/images/l1.png')}}" alt="" /> </div>
                                    <h3><a href="#" title="">Web Designer / Developer</a></h3>
                                    <span>Massimo Artemisis</span>
                                </div>
                                <span class="job-lctn"><i class="fa fa-map-marker"></i>Sacramento, California</span>
                                <span class="fav-job"><i class="fa fa-heart-o"></i></span>
                                <span class="job-is ft">FULL TIME</span>
                            </div><!-- Job -->
                            <div class="job-listing">
                                <div class="job-title-sec">
                                    <div class="c-logo"> <img src="{{asset('public/images/l2.png')}}" alt="" /> </div>
                                    <h3><a href="#" title="">Marketing Director</a></h3>
                                    <span>Tix Dog</span>
                                </div>
                                <span class="job-lctn"><i class="fa fa-map-marker"></i>Rennes, France</span>
                                <span class="fav-job"><i class="fa fa-heart-o"></i></span>
                                <span class="job-is pt">PART TIME</span>
                            </div><!-- Job -->
                            <div class="job-listing">
                                <div class="job-title-sec">
                                    <div class="c-logo"> <img src="{{asset('public/images/l3.png')}}" alt="" /> </div>
                                    <h3><a href="#" title="">C Developer (Senior) C .Net</a></h3>
                                    <span>StarHealth</span>
                                </div>
                                <span class="job-lctn"><i class="fa fa-map-marker"></i>London, United Kingdom</span>
                                <span class="fav-job"><i class="fa fa-heart-o"></i></span>
                                <span class="job-is ft">FULL TIME</span>
                            </div><!-- Job -->
                            <div class="job-listing">
                                <div class="job-title-sec">
                                    <div class="c-logo"> <img src="{{asset('public/images/l4.png')}}" alt="" /> </div>
                                    <h3><a href="#" title="">Application Developer For Android</a></h3>
                                    <span>Altes Bank</span>
                                </div>
                                <span class="job-lctn"><i class="fa fa-map-marker"></i>Istanbul, Turkey</span>
                                <span class="fav-job"><i class="fa fa-heart-o"></i></span>
                                <span class="job-is fl">FREELANCE</span>
                            </div><!-- Job -->
                             
                            <div class="job-listing">
                                <div class="job-title-sec">
                                    <div class="c-logo"> <img src="{{asset('public/images/l6.png')}}" alt="" /> </div>
                                    <h3><a href="#" title="">Social Media and Public Relation Executive </a></h3>
                                    <span>MediaLab</span>
                                </div>
                                <span class="job-lctn"><i class="fa fa-map-marker"></i>Ankara / Turkey</span>
                                <span class="fav-job"><i class="fa fa-heart-o"></i></span>
                                <span class="job-is ft">FULL TIME</span>
                            </div><!-- Job -->
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="browse-all-cat">
                            <a href="#" title="">Load more listings</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="block">
            <div data-velocity="-.1" style="background: url(images/3.jpg) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible layer color light"></div><!-- PARALLAX BACKGROUND IMAGE -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="heading light">
                            <h2>Kind Words From Happy Candidates</h2>
                            <span>What other people thought about the service provided by JobHunt</span>
                        </div><!-- Heading -->
                        <div class="reviews-sec" id="reviews-carousel">
                            <div class="col-lg-6">
                                <div class="reviews">
                                    <img src="images/r1.jpg" alt="" />
                                    <h3>Augusta Silva <span>Web designer</span></h3>
                                    <p>Without JobHunt i’d be homeless, they found me a job and got me sorted out quickly with everything!  Can’t quite believe the service</p>
                                </div><!-- Reviews -->
                            </div>
                            <div class="col-lg-6">
                                <div class="reviews">
                                    <img src="images/r2.jpg" alt="" />
                                    <h3>Ali Tufan <span>Web designer</span></h3>
                                    <p>Without JobHunt i’d be homeless, they found me a job and got me sorted out quickly with everything!  Can’t quite believe the service</p>
                                </div><!-- Reviews -->
                            </div>
                            <div class="col-lg-6">
                                <div class="reviews">
                                    <img src="images/r1.jpg" alt="" />
                                    <h3>Augusta Silva <span>Web designer</span></h3>
                                    <p>Without JobHunt i’d be homeless, they found me a job and got me sorted out quickly with everything!  Can’t quite believe the service</p>
                                </div><!-- Reviews -->
                            </div>
                            <div class="col-lg-6">
                                <div class="reviews">
                                    <img src="images/r2.jpg" alt="" />
                                    <h3>Ali Tufan <span>Web designer</span></h3>
                                    <p>Without JobHunt i’d be homeless, they found me a job and got me sorted out quickly with everything!  Can’t quite believe the service</p>
                                </div><!-- Reviews -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
    </section>

    <section>
        <div class="block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="heading">
                            <h2>Companies We've Helped</h2>
                            <span>Some of the companies we've helped recruit excellent applicants over the years.</span>
                        </div><!-- Heading -->
                        <div class="comp-sec">
                            <div class="company-img">
                                <a href="#" title=""><img src="{{ asset('public/images/cc1.jpg')}}" alt="" /></a>
                            </div><!-- Client  -->
                            <div class="company-img">
                                <a href="#" title=""><img src="{{ asset('public/images/cc2.jpg')}}" alt="" /></a>
                            </div><!-- Client  -->
                            <div class="company-img">
                                <a href="#" title=""><img src="{{ asset('public/images/cc3.jpg')}}" alt="" /></a>
                            </div><!-- Client  -->
                            <div class="company-img">
                                <a href="#" title=""><img src="{{ asset('public/images/cc4.jpg')}}" alt="" /></a>
                            </div><!-- Client  -->
                            <div class="company-img">
                                <a href="#" title=""><img src="{{ asset('public/images/cc5.jpg')}}" alt="" /></a>
                            </div><!-- Client  -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="block">
            <div data-velocity="-.1" style="background: url(images/resource/parallax3.jpg) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible no-parallax"></div><!-- PARALLAX BACKGROUND IMAGE -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="heading">
                            <h2>Quick Career Tips</h2>
                            <span>Found by employers communicate directly with hiring managers and recruiters.</span>
                        </div><!-- Heading -->
                        <div class="blog-sec">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="my-blog">
                                        <div class="blog-thumb">
                                            <a href="#" title=""><img src="images/b1.jpg" alt="" /></a>
                                            <div class="blog-metas">
                                                <a href="#" title="">March 29, 2017</a>
                                                <a href="#" title="">0 Comments</a>
                                            </div>
                                        </div>
                                        <div class="blog-details">
                                            <h3><a href="#" title="">Attract More Attention Sales And Profits</a></h3>
                                            <p>A job is a regular activity performed in exchange becoming an employee, volunteering, </p>
                                            <a href="#" title="">Read More <i class="fa fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="my-blog">
                                        <div class="blog-thumb">
                                            <a href="#" title=""><img src="images/b2.jpg" alt="" /></a>
                                            <div class="blog-metas">
                                                <a href="#" title="">March 29, 2017</a>
                                                <a href="#" title="">0 Comments</a>
                                            </div>
                                        </div>
                                        <div class="blog-details">
                                            <h3><a href="#" title="">11 Tips to Help You Get New Clients</a></h3>
                                            <p>A job is a regular activity performed in exchange becoming an employee, volunteering, </p>
                                            <a href="#" title="">Read More <i class="fa fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="my-blog">
                                        <div class="blog-thumb">
                                            <a href="#" title=""><img src="images/b2.jpg" alt="" /></a>
                                            <div class="blog-metas">
                                                <a href="#" title="">March 29, 2017</a>
                                                <a href="#" title="">0 Comments</a>
                                            </div>
                                        </div>
                                        <div class="blog-details">
                                            <h3><a href="#" title="">An Overworked Newspaper Editor</a></h3>
                                            <p>A job is a regular activity performed in exchange becoming an employee, volunteering, </p>
                                            <a href="#" title="">Read More <i class="fa fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="block no-padding">
            <div class="container fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="simple-text">
                            <h3>Get a question?</h3>
                            <span>We're here to help. Check out our FAQs, send us an email or call us at 1 (800) 555-5555</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 column">
                        <div class="widget">
                            <div class="about_widget">
                                <div class="logo">
                                    <a href="index.html" title=""><img src="images/logo.png" alt="" /></a>
                                </div>
                                <span>Collin Street West, Victor 8007, Australia.</span>
                                <span>+1 246-345-0695</span>
                                <span><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="bfd6d1d9d0ffd5d0ddd7cad1cb91dcd0d2">[email&#160;protected]</a></span>
                                <div class="social">
                                    <a href="#" title=""><i class="fa fa-facebook"></i></a>
                                    <a href="#" title=""><i class="fa fa-twitter"></i></a>
                                    <a href="#" title=""><i class="fa fa-linkedin"></i></a>
                                    <a href="#" title=""><i class="fa fa-pinterest"></i></a>
                                    <a href="#" title=""><i class="fa fa-behance"></i></a>
                                </div>
                            </div><!-- About Widget -->
                        </div>
                    </div>
                    <div class="col-lg-4 column">
                        <div class="widget">
                            <h3 class="footer-title">Frequently Asked Questions</h3>
                            <div class="link_widgets">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <a href="#" title="">Privacy & Seurty </a>
                                        <a href="#" title="">Terms of Serice</a>
                                        <a href="#" title="">Communications </a>
                                        <a href="#" title="">Disclaimers </a>   
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 column">
                        <div class="widget">
                            <h3 class="footer-title">Find Jobs</h3>
                            <div class="link_widgets">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <a href="#" title="">US Jobs</a>    
                                        <a href="#" title="">Canada Jobs</a>    
                                        <a href="#" title="">UK Jobs</a>    
                                      <a href="#" title="">Australia job</a>    
                                        <a href="#" title="">China job</a>  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
                </div>
            </div>
        </div>
        <div class="bottom-line">
            <span>© 2019 Short-list chef All rights reserved.</span>
            <a href="#scrollup" class="scrollup" title=""><i class="fa fa-arrow-up"></i></a>
        </div>
    </footer>

</div>
<!---------post job pop up---------->

<div class="account-popup-area postjob-popup-box">
    <div class="account-popup">
        <span class="close-popup"><i class="fa fa-close"></i></span>
        <h3>Post Job</h3>
       
        <form>
            <div class="cfield">
                <input type="text" placeholder="Username" />
                <i class="fa fa-user"></i>
            </div>
            <div class="cfield">
                <input type="password" placeholder="********" />
                <i class="fa fa-key"></i>
            </div>
            <div class="cfield">
                <input type="text" placeholder="Email" />
                <i class="fa fa-envelope-o"></i>
            </div>
            
            <div class="cfield">
                <input type="text" placeholder="Phone Number" />
                <i class="fa fa-phone"></i>
            </div>
            <button type="submit">Signup</button>
        </form>
        <div class="extra-login">
            <span>Or</span>
            <div class="login-social">
                <a class="fb-login" href="#" title=""><i class="fa fa-facebook"></i></a>
                <a class="tw-login" href="#" title=""><i class="fa fa-twitter"></i></a>
            </div>
        </div>
    </div>
</div>




<!---popup for login and registration---->


<div class="account-popup-area signup-popup-box">
    <div class="account-popup">
        <span class="close-popup"><i class="fa fa-close"></i></span>
        <h3>Sign Up</h3>
        <form method="POST" action="{{ route('register') }}">
           {{ csrf_field() }}
            <div class="cfield">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus/>
                <i class="fa fa-user"></i>
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="cfield">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="password" />
                <i class="fa fa-key"></i>
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="cfield">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="confirm password" />
                <i class="fa fa-key"></i>
            </div>

            <div class="cfield">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email" />
                <i class="fa fa-envelope-o"></i>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
            </div>
            
            <div class="cfield">
                <input type="text" name="phone" value="{{ old('phone') }}" class="form-control @error('phone') is-invalid @enderror" placeholder="Phone Number" required autocomplete="name" autofocus />
                <i class="fa fa-phone"></i>
                @error('phone')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
            </div>
            <button type="submit" class="btn btn-primary">Signup</button>
        </form>
      <!--   <div class="extra-login">
            <span>Or</span>
            <div class="login-social">
                <a class="fb-login" href="#" title=""><i class="fa fa-facebook"></i></a>
                <a class="tw-login" href="#" title=""><i class="fa fa-twitter"></i></a>
            </div>
        </div> -->
    </div>
</div>

<div class="account-popup-area signin-popup-box">
    <div class="account-popup">
        <span class="close-popup"><i class="fa fa-close"></i></span>
        <h3>User Login</h3>
        <span>Click To Login With Demo User</span>
        <div class="select-user">
            <span>Candidate</span>
            <span>Employer</span>
        </div>
        <form method="POST" action="{{ route('login') }}">
         @csrf
            <div class="cfield">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                <i class="fa fa-user"></i>
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>
            <div class="cfield">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                <i class="fa fa-key"></i>
                 @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>
            <p class="remember-label">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}><label class="form-check-label" for="remember">Remember me</label>
            </p>
            <a href="#" title="">Forgot Password?</a>
            <button type="submit">Login</button>
        </form>
        <div class="extra-login">
            <span>Or</span>
            <div class="login-social">
                <a class="fb-login" href="#" title=""><i class="fa fa-facebook"></i></a>
                <a class="tw-login" href="#" title=""><i class="fa fa-twitter"></i></a>
            </div>
        </div>
    </div>
</div>

@endsection





