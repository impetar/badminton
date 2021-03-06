@extends('layouts.app')

@section('content')

<!-- Search form -->
<a href="{{route ('users.index') }}" class="btn btn-primary mt-3">Refresh</a>
<form class="form-inline float-right mt-3" method="GET" action="{{ route('users.index') }}">
    <input class="form-control" type="text" placeholder="Search" name="search">
    <a class="btn btn-secondary" href="{{ route('users.index') }}">All</a>
</form>

<table class="table table-striped mt-3">
    <thead class="thead-dark">

        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Surname</th>
            <th scope="col">Email</th>
            <th scope="col">Last Login</th>
            <th scope="col">Role ID</th>
            <th>Action </th>

        </tr>
    </thead>
    <tbody>
        @foreach ($users-> items() as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->first_name }}</td>
            <td>{{ $user->last_name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->last_login }}</td>
            <td>{{ $user->role->name }}</td>
            <td>
            <a class="btn btn-outline-primary" href="{{ route('users.show', ['user' => $user->id])}}">Details</a>
            <a class="btn btn-outline-primary" href="{{ route('users.edit', ['user' => $user->id])}}">Edit</a>
            <a class="btn btn-danger" href="">Change password</a>
            </td>



        </tr>
        @endforeach
    </tbody>
</table>

@endsection