<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.admincss')
  </head>
  <body>
  
    <div class="container-scroller">
        @include("admin.navbar")

        <div style="position:relative;top:60px;right:-60px">
            <form action="{{ url('/uploadfood') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div>
                    <label for="">Title</label>
                    <input style="color: blue" type="text" name="title" id="" required placeholder="Write a title">
                </div>
                <div>
                    <label for="">Price</label>
                    <input style="color: blue" type="number" name="price" id="" required placeholder="Price">
                </div>
                <div>
                    <label for="">Image</label>
                    <input type="file" name="image" id="" required>
                </div>
                <div>
                    <label for="">Description</label>
                    <input style="color: blue" type="text" name="description" id="" required placeholder="Description">
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