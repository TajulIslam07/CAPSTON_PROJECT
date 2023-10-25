


<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.css')
</head>
<body>
<div class="container-scroller">
    @include('admin.sidebar')
    @include('admin.navbar')
    <div class="main-panel">
        <div align="center" style="overflow-x:auto;background-color: #00D9A5; padding:70px;">
            <table style="border: 1px solid black;">
                <tr style="background-color: black;padding: 10px; color: white;text-align: center" >
                    <th style="padding: 10px">Doctor name</th>
                    <th style="padding: 10px">Phone</th>
                    <th style="padding: 10px">Speciality</th>
                    <th style="padding: 10px">Room No.</th>
                    <th style="padding: 10px">Remove Doctor</th>
                    <th style="padding: 10px">Update Doctor</th>
                </tr>
                @foreach($data as $doctor)
                    <tr style="text-align: center">
                        <td style="padding: 10px; color: black;border: 1px solid black;">{{$doctor->Doctor}}</td>
                        <td style="padding: 10px; color: black;border: 1px solid black;">{{$doctor->Phone}}</td>
                        <td style="padding: 10px; color: black;border: 1px solid black;">{{$doctor->Speciality}}</td>
                        <td style="padding: 10px; color: black;border: 1px solid black;">{{$doctor->Room}}</td>


                        <td  style="padding: 10px; color: black;border: 1px solid black;">
                            <a  class="btn btn-danger" onclick="return confirm('Are you sure to remove doctor')" href="{{url('delete',$doctor->id)}}">Remove</a>
                        </td>
                        <td  style="padding: 10px; color: black;border: 1px solid black;">
                            <a  class="btn btn-success"  href="{{url('update',$doctor->id)}}">Update</a>
                        </td>
                    </tr>
                @endforeach


            </table>
        </div>
    </div>
@include('admin.scripts')
</body>
</html>

