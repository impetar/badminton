@extends('layouts.app')

@section('content')
<div>
    <h3 class="mt-3">Country details SHOW</h3>
    <ul class="list-unstyled">
        <li>Id: {{ $country->id }}</li>
        <li>Name: {{ $country->name }}</li>
        <li>Native name: {{ $country->native_name }}</li>
        <li><a href="https://en.wikipedia.org/w/index.php?search={{ $country->name }}">Wikipedia link</a></li>
    </ul>
</div>


<div class="btn-group" role="group">
<a class="btn btn-secondary" href="{{ route('countries.index') }}">Back</a>

<a class="btn btn-primary" href="{{ route('countries.edit', ['country' => $country]) }}">Edit</a>

<form class="form-inline" action="{{ route('countries.destroy', ['country' => $country->id]) }}" method="POST">
    <!-- CSRF token -->
    @csrf
    @method('DELETE')
    <button type="submit" onclick="areYouSure(event)" class="btn btn-danger">Delete</button>
</form>
</div>


    @endsection