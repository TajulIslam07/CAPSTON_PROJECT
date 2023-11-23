<div class="page-section">
    <div class="container bg-red-50">
        <form class="main-form" action="{{url('appoinment')}}" method="POST">
            @csrf
            <div class="row mt-5 ">
                <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
                    <input type="text" class="form-control" name="name" placeholder="Full name" required>
                </div>
                <div class="col-12 col-sm-6 py-2 wow fadeInRight">
                    <input type="text" class="form-control" name="email" placeholder="Email address.." required>
                </div>
                <div class="col-12 col-sm-6 py-2 wow fadeInLeft"  data-wow-delay="300ms">
                    <input type="date" name="date" class="form-control" required>
                </div>
                <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
                    <select name="doctor" id="departement" class="custom-select">
                        <option disabled selected>Doctor--Speciality</option>
                        @foreach($doctor as $doctors)
                            <option>{{$doctors->Doctor}}--{{$doctors->Speciality}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                    <input type="text" class="form-control" name="number" placeholder="Number..">
                </div>
                <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                    <textarea name="message" id="message" class="form-control" rows="6" placeholder="Enter message.."></textarea>
                </div>
            </div>
            <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                <p class="h3">Make an Appointment</p>
            </div>


            <button  style="background-color: #00D9A5;padding: 8px;border-radius: 8px;" type="submit">Submit Request</button>
        </form>
    </div>
</div>
