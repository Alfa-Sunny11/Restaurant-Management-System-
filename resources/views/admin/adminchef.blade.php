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

      <div class="container" style = "margin-top:10px">
                        <div class="row">
                              <div class="col-mid-6 offset-mid-3">
                                    <div class="card">
                                          
                                          <div class="card-header">
                                          <h1>Add Chefs</h1>
                                                <div class="card-body">
                                                            <form method="post" action="{{route('addchefs')}}" enctype="multipart/form-data"> 
                                                                  @csrf
                                                                  <div class="mb-3">
                                                                        <label for="name" class="form-label">Name</label>
                                                                        <input style="color: white" type="text" value="{{old('name')}}" class="form-control" id="name" name="name">
                                                                  
                                                                  </div>
                                                                  <div class="mb-3">
                                                                        <label for="speciality" class="form-label">Speciality</label>
                                                                        <input style="color: white" type="text" value="{{old('speciality')}}" class="form-control" id="speciality" name="speciality">
                                                                  
                                                                  </div>
                                                                  <div class="mb-3">
                                                                        <label for="img" class="form-label">Chef Image</label>
                                                                        <input type="file"
                                                                        value="{{old('img')}}" class="form-control" id="img" name="img">
                                                                  </div>
                                                                  

                                                                  <button type="submit" class="btn btn-primary">Save</button>
                                                            </form>
                                                </div>            
                                          </div>
                                    </div>
                              </div>
                        </div>

                        <div style="padding-top:50px">
                        <h1>Chefs List</h1>
                              <table class="table table-dark">
                                    <thead>
                                          <tr>
                                                <!-- <th scope="col" style="font-weight: bold">ID</th> -->
                                                <th scope="col" style="font-weight: bold; color: white">Name</th>
                                                <th scope="col" style="font-weight: bold; color: white">Speciality</th>
                                                <th scope="col" style="font-weight: bold; color: white">Image</th>
                                                <th scope="col" style="font-weight: bold; color: white">Action</th>
                                          </tr>                                          
                                    </thead>
                                    @foreach($data as $data)
                                          <tbody>
                                                                                          
                                                <tr>
                                                      <!-- <td>{{$data->id}}</td> -->
                                                      <td style="color: white">{{$data->name}}</td>
                                                      <td style="color: white">{{$data->speciality}}</td>
                                                      <td><img style="height:150px; width:150px" src="/chefimage/{{$data->image}}"></td>
                                                      <td>
                                                            <a href="{{url('/chef/update', $data->id)}}">Edit</a> <br><br> 
                                                            <a href="{{url('/chef/delete', $data->id)}}">Delete</a>
                                                      </td>
                                                      <td></td>
                                                </tr>
                                                                                          
                                          </tbody>
                                    @endforeach
                              </table>
                        </div>

            </div>
      </div>
    </div>
    

    @include('admin.adminscript')

   
   
  </body>
</html>