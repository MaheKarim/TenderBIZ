<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>TenDerBiz</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i|Raleway:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/') }}frontend/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}frontend/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}frontend/css/slick.css">
    <link rel="stylesheet" href="{{ asset('/') }}frontend/css/style.css">
    <link rel="stylesheet" href="{{ asset('/') }}frontend/css/responsive.css">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">

    <!-- start of back to top button -->
    <a class="b2top" style="display: inline;">
        <i class="fa fa-arrow-up" aria-hidden="true"></i>
    </a>
    <!-- end of back to top button -->

    <!-- start of navbar -->
    <nav class="navbar navbar-expand-lg navbar-light full_nav">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('/') }}frontend/images/logo.png" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item ">
                        <a class="nav-link" href="#slick-slider">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#full_about">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#full_services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#full_LiveTender">Live Tender</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#full_Testominial">Testominial</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#full_Pricing">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#get_touch">Contact</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link nav-fixed color-rem" href="{{ route('login') }}">Sign-up </a>
                    </li>

                </ul>

            </div>
        </div>
    </nav>
    <!-- end of navbar -->

    <!-- start of slider -->
    <section id="slick-slider">
        <div class="slider-all">
            <div class="full_slider">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 ml-auto text-right">
                            <div class="slide-txt text-white">
                                <h1><span>BD</span>Tender</h1>
                                <h3>Drop Your Tender Easily</h3>

                                <p class="pl-5">
                                   Since 2012 We serve you various way. Our Main Motto is to satisfy your Ultimate Goal and our main power is Our Seller who try to meat your point as highest possible way.
                                </p>
                                <div class="slider-btn">

                                    <a href="{{ route('login') }}" class="buyer-bg">
                                        <div class="buyer-btn">
                                            <i class="fab fa-buysellads"></i>
                                            <p>Sign-in as a<span>Buyer</span></p>
                                        </div>
                                    </a>
                                    <a href="{{ url('login') }}" class="seller-bg">
                                        <div class="seller-btn">
                                            <i class="fab fa-sellcast"></i>
                                            <p>Sign-in as a<span>Seller</span></p>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="full_slider1">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 ml-auto text-right">
                            <div class="slide-txt text-white">
                                <h1><span>BD</span>Tender</h1>
                                <h3>Find Out the most Renowned Company</h3>

                                <p class="pl-5">
                                    Since 2012 We serve you various way. Our Main Motto is to satisfy your Ultimate Goal and our main power is Our Seller who try to meat your point as highest possible way.
                                </p>
                                <div class="slider-btn">

                                    <a href="#" class="buyer-bg">
                                        <div class="buyer-btn">
                                            <i class="fab fa-buysellads"></i>
                                            <p>Sign-in as<span>Buyer</span></p>
                                        </div>
                                    </a>
                                    <a href="#" class="seller-bg">
                                        <div class="seller-btn">
                                            <i class="fab fa-sellcast"></i>
                                            <p>Sign-in as on<span>Seller</span></p>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="full_slider2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 ml-auto text-right">
                            <div class="slide-txt text-white">
                                <h1><span>BD</span>Tender</h1>
                                <h3>Deal With Them Easily</h3>

                                <p class="pl-5">
                                    Since 2012 We serve you various way. Our Main Motto is to satisfy your Ultimate Goal and our main power is Our Seller who try to meat your point as highest possible way.
                                </p>
                                <div class="slider-btn">

                                    <a href="#" class="buyer-bg">
                                        <div class="buyer-btn">
                                            <i class="fab fa-buysellads"></i>
                                            <p>Sign-in as<span>Buyer</span></p>
                                        </div>
                                    </a>
                                    <a href="#" class="seller-bg">
                                        <div class="seller-btn">
                                            <i class="fab fa-sellcast"></i>
                                            <p>Sign-in as<span>Seller</span></p>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="#" class="home_icon">
            <i class="fas fa-home"></i>
        </a>

    </section>
    <!-- end of slider -->

    <!-- start of about us -->
    <section id="full_about" class="p-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-8">
                    <div class="about-txt text-center">
                        <h2>About us</h2>
                        <img src="{{ asset('/') }}frontend/images/shape.png" alt="">
                        <p class="mt-3">
                            TenderBiz is the Largest Tender Site in Bd. We Mainly Close here a lots of Renowned Company in Our Country by which you get the Best Services. Our Main motto is Digitalization of Tender Community and Make a Great change from the analog Era
                        </p>
                        <p>
                            So, TenderBiz try to ensure the best services and we have already experienced 30000+ project and lots of happy Customer.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-12 col-md-4 img-size">
                    
                </div>
            </div>
        </div>
    </section>
    <!-- end of about us -->

    <!-- Services features -->
    <section id="full_services">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                    <div class="section-title text-center">
                        <h3>Our Services</h3>
                        <img src="{{ asset('/') }}frontend/images/shape.png" alt="">
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-12 col-md-4 p-0">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        @foreach ($categories as $category)
                            
                       
                        <a class="nav-link feature_link" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
                            <i class="fas fa-building"></i>
                            <p><span>{{ $category->category_name }}</span>The Best Consultancy Agencies in Country</p>
                        </a>
                        @endforeach
                        <a class="nav-link feature_link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                            <i class="fas fa-utensils"></i>
                            <p><span>Food & Bevarage</span>Arrange Any Large Party</p>
                        </a>
                        <a class="nav-link feature_link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                            <i class="fas fa-keyboard"></i>
                            <p><span>Office Equipments</span> Get Ready to fursnish your Office</p>
                        </a>
                        <a class="nav-link feature_link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                            <i class="fas fa-print"></i>
                            <p><span>Advertising & Printing</span>Full Branding of your Company</p>
                        </a>
                        <a class="nav-link feature_link" id="v-pills-features-tab" data-toggle="pill" href="#v-pills-features" role="tab" aria-controls="v-pills-features" aria-selected="false">
                            <i class="fas fa-shopping-bag"></i>
                            <p><span>E-commerece Shopping</span>Make Shopping through TenderBiz.</p>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-8">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                            <div class="row">
                                <div class="col-12 col-md-6 text-center m-auto">
                                    <img src="{{ asset('/') }}frontend/images/phone_sequrity.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="col-md-6">
                                    <div class="feature-text text-right">
                                        <h1>Construction & Consultancy</h1>
                                        <p>
                                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. 
                                        </p>
                                        <p>
                                            If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                            <div class="row">
                                <div class="col-12 col-md-6 text-center">
                                    <img src="{{ asset('/') }}frontend/images/vedio_call.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="col-md-6">
                                    <div class="feature-text text-right">
                                        <h1>Food & Bevarage</h1>
                                        <p>
                                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. 
                                        </p>
                                        <p>
                                            If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                            <div class="row">
                                <div class="col-12 col-md-6 text-center">
                                    <img src="{{ asset('/') }}frontend/images/feture_img.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="col-md-6">
                                    <div class="feature-text text-right">
                                        <h1>Office Equipments</h1>
                                        <p>
                                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. 
                                        </p>
                                        <p>
                                            If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                            <div class="row">
                                <div class="col-12 col-md-6 text-center">
                                    <img src="{{ asset('/') }}frontend/images/free_chat.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="col-md-6">
                                    <div class="feature-text text-right">
                                        <h1>Advertising & Printing</h1>
                                        <p>
                                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. 
                                        </p>
                                        <p>
                                            If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-features" role="tabpanel" aria-labelledby="v-pills-features-tab">
                            <div class="row">
                                <div class="col-12 col-md-6 text-center">
                                    <img src="{{ asset('/') }}frontend/images/online_shopping.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="col-md-6">
                                    <div class="feature-text text-right">
                                        <h1>E-commerce Shopping</h1>
                                        <p>
                                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. 
                                        </p>
                                        <p>
                                            If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of Services -->

    <!-- start of Live Tender -->
    <section id="full_LiveTender" class="p-100">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h3>Live Tender</h3>
                        <img src="{{ asset('/') }}frontend/images/shape.png" alt="">
                    </div>
                </div>
            </div>
            <div class="row slick-screen mt-5">

                <div class="col-12 col-lg-12">
                   @include('frontend.service')
                </div>
            </div>
        </div>
    </section>
    <!-- end of Live Tender -->
    
   

    <!-- start of price plan -->
    <section id="full_price">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-5">
                    <div class="section-title text-center">
                        <h3>pricing plan</h3>
                        <img src="{{ asset('/') }}frontend/images/shape.png" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-3 col-md-6  text-center">
                    <div class=" price-table text-center">
                        <div class="panel-heading">
                            <h3>Free Plan</h3>
                        </div>
                        <div class="plan-table">
                            <div class="plan">
                                <div class="plan-month">
                                    <h4><span>0</span>.00</h4>
                                    <p>Bdt.</p>
                                    
                                </div>
                            </div>
                            <div class="price_text">
                                <p>Free</p>
                                <p>Consultancy Service</p>
                                <p>From Our</p>
                                <p> 100+ Experties</p>

                            </div>
                        </div>
                        <div class="price_btn">Sign Up</div>

                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 col-md-6 text-center">
                    <div class=" price-table text-center">
                        <div class="panel-heading">
                            <h3>Basic Plan</h3>
                        </div>
                        <div class="plan-table">
                            <div class="plan">
                                <div class="plan-month">
                                    <h4><span>3000+</span></h4>
                                    <p>Bdt.</p>
                                    
                                </div>
                            </div>
                            <div class="price_text">
                                <p>Short Tender</p>
                                <p>Less Amount</p>
                                <p>Less Quantity</p>
                                <p>From Basic Sellers</p>

                            </div>
                        </div>
                        <div class="price_btn">Sign Up</div>

                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 col-md-6 text-center">
                    <div class=" price-table text-center">
                        <div class="panel-heading">
                            <h3>Premium Plan</h3>
                        </div>
                        <div class="plan-table">
                            <div class="plan">
                                <div class="plan-month">
                                    <h4><span>20</span>.00</h4>
                                    <p>Bdt.</p>
                                </div>
                            </div>
                            <div class="price_text">
                                <p>One User</p>
                                <p>Android App</p>
                                <p>Unlimited Support</p>
                                <p>Battery Backup 40%</p>

                            </div>
                        </div>
                        <div class="price_btn">Sign Up</div>

                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 col-md-6 text-center">
                    <div class=" price-table text-center">
                        <div class="panel-heading">
                            <h3>Professional Plan</h3>
                        </div>
                        <div class="plan-table">
                            <div class="plan">
                                <div class="plan-month">
                                    <h4><span>22</span>.00</h4>
                                    <p>Per Month</p>
                                </div>
                            </div>
                            <div class="price_text">
                                <p>One User</p>
                                <p>Android App</p>
                                <p>Unlimited Support</p>
                                <p>Battery Backup 40%</p>

                            </div>
                        </div>
                        <div class="price_btn">Sign Up</div>

                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- end of price plan -->

    <!-- start of team -->
    @include('frontend.team')
    <!-- end of team -->

    <!-- start of feedback -->
    <section id="feedback">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                    <div class="section-title text-center">
                        <h3>user’s Feedback</h3>
                        <img src="{{ asset('/') }}frontend/images/shape.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of feedback -->

    <!-- start of full feedback -->
    <section id="full_feedback" class="bg-secondary">
        <div class="container">
            <div class="row">
                <div class="col-md-10 fd-txtslide m-auto bg-light">
                    <div class="fd-txt  text-center py-5">
                        <p>
                            It is the is very good. I never use such as good app ever. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the indusy's standard dummy text ever since the 1500s. So I highly recomended it.
                        </p>
                        <div class="fd-star">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half"></i>
                        </div>
                        <h3>Salam Bhuiyan</h3>
                        <h4>user</h4>
                    </div>
                    <div class="fd-txt bg-light text-center py-5">
                        <p>
                            It is the is very good. I never use such as good app ever. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the indusy's standard dummy text ever since the 1500s. So I highly recomended it.
                        </p>
                        <div class="fd-star">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half"></i>
                        </div>
                        <h3>Aney</h3>
                        <h4>user</h4>
                    </div>
                    <div class="fd-txt bg-light text-center py-5">
                        <p>
                            It is the is very good. I never use such as good app ever. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the indusy's standard dummy text ever since the 1500s. So I highly recomended it.
                        </p>
                        <div class="fd-star">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half"></i>
                        </div>
                        <h3>Razzak Ahmed</h3>
                        <h4>user</h4>
                    </div>
                    <div class="fd-txt bg-light text-center py-5">
                        <p>
                            It is the is very good. I never use such as good app ever. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the indusy's standard dummy text ever since the 1500s. So I highly recomended it.
                        </p>
                        <div class="fd-star">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half"></i>
                        </div>
                        <h3>Partha Paul</h3>
                        <h4>user</h4>
                    </div>
                </div>
                <div class="col-md-6 m-auto">
                    <div class="row client-click mt-5">
                        <div class="col-md-12">
                            <div class="client-img">
                                <img src="{{ asset('/') }}frontend/images/team-img1.jpg" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="client-img">
                                <img src="{{ asset('/') }}frontend/images/team-img2.jpg" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="client-img">
                                <img src="{{ asset('/') }}frontend/images/team-img3.jpg" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="client-img">
                                <img src="{{ asset('/') }}frontend/images/team-img1.jpg" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of full feedback -->

    <!-- start of get touch -->
    <section id="get_touch">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-5">
                    <div class="section-title text-center">
                        <h3>Get In Touch</h3>
                        <img src="{{ asset('/') }}frontend/images/shape.png" alt="">
                    </div>
                </div>
            </div>
            <form action="" method="POST">
            <div class="row">
                <div class="col-md-4">
                    <input type="text" name="name" id="form_txt" placeholder="Name">
                </div>
                <div class="col-md-4">
                    <input type="text" name="name" id="form_txt" placeholder="Your E-mail">
                </div>
                <div class="col-md-4">
                    <input type="text" name="name" id="form_txt" placeholder="Your Website">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <textarea name="Message" id="text_area" cols="30" rows="10" placeholder="Message"></textarea>
                </div>
            </div>

            <div class="text-center mt-4">
                <button type="button" class="touch_btn">send</button>
            </div>


        </div>
    </section>
    <!-- end of get touch -->

    <!-- start of footer  -->
    <section id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="footer_logo">
                        <a href="#"><img src="{{ asset('/') }}frontend/images/logo.png" alt="logo"></a>
                    </div>
                    <div class="footer_icon">
                        <ul>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-behance"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                    <div class="footer_bottom">
                        <p>Copyright &amp; 2019 <span>TenDerBiz</span>. All Right Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- all js file linked here -->
    <script src="{{ asset('/') }}frontend/js/jquery-1.12.4.min.js"></script>
    <script src="{{ asset('/') }}frontend/js/popper.min.js"></script>
    <script src="{{ asset('/') }}frontend/js/bootstrap.min.js"></script>
    <script src="{{ asset('/') }}frontend/js/slick.min.js"></script>
    <script src="{{ asset('/') }}frontend/js/venobox.min.js"></script>
    <script src="https://kit.fontawesome.com/f3fda4c479.js"></script>
    <script src="{{ asset('/') }}frontend/js/main.js"></script>
</body>
</html>
