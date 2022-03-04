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

      <div class="container">
        <h1>Customer Orders</h1>
        <form action="{{ url('/search') }}" method="get">
            @csrf
            <input type="text" name="search" style="color:blue">
            <input type="submit" value="Search" class="btn btn-success">
        </form>
        <table style="position: relative;top:60px;right:-150px" class="">
            <tr align="center" style="background: red">
                <th style="padding:30px">Name</th>
                <th style="padding:30px">Phone</th>
                <th style="padding:30px">Address</th>
                <th style="padding:30px">Foodname</th>
                <th style="padding:30px">price</th>
                <th style="padding:30px">Quantity</th>
                <th style="padding:30px">Total Price</th>
            </tr>
  
            @foreach ($data as $item)
              <tr align="center" style="background: black">
                  <td>{{ $item->name }}</td>
                  <td>{{ $item->phone }}</td>
                  <td>{{ $item->address }}</td>
                  <td>{{ $item->foodname }}</td>
                  <td>{{ $item->price }}</td>
                  <td>{{ $item->quantity }}</td>
                  <td>{{ $item->price * $item->quantity }}</td>
              </tr>
            @endforeach
           
        </table>
      </div>

    </div>

    @include('admin.adminscript')
  </body>
</html>