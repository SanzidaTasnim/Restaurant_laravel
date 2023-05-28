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
        <div style="width: 100%;">
            <table class="table table-striped text-center">
                <thead>
                    <tr>
                    <th scope="col">Serial No.</th>
                    <th scope="col">Image</th>
                    <th scope="col">Name</th>
                    <th scope="col">Specialist</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $serial = 1;?>
                    @foreach($chefs as $chef)
                        <tr>
                            <th scope="row">{{$serial++}}</th>
                            <td>
                                <img src="chefImage/{{$chef->image}}" style="width: 60px; height: 60px;border-radius: 50%;" alt="chef_image">
                            </td>
                            <td>{{$chef->name}}</td>
                            <td>{{$chef->specialist}}</td>
                            <td>{{$chef->created_at}}</td>
                            <td>
                                <a href="{{ url('/chef_delete',$chef->id)}}">
                                    <button class="btn btn-danger btn-sm">Delete</button>
                                </a>
                                <a href="{{ url('/chef_update',$chef->id)}}">
                                    <button class="btn btn-success btn-sm">Update</button>
                                </a>
                            </td>
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

