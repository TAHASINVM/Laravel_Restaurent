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
      <form action="{{ url('/updatefoodchef',$data->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="">Name</label>
                <input style="color: blue" type="text" name="name" value="{{ $data->name }}" id="">
            </div>
            <div>
                <label for="">Speciality</label>
                <input style="color: blue" type="text" name="speciality" value="{{ $data->speciality }}" id="">
            </div>
            <div>
                <label for="">Old Image</label>
                <img height="300" width="300" src="/chefimage/{{ $data->image }}" alt="">
            </div>
            <div>
                <label for="">New Image</label>
                <input type="file" name="image">
            </div>
            <div>
                <input type="submit" value="Update Chef" required>
            </div>
      </form>
    </div>

    @include('admin.adminscript')
  </body>
</html>