

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
    <title>Admin Panel</title>
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
                    <input style="color: #0a0a0a;" type="text" placeholder="Doctor" name="name" required>
                </div>

                <div style="padding:20px;">
                    <label>Email:</label>
                    <input style="color: #0a0a0a;" type="email" placeholder="Email" name="email" required>
                </div>
                <div style="padding:20px;">
                    <label>password:</label>
                    <input style="color: #0a0a0a;" type="password" placeholder="Password" name="password" required>
                </div>
                <div style="padding:20px;">
                    <label>Phone Number:</label>
                    <input style="color: #0a0a0a;" type="number" placeholder="number" name="number" required>
                </div>
                <div style="padding:20px;">
                    <label>Speciality:</label>
                    <select name="speciality" style="color: black;" required>
                        <option>--select--</option>
                        <option>Skin</option>
                        <option>Medicine</option>
                        <option>surgery</option>
                    </select>

                </div>

                <div style="padding:20px;">
                    <label>Room no:</label>
                    <input style="color: #0a0a0a;" type="text" placeholder="Room no" name="room">
                </div>


                <div style="padding:20px"><input class="btn btn-success" type="submit"></div>


            </form>

        </div>

    </div>
</div>
    @include('admin.scripts')
</body>
</html>
