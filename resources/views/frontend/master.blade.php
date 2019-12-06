@extends('frontend.welcome')
@section('content')
    
        <!-- Start Header Area -->
      
        <!-- End Header Area -->

        

        <!-- Start Main Banner Area -->
       @include('frontend.inc.carosel')
        <!-- End Main Banner Area -->

        <!-- Start About Area -->
        
        <!-- End About Area -->
        <!-- Services features -->
        @include('frontend.category')
        <!-- end of Services -->

        <!-- Start Find Agent Area -->
        
        <!-- End Find Agent Area -->

        <!-- Start Feedback Area -->
        @include('frontend.tenders')
      
        <!-- End Feedback Area -->
        @include('frontend.achievement')
        <!-- Start CTR Area -->
       
        <!-- End CTR Area -->
        @include('frontend.team_member')
        <!-- Start Quote Area -->
        
        <!-- End Quote Area -->

        <!-- Start Our Achievements Area -->
        @include('frontend.clientstory')
        <!-- End Our Achievements Area -->

        <!-- Start Team Area -->
        
        <!-- End Team Area -->

        <!-- Start Partner Area -->
        @include('frontend.quote')
        <!-- End Partner Area -->

        <!-- Start Blog Area -->
       
        <!-- End Blog Area -->
        
        <!-- Start Footer Area -->
        @include('frontend.footer')
        <!-- End Footer Area -->
        
@endsection