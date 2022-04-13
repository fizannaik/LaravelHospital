
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
                      <th style="padding: 10px;">Customer Name</th>
                      <th style="padding: 10px;">Email</th>
                      <th style="padding: 10px;">Phone Number</th>
                      <th style="padding: 10px;">Doctor Name</th>
                      <th style="padding: 10px;">Date</th>
                      <th style="padding: 10px;">Message</th>
                      <th style="padding: 10px;">Status</th>
                      <th style="padding: 10px;">Approved</th>
                      <th style="padding: 10px;">Cancel</th>
                  </tr>
                  @foreach($data as $appoint)
                  <tr>
                      <td style="background-color: lightgreen;color:crimson">{{$appoint->name}}</td>
                      <td style="background-color: lightgreen;color:crimson">{{$appoint->email}}</td>
                      <td style="background-color: lightgreen;color:crimson">{{$appoint->phone}}</td>
                      <td style="background-color: lightgreen;color:crimson">{{$appoint->doctor}}</td>
                      <td style="background-color: lightgreen;color:crimson">{{$appoint->date}}</td>
                      <td style="background-color: lightgreen;color:crimson">{{$appoint->message}}</td>
                      <td style="background-color: lightgreen;color:crimson">{{$appoint->status}}</td>
                      <td><a class="btn btn-success" href="{{url('approved',$appoint->id)}}">Approved</a></td>
                      <td><a class="btn btn-danger" href="{{url('canceled',$appoint->id)}}">Canceled</a></td>
                  </tr>
                  @endforeach
              </table>
          </div>
        <!-- partial -->
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script');
    <!-- End custom js for this page -->
  </body>
</html>