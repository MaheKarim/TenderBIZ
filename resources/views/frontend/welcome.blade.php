<!doctype html>
<html lang="en">
    
<!-- Mirrored from templates.envytheme.com/pearo/default/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Dec 2019 14:34:43 GMT -->
@include('frontend.inc.head')

    <body>

        <!-- Preloader -->
        <div class="preloader">
            <div class="loader">
                <div class="shadow"></div>
                <div class="box"></div>
            </div>
        </div>
        <!-- End Preloader -->
        

        @yield('content')


        <div class="go-top"><i class="fas fa-chevron-up"></i><i class="fas fa-chevron-up"></i></div>
        
    @include('frontend.inc.script')

    </body>

<!-- Mirrored from templates.envytheme.com/pearo/default/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Dec 2019 14:35:18 GMT -->
</html>