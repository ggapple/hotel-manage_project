<!DOCTYPE html>
<html>

<head>
    <base href="/public">
    <!-- Css  -->
    @include('admin.css')

<body>
    <!-- Header -->
    @include('admin.header')
    <!-- Side bar -->
    @include('admin.sidebar')
    <!-- Body  -->
    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">
                <div>

                    <form action="{{url('edit_room',$data->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <!-- <div class="form-group">
                            <label for="">Room title</label>
                            <input type="text" class="form-control" id="" name="title" value="{{$data->title}}" placeholder="Enter title">
                        </div> -->

                        <div class="form-group">
                            <label for="">Room type</label>
                            <select class="form-control bg-white" id="" name="type">
                                <option value="{{$data->type}}">{{$data->type}}</option>
                                <option value="Regular">Regular</option>
                                <option value="Premium">Premium</option>
                                <option value="Deluxe">Deluxe</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Description</label>
                            <textarea class="form-control bg-white" id="" rows="3" name="desc" placeholder="Enter description">{{$data->desc}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Price</label>
                            <input type="text" class="form-control" id="" name="price" value="{{$data->price}}" placeholder="Enter price">
                        </div>
                        <div class="form-group">
                            <label for="">Current image</label>
                            <img width="80px" src="room/{{$data->image}}" alt="">
                        </div>
                        <div class="form-group">
                            <label for="">Upload image</label>
                            <input type="file" class="form-control-file" id="" name="image">
                        </div>
                        <button type="submit" class="btn btn-primary" value="Update room">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer  -->
    @include('admin.footer')
</body>

</html>