@extends('layouts.app')

@section('content')

<table class="table table-striped">
    <thead class="thead-dark">

        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name role</th>
            <th scope="col">Description</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($roles-> items() as $role)
        <tr>
            <td>{{ $role->id }}</td>
            <td>{{ $role->name }}</td>
            <td>{{ $role->description }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection