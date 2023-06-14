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
    <form action="/ManageSchedule/{{$data_schedule->id}}/update" method="POST">
        {{ csrf_field() }}
        <label for= "Date"> Date:</label>
        <input type="date" id="SchedDate" name="SchedDate" value="{{$data_schedule->SchedDate}}"><br>

        <label for= "Time"> Time:</label>
        <select id="Schedtime" name="Schedtime">
            <option value="{{if ($data_schedule->Schedtime == '8am-9am') {
                $data_schedule->Schedtime
            } }}">8am-9am</option>

            <option value="{{$data_schedule->Schedtime == '9am-10am'{
                $data_schedule->Schedtime
            } }}">9am-10am</option>

            <option value="{{$data_schedule->Schedtime == '10am-11am'{
                $data_schedule->Schedtime
            } }}">10am-11am</option>

            <option value="{{$data_schedule->Schedtime == '12pm-1pm'{
                $data_schedule->Schedtime
            } }}">12pm-1pm</option>
          </select>
        
        
        <br>
        
        <br>

        <input type="submit" value="Add">
    </form>
</div>
@endsection