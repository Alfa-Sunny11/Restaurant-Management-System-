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
                                          <h1>Add Food</h1>
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

                                                                  <button type="submit" class="btn btn-primary">Save</button>
                                                            </form>
                                                </div>            
                                          </div>
                                    </div>
                              </div>
                        </div>
            
                  <div style="padding-top:50px">
                  <h1>Food List</h1>
                        <table class="table table-dark">
                              <thead>
                                    <tr>
                                          <!-- <th scope="col" style="font-weight: bold">ID</th> -->
                                          <th scope="col" style="font-weight: bold; color: white">Food</th>
                                          <th scope="col" style="font-weight: bold; color: white">Price</th>
                                          <th scope="col" style="font-weight: bold; color: white">Description</th>
                                          <th scope="col" style="font-weight: bold; color: white">Image</th>
                                          <th scope="col" style="font-weight: bold; color: white">Action</th>
                                    </tr>                                          
                              </thead>
                              @foreach($data as $data)
                                    <tbody>
                                                                                    
                                          <tr>
                                                <!-- <td>{{$data->id}}</td> -->
                                                <td style="color: white">{{$data->title}}</td>
                                                <td style="color: white">{{$data->price}}</td>
                                                <td style="color: white">{{$data->description}}</td>
                                                <td><img style="height:150px; width:150px" src="/foodimage/{{$data->img}}"></td>
                                                <td>
                                                      <a href="{{url('/food/update', $data->id)}}">Edit</a> <br><br> 
                                                      <a href="{{url('/food/delete', $data->id)}}">Delete</a>
                                                </td>
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