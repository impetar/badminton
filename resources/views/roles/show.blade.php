@extends('layouts.app')

@section('content')
<div>
    <h3 class="mt-3"> Role detail </h3>
    <ul class="list-unstyled">

 
    <li>Name: {{ $role->name }} </li>
    <li>Description: {{ $role->description }} </li>



    <li><a href="https://www.google.com">Google</a> </li>
<a href="{{ url()->previous()}}" class="btn mt-2 btn-outline-primary">Back</a>

    </ul>


@endsection