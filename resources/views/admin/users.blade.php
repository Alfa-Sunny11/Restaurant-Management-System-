<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.admincss')
  </head>
  <body>
      <div class="container-scroller">
            @include('admin.navbar')
            <div class="container" style ="padding-top: 50px">
                  <h1>User Panel</h1>
                  <table class="table table-dark">
                        <thead>
                              <tr>
                                    <!-- <th scope="col" style="font-weight: bold">ID</th> -->
                                    <th scope="col" style="font-weight: bold">Name</th>
                                    <th scope="col" style="font-weight: bold">Email</th>
                                    <th scope="col" style="font-weight: bold">Action</th>
                              </tr>
                        </thead>
                        @foreach($data as $data)
                              <tbody>
                              
                                    <tr>
                                          <!-- <td>{{$data->id}}</td> -->
                                          <td>{{$data->name}}</td>
                                          <td>{{$data->email}}</td>
                                          @if($data->usertype=='0')
                                                <td><a href="{{url('/delete', $data->id)}}">Delete</a></td>
                                          @else
                                                <td>Not Allowed</td>
                                          @endif
                                    </tr>
                              
                              </tbody>
                        @endforeach
                  </table>
            </div>
      </div>      

    

      @include('admin.adminscript')

   
   
  </body>
</html>