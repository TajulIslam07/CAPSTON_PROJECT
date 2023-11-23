
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
    @include('user.css')
</head>
<body>
<header>
    @include('user.navbar')
</header>
<div class="container-fluid">

    <div style="background-color: silver">
        <p class="h1 text-center">Blood Bank</p>
        <p class="h1 text-center"><a class="link-danger" href="{{'donate_blood'}}">Become A Doner</a></p>
    </div >

    <div class="d-flex align-items-center justify-content-center">
        <form action="{{url('search_blood')}}">
            @csrf
                <label class=" h4 text-red-600">Search Blood : &nbsp; </label>
                <select name="search">
                    <option disabled selected>Select your Blood Group</option>
                    <option value="A+">A positive</option>
                    <option value="A-">A negative</option>
                    <option value="B+">B positive</option>
                    <option value="B-">B negative</option>
                    <option value="AB+">AB positive</option>
                    <option value="AB-">AB negative</option>
                    <option value="O+">O positive</option>
                    <option value="O-">O negative</option>
                </select>

            <button  style="background-color: #00D9A5;padding: 8px;border-radius: 8px;" type="submit" >Submit Request</button>
        </form>
    </div>

    <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">

        @foreach($data as $doner)
            <div class="item">
                <div class="card-doctor">
                    <div class="header">
                        <img src="../assets/img/doctors/dctr.jpg" alt="">

                        {{--
                        <div class="meta">
                            <a href="#"><span class="mai-call"></span></a>
                            <a href="#"><span class="mai-logo-whatsapp"></span></a>
                        </div>
                        --}}



                    </div>
                    <div class="body">
                        <p class="text-xl mb-0">{{$doner->name}}</p>
                        <p class="text-sm text-grey">Blood: {{$doner->bloodGroup}}</p>
                        <span class="text-sm text-grey">{{$doner->number}}</span>
                    </div>
                </div>
            </div>
        @endforeach

    </div>




</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
@include('user.scripts')
</body>
</html>
