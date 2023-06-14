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
            <option value="{{$data_schedule->Schedtime}}" hidden>{{$data_schedule->Schedtime}}</option>
                <option value="8am-9am">8am-9am</option>
                <option value="9am-10am">9am-10am</option>
                <option value="10am-11am">10am-11am</option>
                <option value="12pm-1pm">12pm-1pm</option>

          </select>
          
          <br><br>
          
          <label for="Staff"> Staff:</label>
          <select id="user_id" name="user_id">
              @foreach ($data_user as $user)
              <option value="{{$user->name}}">{{$user->name}}</option>
              @endforeach
              
          </select>
        
        <br>
        
        <br>

        <div class="row">
            <input type="submit" value="Update">
        &nbsp;&nbsp;&nbsp;
            <a href="/ManageSchedule/{{$data_schedule->id}}/delete"><input type="button" value="Delete" onclick="return confirm('Are You Sure?')"></a>
    </div>
        
        
    </form>
</div>
@endsection