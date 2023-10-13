


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
                <th style="padding: 10px">Customer name</th>
                <th style="padding: 10px">Email</th>
                <th style="padding: 10px">Phone</th>
                <th style="padding: 10px">Doctor name</th>
                <th style="padding: 10px">Date</th>
                <th style="padding: 10px">Message</th>
                <th style="padding: 10px">Status</th>
                <th style="padding: 10px">Apporved</th>
                <th style="padding: 10px">Cancel</th>
            </tr>
            @foreach($data as $appoinment)
                <tr style="text-align: center">
                    <td style="padding: 10px; color: black;border: 1px solid black;">{{$appoinment->full_name}}</td>
                    <td style="padding: 10px; color: black;border: 1px solid black;">{{$appoinment->email}}</td>
                    <td style="padding: 10px; color: black;border: 1px solid black;">{{$appoinment->phone}}</td>
                    <td style="padding: 10px; color: black;border: 1px solid black;">{{$appoinment->doctor}}</td>
                    <td style="padding: 10px; color: black;border: 1px solid black;">{{$appoinment->date}}</td>
                    <td style="padding: 10px; color: black;border: 1px solid black;">{{$appoinment->message}}</td>
                    <td style="padding: 10px; color: black;border: 1px solid black;">{{$appoinment->status}}</td>
                    <td style="padding: 10px; color: black;border: 1px solid black;">
                        <a class="btn btn-success"  href="{{url('approved',$appoinment->id)}}">Apporved</a>
                    </td>
                    <td  style="padding: 10px; color: black;border: 1px solid black;">
                        <a  class="btn btn-danger"  href="{{url('cancel',$appoinment->id)}}">Cancel</a>
                    </td>
                </tr>
            @endforeach


        </table>
    </div>
</div>
@include('admin.scripts')
</body>
</html>
