@extends('layouts.app')

@section('content')

<table class="table table-striped">
    <thead class="thead-dark">

        <tr>
            <th scope="col">Id</th>
            <th scope="col">Country name</th>
            <th scope="col">Native name</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($countries-> items() as $country)
        <tr>
            <td>{{ $country->id }}</td>
            <td>{{ $country->name }}</td>
            <td>{{ $country->native_name }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection