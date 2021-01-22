@extends('layouts.app')

@section('content')
<div>
    <h3 class="mt-3"> User detail </h3>
    <ul class="list-unstyled">

 
    <li>First Name: {{ $user->first_name }} </li>
    <li>Last Name: {{ $user->last_name }} </li>
    <li>Email: {{ $user->email }} </li>
    <li>Hash pass: {{ $user->password }} </li>
    <li>Last login: {{ $user->last_login }} </li>
    <li>Role: {{ $user->role_id }} </li>

    <li><a href="https://www.google.com">User Linkedin</a> </li>
<a href="{{ url()->previous()}}" class="btn mt-2 btn-outline-primary">Back</a>

    </ul>


@endsection