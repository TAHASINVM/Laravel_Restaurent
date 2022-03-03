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
      @include("admin.navbar")
      <div style="position:relative;top:60px;right:-60px">
        <form action="{{ url('/update',$data->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="">Title</label>
                <input style="color: blue" type="text" name="title" id="" required value="{{ $data->title }}">
            </div>
            <div>
                <label for="">Price</label>
                <input style="color: blue" type="number" name="price" id="" required value="{{ $data->price }}">
            </div>
            <div>
                <label for="">Description</label>
                <input style="color: blue" type="text" name="description" id="" required value="{{ $data->description }}">
            </div>
            <div>
                <label for="">old Image</label>
                <img height="200px" width="200px" src="/foodimage/{{ $data->image }}" alt="">
            </div>
            <div>
                <label for="">new Image</label>
                <input  type="file" name="image" id="" required>
            </div>
            <div>
                <input type="submit" value="save" >
            </div>
        </form>

    </div>
    </div>

    @include('admin.adminscript')
  </body>
</html>