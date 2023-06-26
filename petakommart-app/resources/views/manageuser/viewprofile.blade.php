@extends('layouts.sideNav')
@section('content')
<div class="container">
        <h1>User Details</h1>
        <table class="table">
            <thead>
                <tr>
                   
                    <th>Name</th>
                    <th>Email</th>
                    <th>Date of Birth</th>
                    <th>Phone Number</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $cashierid)
                    <tr>
                    
                        <td>{{ $cashierid->name }}</td>
                        <td>{{ $cashierid->email }}</td>
                        <td>{{ $cashierid->dob }}</td>
                        <td>{{ $cashierid->phoneNum }}</td>
                        <td>
                            <form action="{{route('users.deleteprofile', $cashierid->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Delete blog</button>
                            </form>
                        </td>
                        <td><a href="{{route('users.editprofile', $cashierid->id)}}">Edit</a></td>
                    </tr>
                @endforeach
            </tbody>
            <tr>
                <td><a href = "{{route('users.createprofile', $cashierid -> id)}}">new user </a></td>
</tr>
        </table>
    </div>
@endsection