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
                            <th scope="col">Room id</th>
                            <th scope="col">Customer name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Start date</th>
                            <th scope="col">End date</th>
                            <th scope="col">Status</th>
                            <th scope="col">Room title</th>
                            <th scope="col">Price</th>
                            <th scope="col">Image</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $data)
                        <tr>
                            <td>{{$data->room_id}}</td>
                            <td>{{$data->name}}</td>
                            <td>{{$data->email}}</td>
                            <td>{{$data->phone}}</td>
                            <td>{{$data->start_date}}</td>
                            <td>{{$data->end_date}}</td>
                            <td>{{$data->status}}</td>
                            <td>{{$data->room->title}}</td>
                            <td>{{$data->room->price}}</td>
                            <td><img width="100px" src="room/{{$data->room->image}}" alt=""></td>
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