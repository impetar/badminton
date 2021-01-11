@extends('layouts.app')

@section('content')
<a href="{{route ('roles.create')}}" class="btn btn-primary mt-5">Add</a>
<table class="table table-striped mt-3">
    <thead class="thead-dark">

        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name role</th>
            <th scope="col">Description</th>
            <th>Action </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($roles-> items() as $role)
        <tr>
            <td>{{ $role->id }}</td>
            <td>{{ $role->name }}</td>
            <td>{{ $role->description }}</td>
            <td>
            <a class="btn btn-outline-primary" href="{{ route('roles.show', ['role' => $role->id])}}">Details</a>
            <a class="btn btn-outline-primary" href="{{ route('roles.edit', ['role' => $role->id])}}">Edit</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection