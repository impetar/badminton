@extends('layouts.app')

@section('content')
<div>
    <h3 class="mt-3"> Country detail </h3>
    <ul class="list-unstyled">


        <li>Name: {{ $country->name }} </li>
        <li>Native name: {{ $country->native_name }} </li>
        <li><a href="https://hr.wikipedia.org/w/index.php?search={{ $country->native_name }}">Wikipedia link</a> </li>
        <a href="{{ url()->previous()}}" class="btn mt-2 btn-outline-primary">Back</a>

    </ul>


    @endsection