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

        <div style="width: 80%; margin: 30px auto; ">
            <form action="{{url('/uploadChefs')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="title" style="font-weight:bold; font-size: 16px;">Chef's Name</label>
                  <input type="text" style="padding: 20px 10px;" class="form-control" id="title" name="name" placeholder="Enter Name">
                </div>
                <div class="form-group">
                  <label for="price" style="font-weight:bold; font-size: 16px;">Specialist </label>
                  <input type="text" style="padding: 20px 10px;" class="form-control" id="price" name="specialist" placeholder="Enter specialist">
                </div>
                <div class="form-group">
                    <label for="image" style="font-weight:bold; font-size: 16px;">Chef Image</label>
                    <div>
                        <input type="file" class="form-control-file" id="image" name="image">
                    </div>
                  </div>

                <button type="submit" class="btn btn-success">Add Chef</button>
            </form>
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

