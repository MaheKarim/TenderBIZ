<section id="full_team">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h3>Team Member</h3>
                        <img src="{{ asset('/') }}frontend/images/shape.png" alt="">
                    </div>
                </div>
            </div>
            @foreach ($teaminfos as $teaminfo)
                
          
            <div class="row team-slick mt-5">
                <div class="col-md-12">
                    <div class="team-member ">
                        <div class="team-img">
                            <img style="width:100%; max-width:293px; height:293px;" src="{{ asset('storage') }}/{{ $teaminfo->teammember_image }}" class="img-fluid" alt="">
                            <div class="img-overlay">
                                {{-- <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                </ul> --}}
                            </div>
                        </div>
                        <div class="team-txt text-center py-2">
                            <h2>{{ $teaminfo->teammember_name }}</h2>
                            <h3>{{ $teaminfo->teammember_designation }}</h3>
                            
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>