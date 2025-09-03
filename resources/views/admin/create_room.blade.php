<!DOCTYPE html>
<html>

<head>
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

                    <form action="{{url('add_room')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <!-- <div class="form-group">
                            <label for="">Room title</label>
                            <input type="text" class="form-control" id="" name="title" placeholder="Enter title">
                        </div> -->
                        <div class="form-group">
                            <label for="">Room type</label>
                            <select class="form-control bg-white" id="" name="type">
                                <option value="Regular">Regular</option>
                                <option value="Premium">Premium</option>
                                <option value="Deluxe">Deluxe</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Description</label>
                            <textarea class="form-control bg-white" id="" rows="3" name="desc" placeholder="Enter description"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Price</label>
                            <input type="text" class="form-control" id="" name="price" placeholder="Enter price">
                        </div>
                        <div class="form-group">
                            <label for="">Upload image</label>
                            <input type="file" class="form-control-file" id="" name="image">
                        </div>
                        <button type="submit" class="btn btn-primary" value="Add room">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer  -->
    @include('admin.footer')
</body>

</html>