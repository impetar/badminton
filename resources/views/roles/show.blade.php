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
</div>

<div class="btn-group" role="group">
<a class="btn btn-secondary" href="{{ route('roles.index') }}">Back</a>
<a class="btn btn-primary" href="{{ route('roles.edit', ['role' => $role]) }}">Edit</a>
<form class="form-inline" action="{{ route('roles.destroy', ['role' => $role->id]) }}" method="POST">
<!-- CSRF token -->
@csrf
    @method('DELETE')
    <button type="submit" onclick="areYouSure(event)" class="btn btn-danger">Delete</button>


</form>

</div>

@endsection