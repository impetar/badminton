@extends('layouts.app')

@section('content')
<a href="{{route ('terrains.create')}}" class="btn btn-primary mt-5">Add</a>
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
        @foreach ($terrains-> items() as $terren)
        <tr>
            <td>{{ $terren->id }}</td>
            <td>{{ $terren->size }}</td>
            <td>{{ $terren->price }} kn/h</td>
            <td>{{ $terren->description }}</td>
            <td>
            <a class="btn btn-outline-primary" href="">Details</a>
            <a class="btn btn-outline-primary" href="">Edit</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection