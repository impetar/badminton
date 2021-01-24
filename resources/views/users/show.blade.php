@extends('layouts.app')

@section('content')

<div class="mt-5 text-center">

    
    <h1 class="text-center"> {{$user->first_name}} {{$user->last_name}}</h1>
    <ul class="list-unstyled">
    <img src="https://picsum.photos/300" alt="profile image" class="d-block mx-auto rounded-circle">
    
    <li class="text-center">Email: {{ $user->email }} </li>

    <li class="text-center">Last login: {{ $user->last_login }} </li>
    <li class="text-center">Role: {{ $user->role->name }} </li>

    <li><a href="https://www.google.com">User Linkedin</a> </li>
    <a href="{{ url()->previous()}}" class="btn mt-2 btn-outline-primary">Back</a>


    <a class="btn mt-2 btn-secondary" href="">Edit</a>
    <a class="btn mt-2 btn-danger" href="">Change Password</a>

    </ul>
</div>
@endsection