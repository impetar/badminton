@extends('layouts.app')

@section('content')
<div>
    <h3 class="mt-3"> Club detail </h3>
    <ul class="list-unstyled">

 
    <li>Name: {{ $club->club_name }}</li>
    <li>Country: {{ $club->country->name }} </li>
    <li><a href="https://www.google.com/search?q={{ $club->club_name }}">Google link</a> </li>
<a href="{{ url()->previous()}}" class="btn mt-2 btn-outline-primary">Back</a>

    </ul>


@endsection