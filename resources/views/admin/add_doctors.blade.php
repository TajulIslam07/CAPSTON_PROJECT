

<!DOCTYPE html>
<html lang="en">
<head>
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
            <form action="{{url('upload_doctor')}}" method="post" >
                @csrf
                <div style="padding:20px;">
                    <label>Doctor Name:</label>
                    <input type="text" placeholder="Doctor" name="name">
                </div>
                <div style="padding:20px;">
                    <label>Phone:</label>
                    <input type="number" placeholder="Number" name="number">
                </div>
                <div style="padding:20px;">
                    <label>Speciality:</label>
                    <select name="speciality" style="color: black;">
                        <option>--select--</option>
                        <option>Skin</option>
                        <option>Medicine</option>
                        <option>surgery</option>
                    </select>

                </div>

                <div style="padding:20px;">
                    <label>Room no:</label>
                    <input type="text" placeholder="Room no" name="room">
                </div>


                <div style="padding:20px"><input class="btn btn-success" type="submit"></div>


            </form>

        </div>

    </div>
</div>
    @include('admin.scripts')
</body>
</html>
