<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('user.css')
</head>
<body>
<div class="back-to-top"></div>

<header>
    @include('user.navbar')
</header>
<div class="h-100 d-flex align-items-center justify-content-center">

 <a href="{{'make_appointment'}}"> <label style="padding: 10px;font-size: larger;background-color: greenyellow;display: flex">MAKE AN APPOINTMENT</label></a>

</div >
@include('user.doctor')

@include('user.scripts')
</body>
</html>
