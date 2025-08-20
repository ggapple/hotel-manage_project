<!DOCTYPE html>
<html>

<head>
    <!-- Css  -->
    @include('admin.css')
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
                            <th scope="col">Room title</th>
                            <th class="col-5" scope="col">Description</th>
                            <th scope="col">Price</th>
                            <th scope="col">Room type</th>
                            <th scope="col">Image</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $data)
                        <tr>
                            <th>{{$data->title}}</th>
                            <td>{!! Str::limit($data->desc,100)!!}</td>
                            <td>{{$data->price}}</td>
                            <td>{{$data->type}}</td>
                            <td><img width="80px" src="room/{{$data->image}}" alt=""></td>
                            <td><a class="btn btn-danger" href="{{url('delete_room',$data->id)}}" onclick="return confirm('Do you want to delete this room')">Delete</a></td>
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