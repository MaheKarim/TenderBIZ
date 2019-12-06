<section class="feedback-area ptb-100">
    <div class="container">
        <div class="section-title">
            <span class="sub-title">Our Feedback</span>
            <h2>What client says about us</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>

        <div class="feedback-item-slides owl-carousel owl-theme">

            @php( $reviews = \App\Review::all())
                
            
            @foreach ($reviews as $review)
            
            <div class="single-feedback-item">
                <div class="feedback-desc">
                    <p>{{ $review->reviewer_review }}.</p>
                </div>

                <div class="client-info">
                    <img src="{{ asset('storage') }}/{{ $review->reviewer_image }}" alt="image">
                    <h3>{{ $review->reviewer_name }}</h3>
                    <span>{{ $review->reviewer_designation }}</span>
                </div>
            </div>

            @endforeach

            
        </div>
    </div>
</section>