<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <style type="text/css">
        label {
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
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">

            <div class="container" align="center" style="padding-top: 100px;">
                @if(session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">X</button>
                    {{session()->get('message')}}
                </div>
                @endif
                <form action="{{url('upload_doctor')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div style="padding: 15px;">
                        <label>
                            Doctor Name
                        </label>
                        <input type="name" name="name" style="color: black" placeholder="Dr.Name" required="">
                    </div>

                    <div style="padding: 15px;">
                        <label>
                            Phone Number
                        </label>
                        <input type="number" name="number" style="color: black" placeholder="Phone Number" width="200px" required="">
                    </div>

                    <div style="padding: 15px;">
                        <label>
                            Specialization
                        </label>
                        <select name="specialty" style="color: black ; width: 23%;" required="">
                            <option>--Select--</option>
                            <option value="skin">Skin</option>
                            <option value="heart">Heart</option>
                            <option value="eye">Eye</option>
                            <option value="nose">Nose</option>
                        </select>
                    </div>

                    <div style="padding: 15px;">
                        <label>
                            Room No
                        </label>
                        <input type="text" name="room" style="color: black" placeholder="Room Number" required="">
                    </div>

                    <div style="padding: 15px;">
                        <label>
                            Doctor Image
                        </label>
                        <input type="file" name="file" required="">
                    </div>

                    <div style="padding: 15px;">
                        <input type="submit" name="submit" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>
        <!-- container-scroller -->
        <!-- plugins:js -->
        @include('admin.script');
        <!-- End custom js for this page -->
</body>

</html>