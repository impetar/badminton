@extends('layouts.app')

@section('content')

<table class="table table-striped">
    <thead class="thead-dark">

        <tr>
            <th scope="col">Id</th>
            <th scope="col">Start </th>
            <th scope="col">Finish </th>
            <th scope="col">Club ID</th>
            <th scope="col">Terrain ID</th>
            <th scope="col">User ID</th>


        </tr>
    </thead>
    <tbody>
        @foreach ($reservations-> items() as $reservation)
        <tr>
            <td>{{ $reservation->id }}</td>
            <td>{{ $reservation->starts_at }}</td>
            <td>{{ $reservation->ends_at }}</td>
            <td>{{ $reservation->club_id }}</td>
            <td>{{ $reservation->terrain_id }}</td>
            <td>{{ $reservation->user_id }}</td>


        </tr>
        @endforeach
    </tbody>
</table>

@endsection