@extends('layouts.app')

@section('content')
<div>
    <h3 class="mt-3"> Reservation detail </h3>
    <ul class="list-unstyled">

 
    <li>Starts time: {{ $reservation->starts_at }} </li>
    <li>End Time: {{ $reservation->ends_at }} </li>
    <li>Club: {{ $reservation->club->club_name }} </li>
    <li>Terrain: {{ $reservation->terrain->description }} </li>
    <li>User: {{ $reservation->user->first_name }} {{ $reservation->user->last_name }} </li>


    <li><a href="https://www.google.com">Google</a> </li>
<a href="{{ url()->previous()}}" class="btn mt-2 btn-outline-primary">Back</a>

    </ul>


@endsection