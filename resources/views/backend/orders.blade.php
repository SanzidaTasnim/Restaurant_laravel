<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Eatery Cafe and Restaurant </title>
  <!-- plugins:css -->
  @include('backend.css')
  <style>
    .form{
        position: relative;
    }
    .form .fa-search{
        position: absolute;
        top:20px;
        left: 20px;
        color: #9ca3af;
    }
    .form span{
        position: absolute;
        right: 17px;
        top: 13px;
        padding: 2px;
        border-left: 1px solid #d1d5db;
    }
    .left-pan{
        padding-left: 7px;
    }
    .left-pan i{
        padding-left: 10px;
    }
    .form-input{
        height: 48px;
        text-indent: 33px;
        border-radius: 10px;
    }
    .form-input:focus{
        box-shadow: none;
        border:none;
    }
  </style>
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    @include('backend.header')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        @include('backend.sidebar')

        <div style="width: 100%;">
            <div class="container" style="margin-top: 30px; margin-bottom: 20px;">
                <div class="row height d-flex justify-content-center align-items-center">
                  <div class="col-md-6">
                    <form action="{{url('/search_order')}}" method="post" class="form ">
                      @csrf
                      <div>
                        <i class="fa fa-search"></i>
                        <input type="text" class="form-control form-input" placeholder="Search for Order" name="search">
                        <span class="left-pan"><i class="fa fa-microphone"></i></span>
                      </div>
                      <button type="submit" class="btn btn-success" style="position: absolute;right: -104px; top: 2px;">Search</button>
                    </form>
                  </div>
                </div>
            </div>
            @if(count($orders) > 0)
                <table class="table table-striped text-center">
                    <thead>
                        <tr>
                            <th scope="col">Serial No.</th>
                            <th scope="col">Name</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Email</th>
                            <th scope="col">Address</th>
                            <th scope="col">Food Item</th>
                            <th scope="col">Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $serial = 1;?>
                        @foreach($orders as $order)
                            <tr>
                                <th scope="row">{{$serial++}}</th>
                                <td>{{$order->name}}</td>
                                <td>{{$order->phone}}</td>
                                <td>{{$order->email}}</td>
                                <td>{{$order->address}}</td>
                                <td>{{$order->foodName}}</td>
                                <td>${{$order->price}}</td>
                                <td>{{$order->quantity}}</td>
                                <td>${{$order->price * $order->quantity}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                
            @endif
        </div>
    </div>
  </div>
  <!-- container-scroller -->
    @include('backend.footer')
  <!-- plugins:js -->
  @include('backend.js')
  <!-- End custom js for this page-->
</body>
</html>

