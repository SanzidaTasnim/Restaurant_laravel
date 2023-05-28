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
              <form action="{{url('/addCart',$item->id)}}" method="post">
                @csrf
                <div class="col-md-4 col-sm-6">
                    <!-- MENU THUMB -->
                    <div class="menu-thumb">
                        <a title="{{ $item->title }}">
                            <img src="foodimage/{{$item->image}}" class="img-responsive" alt="Food_item" style="width: 520px; height: 345px;">

                            <div class="menu-info">
                                <div class="menu-item">
                                    <h3>{{$item->title}}</h3>
                                    <p>{{$item->content}}</p>

                                    <div class="cart" style="display: flex; width: 100px; justify-content: space-between;">
                                        <div class=”btn” style="width: 20px;height: 20px;border-radius: 50%; background-color: #d9d9d9; text-align: center; font-weight: bold;color: #333" onclick="increaseQuantity({{$item->id}})">+</div>
                                        <div class=”count”>
                                            <input type="number" min='1' value="1" style="width: 30px; border: 0; text-align: center; color: #333;" name="quantity" id="{{$item->id}}">
                                        </div>
                                        <div class=”btn” style="width: 20px;height: 20px;border-radius: 50%; background-color: #d9d9d9; text-align: center; font-weight: bold; color: #333" onclick="decreaseQuantity({{$item->id}})">-</div>
                                    </div>
                                </div>
                                <div class="menu-price">
                                        <span>${{$item->price}}</span>
                                        <button class="btn btn-success btn-sm" type="submit" style="margin-top: 20px;">Add To Cart</button>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
              </form>
              @endforeach
         </div>
    </div>
</section>

<script>
    function increaseQuantity(id) {
        var input = document.getElementById(id);
        var currentValue = parseInt(input.value);
        input.value = currentValue + 1;
    }
    function decreaseQuantity(id) {
        var input = document.getElementById(id);
        var currentValue = parseInt(input.value);
        if(input.value == 1){
            input.value = 1;
        }else{
            input.value = currentValue - 1;
        }
    }
</script>


