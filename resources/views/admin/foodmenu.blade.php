<x-app-layout>

</x-app-layout>


<!DOCTYPE html>
<html lang="en">
<head>

    @include("admin.admincss");

</head>
<body>

<div class="container-scroller">

    @include("admin.navbar")

    <div style="position: relative; top: 60px; right: -150px">

        <form action="{{ url('/uploadfood') }}" method="" enctype="multipart/form-data">

            @csrf

            <div>
                <label>Title</label>
                <input type="text" name="title" placeholder="" required>
            </div>

            <div>
                <label>Raw Material</label>
                <input type="text" name="raw_material" placeholder="optional">
            </div>

            <div>
                <label>Price</label>
                <input type="number" name="price" placeholder="" required>
            </div>

            <div>
                <label>Image</label>
                <input type="file" name="image" placeholder="optional">
            </div>

            <div>
                <label>Category</label>
                <input type="text" name="title" placeholder="" required>
            </div>

            <div>
                <input style="color: black" type="submit" value="Save">
            </div>

        </form>
    </div>
</div>
@include("admin.adminscript")
</body>
</html>
