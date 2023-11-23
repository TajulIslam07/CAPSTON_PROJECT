<!DOCTYPE html>
<html lang="en">
<head>


    @include('admin.css')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style type="text/css">
        label{
            display: inline-block;
            width: 200px;
        }
    </style>
    <title>Admin Panel</title>
</head>
<body>
@if(session()->has('message'))
    <script>
        Swal.fire({
            text:"{{session()->get('message')}}",
        })
    </script>
<div class="container-scroller">
    @include('admin.sidebar')
    @include('admin.navbar')
@include('admin.body')
    @include('admin.scripts')

</body>
</html>

