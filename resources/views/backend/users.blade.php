<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Eatery Cafe and Restaurant </title>
  <!-- plugins:css -->
  @include('backend.css')
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    @include('backend.header')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        @include('backend.sidebar')
        <!-- page-body-wrapper ends -->
        <div style="width: 100%;">
            <table class="table table-striped text-center">
                <thead>
                  <tr>
                    <th scope="col">Serial No.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    <?php $serial = 0;?>
                    @foreach($users as $user)
                      <tr>
                        <th scope="row">{{$serial++}}</th>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        @if($user->usertype == '0')
                            <td>
                                <a href="{{ url('/deleteUsers',$user->id)}}">
                                    <button class="btn btn-danger btn-sm">Delete</button>
                                </a>
                            </td>
                        @else
                            <td>
                                <a href="">
                                    <button class="btn btn-success btn-sm">Not Allowed</button>
                                </a>
                            </td>
                        @endif
                      </tr>
                    @endforeach
                </tbody>
            </table>
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

