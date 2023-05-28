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
    <!-- PRE LOADER -->
    <section class="preloader">
        <div class="spinner">

             <span class="spinner-rotate"></span>

        </div>
   </section>
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
                    <th scope="col">Title</th>
                    <th scope="col">Content</th>
                    <th scope="col">Price</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    <?php $serial = 1;?>
                    @foreach($menu as $data)
                        <tr>
                            <th scope="row">{{$serial++}}</th>
                            <td>
                                <img src="foodimage/{{$data->image}}" alt="Food_image">
                            </td>
                            <td>{{$data->title}}</td>
                            <td>{{$data->content}}</td>
                            <td>{{$data->price}}</td>
                            <td>{{$data->created_at}}</td>
                            <td>
                                <a href="{{ url('/menu_delete',$data->id)}}">
                                    <button class="btn btn-danger btn-sm">Delete</button>
                                </a>
                                <a href="{{ url('/menu_update',$data->id)}}">
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

