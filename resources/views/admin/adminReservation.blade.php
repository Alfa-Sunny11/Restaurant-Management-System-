<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.admincss')
  </head>
  <body>

    <div class = "container-scroller">
      @include('admin.navbar')
      <div class="container style = "margin-top:10px"">
            <h1>Reservation</h1>
            <table class="table table-dark">
                  <thead>
                        <tr>
                              <!-- <th scope="col" style="font-weight: bold">ID</th> -->
                              <th scope="col" style="font-weight: bold; color: white">Name</th>
                              <th scope="col" style="font-weight: bold; color: white">Email</th>
                              <th scope="col" style="font-weight: bold; color: white">Phone No </th>
                              <th scope="col" style="font-weight: bold; color: white">Date</th>
                              <th scope="col" style="font-weight: bold; color: white">Time</th>
                              <th scope="col" style="font-weight: bold; color: white">Message</th>
                        </tr>                                          
                  </thead>
                  @foreach($data as $data)
                        <tbody>
                                                                                    
                              <tr>
                                    <!-- <td>{{$data->id}}</td> -->
                                    <td style="color: white">{{$data->name}}</td>
                                    <td style="color: white">{{$data->email}}</td>
                                    <td style="color: white">{{$data->phoneNo}}</td>
                                    <td style="color: white">{{$data->date}}</td>
                                    <td style="color: white">{{$data->time}}</td>
                                    <td style="color: white">{{$data->message}}</td>

                              </tr>
                                                                                    
                        </tbody>
                  @endforeach
            </table>
      </div>
    </div>
    

    @include('admin.adminscript')

   
   
  </body>
</html>