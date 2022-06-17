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
            <div class="container" style = "margin-top:10px">           
                  <div style="padding-top:50px">
                  <h1>Order List</h1>
                  <div style="padding:10px; display: inline;">
                        <form action="{{url('/search')}}" method="get">
                              @csrf
                              <input type="text" name="search" style="color:blue;">
                              <input type="submit" value="Search" class = "btn btn-success">
                        </form>
                  </div>
                        <table class="table table-dark">
                              <thead>
                                    <tr>
                                          <!-- <th scope="col" style="font-weight: bold">ID</th> -->
                                          <th scope="col" style="font-weight: bold; color: white">Name</th>
                                          <th scope="col" style="font-weight: bold; color: white">Food Name</th>
                                          <th scope="col" style="font-weight: bold; color: white">Address</th>
                                          <th scope="col" style="font-weight: bold; color: white">Quantity</th>
                                          <th scope="col" style="font-weight: bold; color: white">Price</th>
                                          <th scope="col" style="font-weight: bold; color: white">Totall Price</th>
                                    </tr>                                          
                              </thead>
                              @foreach($data as $data)
                                    <tbody>
                                                                                    
                                          <tr>
                                                <td style="color: white">{{$data->name}}</td>
                                                <td style="color: white">{{$data->foodname}}</td>
                                                <td style="color: white">{{$data->address}}</td>
                                                <td style="color: white">{{$data->quantity}}</td>
                                                <td style="color: white">{{$data->price}} BDT</td>
                                                <td style="color: white">{{$data->price * $data->quantity}} BDT</td>
                                                <!-- <td>
                                                      <a href="{{url('/food/update', $data->id)}}">Edit</a> <br><br> 
                                                      <a href="{{url('/food/delete', $data->id)}}">Delete</a>
                                                </td> -->
                                                <td></td>
                                          </tr>
                                                                                    
                                    </tbody>
                              @endforeach
                        </table>
                  </div>
            </div>
      </div>
      <div class="container" style = "margin-top:50px"></div>

    
    @include('admin.adminscript')

   
   
  </body>
</html>