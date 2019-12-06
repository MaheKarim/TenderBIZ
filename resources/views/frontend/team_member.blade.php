<section class="team-area ptb-100 pb-70">
    <div class="container">
        <div class="section-title">
            
            <h2>Meet Our Experts</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>


       
        <div class="team-slides owl-carousel owl-theme">
                @foreach ($teaminfos as $teaminfo)
            <div class="single-team-box">
                <div class="image">
                    <img src="{{ asset('storage') }}/{{ $teaminfo->teammember_image }}" alt="image">

                    <ul class="social">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        
                    </ul>
                </div>

                <div class="content">
                    <h3>{{ $teaminfo->teammember_name }}</h3>
                    <span>{{ $teaminfo->teammember_designation }}</span>
                </div>
            </div>
            @endforeach
        
        </div>
    </div>
</section>