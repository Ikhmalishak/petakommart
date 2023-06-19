@extends('layouts.sideNav')
@section('content')
<table>
    <thead>
        <tr>
            <th>Day</th>
            <th>Total Amount</th>
        </tr>
    </thead>
    <tbody>
        @foreach($report as $entry)
            <tr>
                <td>{{ $entry->day }}</td>
                <td>{{ $entry->total }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection