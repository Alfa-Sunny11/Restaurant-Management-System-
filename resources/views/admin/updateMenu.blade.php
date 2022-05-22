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
                                          <h1>Update Food</h1>
                                                <div class="card-body">
                                                            <form method="post" action="{{route('food.update',$data->id)}}" enctype="multipart/form-data">
                                                                  @csrf
                                                                  <!-- <input type="hidden" name="id" value="{{$data->id}}"> -->
                                                                  <div class="mb-3">
                                                                        <label for="title" class="form-label">Food Title</label>
                                                                        <input style="color: white" type="text" value="{{$data->title}}" class="form-control" id="title" name="title" required>
                                                                  
                                                                  </div>
                                                                  <div class="mb-3">
                                                                        <label for="price" class="form-label">Price</label>
                                                                        <input style="color: white" type="text" value="{{$data->price}}" class="form-control" id="price" name="price">
                                                                  
                                                                  </div>
                                                                  <div class="mb-3">
                                                                        <label for="img" class="form-label">New Image</label>
                                                                        <input type="file"
                                                                         class="form-control" id="img" name="img">
                                                                         <img style="height:200px; width:200px; padding:10px" src="/foodimage/{{$data->img}}">
                                                                  </div>
                                                                  
                                                                  <div class="mb-3">
                                                                        <label for="description" class="form-label">Description</label>
                                                                        <textarea style="color: white" type="text" class="form-control" id="description" name="description">{{$data->description}}</textarea>
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