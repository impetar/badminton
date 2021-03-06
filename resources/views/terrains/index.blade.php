@extends('layouts.app')

@section('content')
<a href="{{route ('terrains.create')}}" class="btn btn-primary mt-3">Add</a>

<form class="form-inline float-right mt-3" method="GET" action="{{ route('terrains.index') }}">
    <input class="form-control" type="text" placeholder="Search" name="search">
    <a class="btn btn-secondary" href="{{ route('terrains.index') }}">All</a>
</form>



<table class="table table-striped mt-3">
    <thead class="thead-dark">

        <tr>
            <th scope="col">Id</th>
            <th scope="col">Size </th>
            <th scope="col">Price </th>
            <th scope="col">Description</th>
            <th>Action </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($terrains-> items() as $terrain)
        <tr>
            <td>{{ $terrain->id }}</td>
            <td>{{ $terrain->size }}</td>
            <td>{{ $terrain->price }} kn/h</td>
            <td>{{ $terrain->description }}</td>
            <td>
            <a class="btn btn-outline-primary" href="{{ route('terrains.show', ['terrain' => $terrain->id])}}">Details</a>
            <a class="btn btn-outline-primary" href="{{ route('terrains.edit', ['terrain' => $terrain->id])}}">Edit</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection