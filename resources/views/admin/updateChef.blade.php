<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">    
    @include('admin.admincss')
  </head>
  <body>
      <div class="container-scroller">
            @include('admin.navbar')
            <div class="container" style = "margin-top:10px">
                        <div class="row">
                              <div class="col-mid-6 offset-mid-3">
                                    <div class="card">
                                          
                                          <div class="card-header">
                                          <h1>Update Chef</h1>
                                                <div class="card-body">
                                                            <form method="post" action="{{route('chef.update',$data->id)}}" enctype="multipart/form-data">
                                                                  @csrf
                                                                  <!-- <input type="hidden" name="id" value="{{$data->id}}"> -->
                                                                  <div class="mb-3">
                                                                        <label for="name" class="form-label">Chef Name</label>
                                                                        <input style="color: white" type="text" value="{{$data->name}}" class="form-control" id="name" name="name" required>
                                                                  
                                                                  </div>
                                                                  <div class="mb-3">
                                                                        <label for="speciality" class="form-label">Speciality</label>
                                                                        <input style="color: white" type="text" value="{{$data->speciality}}" class="form-control" id="speciality" name="speciality" required>
                                                                  
                                                                  </div>
                                                                  <div class="mb-3">
                                                                        <label for="img" class="form-label">New Image</label>
                                                                        <input type="file"
                                                                         class="form-control" id="img" name="img" required>
                                                                         <img style="height:200px; width:200px; padding:10px" src="/chefimage/{{$data->image}}">
                                                                  </div>

                                                                  <button type="submit" class="btn btn-primary">Update</button>
                                                            </form>
                                                </div>            
                                          </div>
                                    </div>
                              </div>
                        </div>
            </div>            
      </div>

    
    @include('admin.adminscript')

   
   
  </body>
</html>