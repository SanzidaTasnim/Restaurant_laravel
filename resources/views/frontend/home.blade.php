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
