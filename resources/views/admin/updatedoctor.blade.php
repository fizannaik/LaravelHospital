
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <base href="/public">
    <style type="text/css">
        label{
            display: inline-block;
            width: 200px;
        }
    </style>
    @include('admin.css');

  </head>
  <body>
    <div class="container-scroller">
      
      <!-- partial:partials/_sidebar.html -->

      @include('admin.sidebar');

      @include('admin.navbar');
          <div class="container" style="padding: 100px;" align="center">
          <div class="container-fluid page-body-wrapper">
      @if(session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">X</button>
                    {{session()->get('message')}}
                </div>
                @endif
        <form accept="{{url('editdoctor',$data->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT');
            <div style="padding: 15px;">
                <label>Doctor's Name</label>
                <input type="text" style="color: black;" name="name" value="{{$data->name}}">
            </div>
            <div style="padding: 15px;">
                <label>Phone No</label>
                <input type="number" name="phone" style="color: black;" value="{{$data->phone}}">
            </div>
            <div style="padding: 15px;">
                <label>Specialty</label>
                <input type="text" name="specialty" style="color: black;" value="{{$data->specialty}}">
            </div>
            <div style="padding: 15px;">
                <label>Room No</label>
                <input type="text" name="room" style="color: black;" value="{{$data->room}}">
            </div>
            <div style="padding: 15px;">
                <label>Old Image</label>
                <img height="120px" width="150px" src="doctor_image/{{$data->image}}">
            </div>
            <div style="padding: 15px;">
                <label>Change Image</label>
                <input type="file" name="file">
            </div>
            <div style="padding: 15px;">
            <input type="submit" class="btn btn-primary">
            </div>
        </form>
    </div>
      </div>
        <!-- partial -->
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script');
    <!-- End custom js for this page -->
  </body>
</html>