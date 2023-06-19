@extends('layouts.sideNav')
@section('content')
<div class="container">
        <h1>User Details</h1>
        <table class="table">
            <thead>
                <tr>
                     <th>Name</th>
                     <th>Email</th>
                     <th>Category</th>
                     <th>Gender</th>
                     <th>Phone Number</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                     <td>{{ $user->name }}</td>
                     <td>{{ $user->email }}</td>
                     <td>{{ $user->category }}</td>
                     <td>{{ $user->gender }}</td>
                     <td>{{ $user->phoneNum }}</td>
                     <td>
                     <form action="{{route('users.delete', $user->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Delete</button>
                            </form>
                     </td>
                     <td><a href="{{route('users.edit', $user->id)}}">Edit</a></td>
                    </tr>
                @endforeach
            </tbody>
<tr>

        <td><a href = "{{route('users.create')}}">new user </a></td>
        </tr>  </table>
        
    </div>
@endsection