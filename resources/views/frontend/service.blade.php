<section class="bglight padding" id="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="heading-title darkcolor wow fadeInUp" data-wow-delay="100ms">
                        <span class="defaultcolor">Read Out Our</span>
                        <h2 class="font-normal darkcolor heading_space_half"> Latest Service </h2>
                    </div>
                    <div class="col-md-6 offset-md-3 heading_space">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A dolores omnis provident quam reiciendis voluptatum.</p>
                    </div>
                </div>
            </div>
            <div class="row">
               {{-- @foreach ($services as $service) --}}
                <div class="col-lg-4 col-md-6">
                    <div class="news_item shadow wow fadeInUp" data-wow-delay="300ms">
                        <div class="blog-img">
                            <div class="owl-carousel owl-theme owl-blog-item">
                                <div class="image item">
                                    <img style="width:100%;max-width:400px;hight:100px;" src="#" alt="image">
                                </div>   
                            </div>
                        </div>
                        <div class="news_desc">
                              <button type="button" class="btn btn-primary top10 bottom10"> Price:    ৳</button>
                            <h3 class="text-capitalize font-normal darkcolor"><a href="#">hhhh</a></h3>
                            <p class="top20 bottom20">string</p>
                            <ul class="meta-tags top20 bottom20">
                              <li>
                                  <a href="#">
                                 <!-- Button trigger modal -->
      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
         Buy for Now
        </button>
        
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Are You Sure To Buy This Product ?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <h4 class="modal-body">
               Service Name:  <br>
               Price: 
              </h4>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a href="#" type="button" class="btn btn-primary">Yes</a>
              </div>
            </div>
          </div>
        </div>
          </a>
      </li>  
      </ul>
        </div>
            </div>
            </div>
           {{-- @endforeach --}}
        </div>
        </div>
        </section>