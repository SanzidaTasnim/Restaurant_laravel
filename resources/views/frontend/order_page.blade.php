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

     <div style="width: 80%; margin:0 auto; margin-top: 160px;">
        <form action="{{url('/confirm_order',$user_id)}}" method="post">
            @csrf
            <div class="form-group">
              <label for="title" style="font-weight:bold; font-size: 16px;">Name</label>
              <input type="text" style="padding: 20px 10px;" class="form-control" id="title" name="name" placeholder="Enter Name">
            </div>
            <div class="form-group">
              <label for="phone" style="font-weight:bold; font-size: 16px;">Phone No. </label>
              <input type="tel" style="padding: 20px 10px;" class="form-control" id="phone" name="phone" placeholder="Enter Mobile Number">
            </div>
            <div class="form-group">
                <label for="email" style="font-weight:bold; font-size: 16px;">Email </label>
                <input type="email" style="padding: 20px 10px;" class="form-control" id="email" name="email" value="{{Auth::user()->email}}">
            </div>
            <div class="form-group">
                <label for="address" style="font-weight:bold; font-size: 16px;">Address </label>
                <input type="text" style="padding: 20px 10px;" class="form-control" id="address" name="address" placeholder="Enter Address">
            </div>

            <button type="submit" class="btn btn-success">Confirm Order</button>
        </form>
     </div>

     <!-- FOOTER -->
     @include('frontend.footer')
     <!-- SCRIPTS -->
     @include('frontend.script')
</body>
</html>
