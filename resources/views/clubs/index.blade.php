<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')

@section('content')
<a href="{{route ('clubs.create') }}" class="btn btn-primary mt-5">Add</a>



<form class="form-inline mt-5 float-right " method="GET" action="{{ route('clubs.index') }}">
    <input class="form-control" type="text" placeholder="Search" name="search">
    <a class="btn btn-secondary" href="{{ route('clubs.index') }}">All</a>
</form>



<table class="table table-striped mt-3">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Club name</th>
            <th scope="col">Country ID</th>
            <th>Action </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($clubs->items() as $club)
        <tr>

            <td>{{ $club->id }}</td>
            <td>{{ $club->club_name }}</td>
            <td>{{ $club->country->name }}</td>
            <td>
                <a class="btn btn-outline-primary" href="{{ route('clubs.show', ['club' => $club->id]) }}">Details</a>
                <a class="btn btn-outline-primary" href="{{ route('clubs.edit', ['club' => $club->id]) }}">Edit</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection