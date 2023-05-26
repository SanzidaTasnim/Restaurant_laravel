<section id="menu" data-stellar-background-ratio="0.5">
    <div class="container">
         <div class="row">

              <div class="col-md-12 col-sm-12">
                   <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                        <h2>Our Menus</h2>
                        <h4>Tea Time &amp; Dining</h4>
                   </div>
              </div>

              @foreach($menu as $item)
                <div class="col-md-4 col-sm-6">
                    <!-- MENU THUMB -->
                    <div class="menu-thumb">
                        <a href="#" class="image-popup" title="American Breakfast">
                            <img src="foodimage/{{$item->image}}" class="img-responsive" alt="Food_item" style="width: 520px; height: 345px;">

                            <div class="menu-info">
                                <div class="menu-item">
                                        <h3>{{$item->title}}</h3>
                                        <p>{{$item->content}}</p>
                                </div>
                                <div class="menu-price">
                                        <span>${{$item->price}}</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
              @endforeach
         </div>
    </div>
</section>
