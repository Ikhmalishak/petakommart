@extends('layouts.sideNav')
@section('content')

<head>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/addSchedule.css')}}">
<style>
.container {
  /* border: px outset red; */
  background-color: #D8BFD8;    
  text-align: left;
}
</style>
</head>



<div class="container">
    <form action="/ManageSchedule/create" method="POST">
        {{ csrf_field() }}
        <label for= "Date"> Date:</label>
        <input type="date" id="SchedDate" name="SchedDate"><br>

        <label for= "Time"> Time:</label>
        <select id="Schedtime" name="Schedtime">
            <option value="8am-9am">8am-9am</option>
            <option value="9am-10am">9am-10am</option>
            <option value="10am-11am">10am-11am</option>
            <option value="12pm-1pm">12pm-1pm</option>
          </select>
        
          {{-- @foreach ($schedule as $item)
              <p>$item</p>
          @endforeach --}}
        {{-- <table>
            <tr>
                <th>From</th>
                <th>To</th>
            </tr>
            <tr>
                <td>
                    <input type="time" id="timeFrom" name="timeFrom">
                </td>
                <td>
                    <input type="time" id="timeTo" name="timeTo">
                </td>
            </tr>
        </table> --}}
        
        <br>
        
        <br>

        <input type="submit" value="Add">

        <br>
        
    </form>

    {{-- @foreach ($data_schedule as $schedule)
    <button type="button"><a href="/ManageSchedule/{{$data_schedule->id}}/edit"></a>Update</button>
    @endforeach --}}
    
    
</div>

{{-- @foreach ($collection as $item)
    
@endforeach
<table>
    <tr>
        <th>Date/Time</th>
        <th>Monday</th>
        <th>Tuesday</th>
        <th>Wednesday</th>
        <th>Thurday</th>
        <th>Friday</th>
    </tr>
    <tr>
        <td>8am-9am</td>
        <td>9am-10am</td>
        <td>8am-9am</td>
        <td>9am-10am</td>
        <td></td>
        <td></td>
    </tr>
</table> --}}

<br><br><br>
<div class="container1">
    <h1>Schedule Details</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Schedule ID</th>
                <th>Schedule Date</th>
                <th>Schedule Time</th>
                <th>Total Schedule Duty</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data_schedule as $sched)
                <tr>
                    <td>{{ $sched->id }}</td>
                    <td>{{ $sched->SchedDate }}</td>
                    <td>{{ $sched->Schedtime }}</td>
                    <td>{{ $sched->SchedTotalDuty }}</td>
                    <td>
                        {{-- <form action="{{route('inventorys.delete', $item->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete blog</button>
                        </form> --}}
                    </td>
                    {{-- <td><a href="{{route('ManageSchedule.UpdateorDelete', $data_schedule->id)}}">Edit</a></td> --}}
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('ManageSchedule.AddSchedule') }}">new schedule</a> 
</div>
@endsection