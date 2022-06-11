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

            </div>
      </div>
    </div>
    

    @include('admin.adminscript')

   
   
  </body>
</html>