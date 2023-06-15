@extends('layouts.sideNav')
@section('content')

    <head>
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/addSchedule.css') }}">
        <style>
            .container {
                /* border: px outset red; */
                background-color: #D8BFD8;
                text-align: left;
            }
        </style>

        <script>
            function favTutorial() {
                var mylist = document.getElementById("myList");
                document.getElementById("favourite").value = mylist.options[mylist.selectedIndex].text;
            }
        </script>
    </head>



    <div class="container1">
        <form action="/ManageSchedule/create" method="POST">
            {{ csrf_field() }}
            <label for="Date"> Date:</label>
            <input type="date" id="SchedDate" name="SchedDate"><br>

            <label for="Time"> Time:</label>
            <select id="Schedtime" name="Schedtime">
                <option value="8am-9am">8am-9am</option>
                <option value="9am-10am">9am-10am</option>
                <option value="10am-11am">10am-11am</option>
                <option value="12pm-1pm">12pm-1pm</option>
            </select>

            <br>
            <label for="Staff"> Staff:</label>
            <select id="myList" onchange="favTutorial()" name="Incharge">
                <option hidden> ---Select Staff--- </option>
                @foreach ($data_user as $user)
                    <option value="{{ $user->name }}">{{ $user->name }}</option>
                @endforeach
                <input type="text" id="favourite" size="20" name="Incharge" value="" hidden>
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
                @foreach ($data_schedule as $sched)
                    <tr>
                        <td>{{ $sched->id }}</td>
                        <td>{{ $sched->SchedDate }}</td>
                        <td>{{ $sched->Schedtime }}</td>
                        <td>{{ $sched->Incharge }}</td>





                        <td><a href="/ManageSchedule/{{ $sched->id }}/edit"><button
                                    class="btn btn-primary">Edit</button></a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
