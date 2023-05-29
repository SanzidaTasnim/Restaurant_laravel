<!DOCTYPE html>
<html lang="en">
<head>
     <base href="/public">
     <title>Eatery Cafe and Restaurant</title>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
     @include('frontend.css')
     @include('frontend.cart_style')
     <style>
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
        }
        .cart {
        position: relative;
        display: block;
        width: 28px;
        height: 28px;
        height: auto;
        overflow: hidden;
        .material-icons {
            position: relative;
            top: 4px;
            z-index: 1;
            font-size: 24px;
            color: white;
        }
        .count {
            position: absolute;
            top: 0;
            right: 10px;
            z-index: 2;
            font-size: 12px;
            border-radius: 50%;
            background: #d60b28;
            width: 16px;
            height: 16px;
            line-height:16px;
            display: block;
            text-align: center;
            color: white;
            font-family: 'Roboto', sans-serif;
            font-weight: bold;
        }
        }
     </style>
</head>
<body>

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>

          </div>
     </section>

     <!-- NAVBAR -->
     @include('frontend.header2')

     <div class="shopping-cart">
        <!-- Title -->
        <div class="title">
          Shopping Bag
        </div>

        <!-- Product #1 -->
        @foreach ($data as $item)
            <div class="item">
                <div class="buttons">
                <span class="delete-btn">
                    <i class="fa-sharp fa-solid fa-xmark"></i>
                </span>
                <span class="like-btn">
                    <i class="fa-solid fa-heart"></i>
                </span>
                </div>

                <div class="image">
                <img src="/foodimage/{{$item->image}}" alt="food" style="width: 135px" />
                </div>

                <div class="description" style="width: 134px;">
                <span>{{$item->title}}</span>
                <span>Delicious Meal</span>
                </div>

                <div class="quantity">
                <button class="plus-btn" type="button" name="button">
                    <i class="fa-solid fa-plus"></i>
                </button>
                <input type="text" name="name" value="1">
                <button class="minus-btn" type="button" name="button">
                    <i class="fa-solid fa-minus"></i>
                </button>
                </div>

                <div class="total-price">${{$item->price}}</div>
            </div>
        @endforeach

    </div>
     <!-- FOOTER -->
     @include('frontend.footer')
     <!-- SCRIPTS -->
     @include('frontend.script')
     <script>
        $('.like-btn').on('click', function() {
            $(this).toggleClass('is-active');
        });

        $('.minus-btn').on('click', function(e) {
            e.preventDefault();
            var $this = $(this);
            var $input = $this.closest('div').find('input');
            var value = parseInt($input.val());

            if (value &amp;amp;gt; 1) {
                value = value - 1;
            } else {
                value = 0;
            }

        $input.val(value);

        });

        $('.plus-btn').on('click', function(e) {
            e.preventDefault();
            var $this = $(this);
            var $input = $this.closest('div').find('input');
            var value = parseInt($input.val());

            if (value &amp;amp;lt; 100) {
                value = value + 1;
            } else {
                value =100;
            }

            $input.val(value);
        });
     </script>
</body>
</html>
