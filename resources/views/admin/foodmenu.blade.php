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
                        <div class="row">
                              <div class="col-mid-6 offset-mid-3">
                                    <div class="card">
                                          <div class="card-header">
                                                <div class="card-body">
                                                            <form method="post" action="{{route('food.create')}}" enctype="multipart/form-data">
                                                                  @csrf
                                                                  <div class="mb-3">
                                                                        <label for="title" class="form-label">Food Title</label>
                                                                        <input style="color: white" type="text" value="{{old('title')}}" class="form-control" id="title" name="title">
                                                                  
                                                                  </div>
                                                                  <div class="mb-3">
                                                                        <label for="price" class="form-label">Price</label>
                                                                        <input style="color: white" type="text" value="{{old('price')}}" class="form-control" id="price" name="price">
                                                                  
                                                                  </div>
                                                                  <div class="mb-3">
                                                                        <label for="img" class="form-label">Food Image</label>
                                                                        <input type="file"
                                                                        value="{{old('img')}}" class="form-control" id="img" name="img">
                                                                  </div>
                                                                  
                                                                  <div class="mb-3">
                                                                        <label for="description" class="form-label">Description</label>
                                                                        <textarea style="color: white" type="text" value="{{old('description')}}" class="form-control" id="description" name="description"></textarea>
                                                                  </div>

                                                                  <button type="submit" class="btn btn-primary">Send</button>
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