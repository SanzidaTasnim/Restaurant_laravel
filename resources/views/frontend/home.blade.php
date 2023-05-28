<!DOCTYPE html>
<html lang="en">
<head>
     <title>Eatery Cafe and Restaurant</title>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
     @include('frontend.css')
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
            top: 5px;
            right: 0;
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
     @include('frontend.header')
     <!-- BANNER -->
     @include('frontend.banner')
     <!-- ABOUT -->
     @include('frontend.about')
     <!-- TEAM -->
     @include('frontend.team')
     <!-- MENU-->
     @include('frontend.menu')
     <!-- TESTIMONIAL -->
     @include('frontend.testimonial')
     <!-- CONTACT -->
     @include('frontend.contact')
     <!-- FOOTER -->
     @include('frontend.footer')
     <!-- SCRIPTS -->
     @include('frontend.script')
</body>
</html>
