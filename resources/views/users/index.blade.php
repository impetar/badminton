@extends('layouts.app')

@section('content')

<table class="table table-striped">
    <thead class="thead-dark">

        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Surname</th>
            <th scope="col">Email</th>
            <th scope="col">Hash Password</th>
            <th scope="col">Last Login</th>
            <th scope="col">Role ID</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($users-> items() as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->first_name }}</td>
            <td>{{ $user->last_name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->password }}</td>
            <td>{{ $user->last_login }}</td>
            <td>{{ $user->role_id }}</td>



        </tr>
        @endforeach
    </tbody>
</table>

@endsection