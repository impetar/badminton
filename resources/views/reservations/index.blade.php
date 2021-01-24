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
            <th scope="col">User</th>

            <th>Action </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($reservations-> items() as $reservation)
        <tr>
            <td>{{ $reservation->id }}</td>
        <td>{{ $reservation->starts_at }}</td>
            <td>{{ $reservation->ends_at }}</td>
            <td>{{ $reservation->club->club_name }}</td>
            <td>{{ $reservation->terrain->description }}</td>
            <td>{{ $reservation->user->first_name }}</br>{{ $reservation->user->last_name }}</td>
            <td>
            <a class="btn btn-outline-primary" href="{{ route('reservations.show', ['reservation' => $reservation->id])}}">Details</a>
            <a class="btn btn-outline-primary" href="{{ route('reservations.edit', ['reservation' => $reservation->id])}}">Edit</a>
            </td>


        </tr>
        @endforeach
    </tbody>
</table>

@endsection