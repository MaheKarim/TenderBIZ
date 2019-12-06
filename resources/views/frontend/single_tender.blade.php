@extends('frontend.welcome')

@section('content')
      <!-- Start Events Details Area -->
      <section class="events-details-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="events-details-header">
                        <a href="#" class="back-all-events"><i class="flaticon-left-chevron"></i> Back To All Events</a>
                        <h3>2020 Life Insurance Conference</h3>
                        <ul class="events-info-meta">
                            <li><i class="flaticon-timetable"></i> 10 November, 2020</li>
                            <li><i class="far fa-clock"></i> 10.00AM - 10.00PM</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-8 col-md-12">
                    <div class="events-details">
                        <div class="events-details-image">
                            <img src="assets/img/events-image/1.jpg" alt="image">
                        </div>

                        <div class="events-details-desc">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>

                            <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

                            <blockquote class="wp-block-quote">
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>

                                <cite>Tom Cruise</cite>
                            </blockquote>

                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>

                            <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like) making it look like readable English.</p>
                        </div>

                        <div class="events-info-links">
                            <a href="#">+ Google Calendar</a>
                            <a href="#">+ iCal Export</a>
                        </div>

                        <div class="pearo-post-navigation">
                            <div class="prev-link-wrapper">
                                <div class="info-prev-link-wrapper">
                                    <a href="#">
                                        <span class="image-prev">
                                            <img src="assets/img/services-image/1.jpg" alt="image">
                                            <span class="post-nav-title">Prev</span>
                                        </span>
    
                                        <span class="prev-link-info-wrapper">
                                            <span class="prev-title">Health Insurance</span>
                                            <span class="meta-wrapper">
                                                <span class="date-post">January 21, 2020</span>
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>
    
                            <div class="next-link-wrapper">
                                <div class="info-next-link-wrapper">
                                    <a href="#">
                                        <span class="next-link-info-wrapper">
                                            <span class="next-title">Life Insurance</span>
                                            <span class="meta-wrapper">
                                                <span class="date-post">January 21, 2020</span>
                                            </span>
                                        </span>
    
                                        <span class="image-next">
                                            <img src="assets/img/services-image/3.jpg" alt="image">
                                            <span class="post-nav-title">Next</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12">
                    <aside class="widget-area" id="secondary">
                        <section class="widget widget_events_details">
                            <h3 class="widget-title">Details</h3>

                            <ul>
                                <li><span>Start:</span> December 15, 2020 8:00AM</li>
                                <li><span>End:</span> December 19, 2020 8:00AM</li>
                                <li><span>Events Category:</span> <a href="#">Insurance</a></li>
                            </ul>
                        </section>

                        <section class="widget widget_events_details">
                            <h3 class="widget-title">Organizer</h3>

                            <ul>
                                <li><span>Phone:</span> <a href="#">+1 518 285679</a></li>
                                <li><span>Email:</span> <a href="#">info@pearo.com</a></li>
                                <li><span>Website:</span> <a href="#">http://www.pearo.com</a></li>
                            </ul>
                        </section>

                        <section class="widget widget_events_details">
                            <h3 class="widget-title">Venue</h3>

                            <ul>
                                <li><a href="#">27 Division St, New York, NY 10002, USA</a></li>
                                <li><a href="#">+ Google Map</a></li>
                            </ul>
                        </section>
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!-- End Events Details Area -->
@endsection