@extends('frontend.welcome')

@section('content')
      <!-- Start Events Details Area -->
      <section class="events-details-area ptb-100">



        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="events-details-header">
                        <a href="#" class="back-all-events"><i class="flaticon-left-chevron"></i> </a>
                        <h3>{{ $servicedetails->service_tender_name }}</h3>
                        
                    </div>
                </div>

                <div class="col-lg-8 col-md-12">
                    <div class="events-details">
                        <div class="events-details-image">
                            <img src="{{ asset('storage') }}/{{ $servicedetails->service_image }}" alt="image">
                        </div>

                        <div class="events-details-desc">
                            <p>{{ $servicedetails->service_tender_description }}</p>           
                             </div>
                        <div class="pearo-post-navigation">

                        @if(!App\BidInfo::where('bidder_id', Auth::id())->exists())

                            <form action="{{ route('bidinfo') }}" method="POST">
                                @csrf
                                    <div class="form-group">
                                      <label for="exampleInputEmail1">Input Your Bid Amount</label>
                                      <input type="text" name="bidamount" class="form-control" placeholder="Input Your Bid Amount">
                                    </div>
                                    <div class="form-group">
                                      <label for="exampleInputPassword1">Write Something</label>
                                      <input type="textarea" name="biddes" class="form-control"  placeholder="Bidding Description">
                                    </div>

                                    <button type="submit" class="btn btn-primary" name="service_id" value="{{ $servicedetails->id }}">Submit</button>
                            </form>


                        @endif


                            <div>
                                @forelse($servicedetails->myBids->where('status', 1) as $bid)
                                {{ $bid->bidamount }} <br>
                                {{ $bid->biddes }}
                                @empty
                                    No bids availabe!
                                @endforelse
                            </div>




                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12">
                    <aside class="widget-area" id="secondary">
                        <section class="widget widget_events_details">
                            <h3 class="widget-title">Details</h3>

                            <ul>
                                <li><span>Price:</span>  {{ $servicedetails->service_tender_any_price }}</li>
                                <li><span>Quantity:</span>    {{ $servicedetails->service_tender_quantity }}</li>
                                <li><span>Category:</span> {{ $servicedetails->Category->category_name }}</li>
                                <li><span>Created At:</span> <a href="#">{{ $servicedetails->Category->created_at }}</a></li>
                            </ul>
                        </section>

                       

                      
                    </aside>
                </div>




            </div>
        </div>

    </section>
    <!-- End Events Details Area -->
@endsection
