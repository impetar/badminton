@extends('layouts.app')

@section('content')
<div>
    <h3 class="mt-3"> Terrain detail </h3>
    <ul class="list-unstyled">

 
    <li>Size: {{ $terrain->size }}</li>
    <li>Price:  {{ $terrain->price }}</li>
    <li>Description: {{ $terrain->description }} </li>
    <li><a href="https://www.google.com">Google link</a> </li>
<a href="{{ url()->previous()}}" class="btn mt-2 btn-outline-primary">Back</a>

    </ul>


@endsection