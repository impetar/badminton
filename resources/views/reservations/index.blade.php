@extends('layouts.app')

@section('content')
<a href="{{route ('reservations.create')}}" class="btn btn-primary mt-5">Add</a>
<table class="table table-striped mt-3">
    <thead class="thead-dark">

        <tr>
            <th scope="col">Id</th>
            <th scope="col">Start </th>
            <th scope="col">Finish </th>
            <th scope="col">Club ID</th>
            <th scope="col">Terrain ID</th>
            <th scope="col">User ID</th>
            <th>Action </th>
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
            <td>
            <a class="btn btn-outline-primary" href="{{ route('reservations.show', ['reservation' => $reservation->id])}}">Details</a>
            <a class="btn btn-outline-primary" href="{{ route('reservations.edit', ['reservation' => $reservation->id])}}">Edit</a>
            </td>


        </tr>
        @endforeach
    </tbody>
</table>

@endsection