


<!DOCTYPE html>
<html lang="en">
<head>
    <base href="/public">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @include('admin.css')
    <style type="text/css">
        label{
            display: inline-block;
            width: 200px;
        }
    </style>
</head>
<body>
<div class="container-scroller">
    @include('admin.sidebar')

    @include('admin.navbar')
    <div class="container-fluid page-body-wrapper" style="align-self: flex-start">
        <div class="container" style="align-self: center">
            @if(session()->has('message'))
                <script>
                    Swal.fire({
                        text:"{{session()->get('message')}}",
                    })
                </script>

            @endif


                <form action="{{url('editdoctor',$data->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div style="padding:20px">
                        <label>Doctor Name:</label>
                        <input style="color: black"   name="name" value="{{$data->Doctor}}">
                    </div>
                    <div style="padding:20px">
                        <label>Phone:</label>
                        <input style="color: black"   name="number" value="{{$data->Phone}}">
                    </div>
                    <div style="padding:20px">
                        <label>Speciality:</label>
                        <input style="color: black" name="speciality" value="{{$data->Speciality}}">

                    </div>

                    <div style="padding:20px">
                        <label>Room no:</label>
                        <input style="color: black" name="room" value="{{$data->Room}}">
                    </div>




                    <div style="padding:20px"><input class="btn btn-success" type="submit"></div>


                </form>

            </div>

        </div>

    </div>

@include('admin.scripts')
</body>
</html>
