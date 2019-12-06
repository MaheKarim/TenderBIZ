<section class="blog-area ptb-100">
    <div class="container">
        <div class="section-title">
            <span class="sub-title">Our Tenders</span>
            <h2>Latest Live Tender From Country</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>

        <div class="row">

            @foreach ($services as $service)
                
            <div class="col-lg-4 col-md-6">
                <div class="single-blog-post">
                    <div class="post-image">
                        <a href="#"><img src="{{ asset('storage') }}/{{ $service->service_image }}" alt="image"></a>

                        <div class="date"><i class="flaticon-timetable"></i> {{ $service->created_at }}</div>
                    </div>

                    <div class="post-content">
                        <h3><a href="{{ route('SingleTender' , $service->id) }}">{{ $service->service_tender_name }}</a></h3>
                        <p>{!! str_limit($service->service_tender_description , 50) !!}</p>

                        <a href="{{ route('SingleTender',$service->id) }}" class="default-btn">Bid Now<span></span></a>
                    </div>
                </div>
            </div>

            @endforeach
            

           

            <div class="col-lg-12 col-md-12">
                <div class="blog-notes">
                    <p>{{ $services->links() }} </p>
                </div>
            </div>
        </div>
    </div>
</section>