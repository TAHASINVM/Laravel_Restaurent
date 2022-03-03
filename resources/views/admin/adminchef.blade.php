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
      <div>
          <form action="{{ url('/uploadchef') }}" method="POST" enctype="multipart/form-data">
            @csrf
              <div>
                  <label for="">Name</label>
                  <input type="text" name="name" required placeholder="Enter Name" style="color: blue">
              </div>
              <div>
                  <label for="">Speciality</label>
                  <input type="text" name="speciality" required placeholder="Enter the Speciality" style="color: blue">
              </div>
              <div>
                  <input type="file" name="image">
              </div>
              <div>
                <input type="submit" value="Save">
            </div>
          </form>

          <div>
                <table bgcolor="black">
                    <tr>
                        <th style="padding: 30px">Name</th>
                        <th style="padding: 30px">Speciality</th>
                        <th style="padding: 30px">Image</th>
                        <th style="padding: 30px">Action</th>
                    </tr>
                    @foreach ($data as $item)
                        <tr align="center">
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->speciality }}</td>
                            <td><img height="100px" weight="100px" src="/chefimage/{{ $item->image }}" alt=""></td>
                            <td><a href="{{ url('/updatechef',$item->id) }}">Update</a><a href="{{ url('/deletechef',$item->id) }}">Delete</a></td>
                        </tr>
                    @endforeach
                   
                </table>
          </div>
      </div>
    </div>

    @include('admin.adminscript')
  </body>
</html>