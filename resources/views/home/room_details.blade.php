<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
    @include('home.css')
</head>
<!-- body -->

<body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="#" /></div>
    </div>
    <!-- end loader -->
    <!-- header -->
    <header>
        @include('home.header')
    </header>
    <!-- end header inner -->
    <!-- end header -->

    <div class="our_room">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Our Room</h2>
                        <p>Lorem Ipsum available, but the majority have suffered </p>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-md-6 col-sm-6">
                    <div id="serv_hover" class="room">
                        <div class="room_img">
                            <figure><img style="height: 300px; width:500px" src="/room/{{$room->image}}" alt="#" /></figure>
                        </div>
                        <div class="bed_room">
                            <h3>{{$room->title}}</h3>
                            <p>{{$room->desc}}</p>
                            <h4>Room type: {{$room->type}}</h4>
                            <h3>Price: {{$room->price}}</h3>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <h1 class="text-center" style="font-size: 40px !important;">BOOK ROOM</h1>
                    <div>
                        @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{session()->get('message')}}
                        </div>
                        @endif
                    </div>

                    <form action="{{url('add_booking',$room->id)}}" method="post">
                        @csrf

                        @if ($errors)
                        @foreach($errors->all() as $errors)
                        <li style="color: red;">
                            {{$errors}}
                        </li>
                        @endforeach
                        @endif

                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="" name="name" @if(Auth::id()) value="{{Auth::user()->name}}" @endif placeholder="John Doe">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="" name="email"
                                    @if(Auth::id()) value="{{Auth::user()->email}}" @endif placeholder="johndoe@gmail.com">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">Phone</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="" name="phone"
                                    @if(Auth::id()) value="{{Auth::user()->phone}}" @endif placeholder="0333444555">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">Start date</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="startDate" name="startDate">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">End date</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="endDate" name="endDate">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-primary btn-block">Book room</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>





        <!--  footer -->
        @include('home.footer')

        <!-- end footer -->
        <script>
            $(function() {
                var dtToday = new Date();

                var month = dtToday.getMonth() + 1;

                var day = dtToday.getDate();

                var year = dtToday.getFullYear();

                if (month < 10)
                    month = '0' + month.toString();

                if (day < 10)
                    day = '0' + day.toString();

                var maxDate = year + '-' + month + '-' + day;
                $('#startDate').attr('min', maxDate);
                $('#endDate').attr('min', maxDate);

            });
        </script>
</body>

</html>