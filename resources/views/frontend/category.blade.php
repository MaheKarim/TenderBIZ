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
                    {{-- @foreach ($categories as $category) --}}
                        
                   
                    <a class="nav-link feature_link" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
                        <i class="fas fa-building"></i>
                        <p><span>#</span>The Best Consultancy Agencies in Country</p>
                    </a>
                    {{-- @endforeach --}}
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