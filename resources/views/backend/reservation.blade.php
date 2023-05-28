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
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Time</th>
                    <th scope="col">Date</th>
                    <th scope="col">Guest</th>
                    <th scope="col">Message</th>
                  </tr>
                </thead>
                <tbody>
                    <?php $serial = 0;?>
                    @foreach($data as $item)
                      <tr>
                        <th scope="row">{{++$serial}}</th>
                        <td>{{$item->name}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->time}}</td>
                        <td>{{$item->date}}</td>
                        <td>{{$item->guest}}</td>
                        <td>{{$item->message}}</td>
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

