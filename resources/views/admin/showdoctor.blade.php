<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    @include('admin.css');

</head>

<body>
    <div class="container-scroller">

        <!-- partial:partials/_sidebar.html -->

        @include('admin.sidebar');

        @include('admin.navbar');
        <div class="container-fluid page-body-wrapper">
            <div align="center" style="padding-top:100px;">
                <table>
                    <tr style="background-color: black;">
                        <th style="padding: 10px;">Doctor</th>
                        <th style="padding: 10px;">Phone</th>
                        <th style="padding: 10px;">Specialty</th>
                        <th style="padding: 10px;">Room No</th>
                        <th style="padding: 10px;">Image</th>
                        <th style="padding: 10px;">Delete</th>
                        <th style="padding: 10px;">Update</th>
                    </tr>
                    @foreach($data as $doctor)
                    <tr align="center" style="background-color:aquamarine;color:blueviolet">
                        <td>{{$doctor->name}}</td>
                        <td>{{$doctor->phone}}</td>
                        <td>{{$doctor->specialty}}</td>
                        <td>{{$doctor->room}}</td>
                        <td><img height="100px" width="100px" src="doctor_image/{{$doctor->image}}"></td>
                        <td><a class="btn btn-secondary" onclick="return confirm('are you sure?')" href="{{url('deletedoctor',$doctor->id)}}">Delete</a></td>
                        <td><a class="btn btn-primary" href="{{url('updatedoctor',$doctor->id)}}">Update</a></td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
        <!-- partial -->
        <!-- container-scroller -->
        <!-- plugins:js -->
        @include('admin.script');
        <!-- End custom js for this page -->
</body>

</html>