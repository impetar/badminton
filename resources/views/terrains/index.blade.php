@extends('layouts.app')

@section('content')

<table class="table table-striped">
    <thead class="thead-dark">

        <tr>
            <th scope="col">Id</th>
            <th scope="col">Size </th>
            <th scope="col">Price </th>
            <th scope="col">Description</th>
  
        </tr>
    </thead>
    <tbody>
        @foreach ($terrains-> items() as $terren)
        <tr>
            <td>{{ $terren->id }}</td>
            <td>{{ $terren->size }}</td>
            <td>{{ $terren->price }} kn/h</td>
            <td>{{ $terren->description }}</td>



        </tr>
        @endforeach
    </tbody>
</table>

@endsection