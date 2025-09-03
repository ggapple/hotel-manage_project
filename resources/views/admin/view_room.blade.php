<!DOCTYPE html>
<html>

<head>
    <!-- Css  -->
    @include('admin.css')
    <style>
        table,
        th,
        td {
            border: 5px solid #ddd;
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <!-- Header -->
    @include('admin.header')
    <!-- Side bar -->
    @include('admin.sidebar')
    <!-- Body  -->
    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">
                <table class="table">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">Room type</th>
                            <th class="col-4" scope="col">Description</th>
                            <th scope="col">Price</th>
                            <th scope="col">Number of rooms</th>
                            <th scope="col">Number of rented</th>
                            <th scope="col">Image</th>
                            <th scope="col" colspan="2" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $data)
                        <tr>
                            <th>{{$data->type}}</th>
                            <td>{!! Str::limit($data->desc,100)!!}</td>
                            <td>{{$data->price}}</td>
                            <td>{{$data->num_of_room}}</td>
                            <td>{{$data->num_of_rented}}</td>
                            <td><img width="100px" src="room/{{$data->image}}" alt=""></td>
                            <td><a class="btn btn-danger" href="{{url('delete_room',$data->id)}}" onclick="return confirm('Do you want to delete this room')">Delete</a>
                            </td>
                            <td><a class="btn btn-warning" href="{{url('update_room',$data->id)}}">Update</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Footer  -->
    @include('admin.footer')
</body>

</html>