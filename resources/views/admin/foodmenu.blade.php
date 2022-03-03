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

            <div>
                <table bgcolor="black">
                    <tr>
                        <th style="padding: 30px">Food Name</th>
                        <th style="padding: 30px">Price</th>
                        <th style="padding: 30px">Description</th>
                        <th style="padding: 30px">Image</th>
                        <th style="padding: 30px">Action</th>
                    </tr>
                  
                    @foreach ($data as $item)
                        <tr align="center">
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->price }}</td>
                            <td>{{ $item->description }}</td>
                            <td><img height="200px" width="200px" src="/foodimage/{{ $item->image }}" alt=""></td>
                            <td><a href="{{ url('/deletemenu',$item->id) }}">Delete</a><a href="{{ url('/updatemenu',$item->id) }}">Update</a></td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>

    @include('admin.adminscript')
  </body>
</html>