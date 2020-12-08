<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')

@section('content')
<table class="table table-striped">
    <thead class="thead-dark">

        <tr>
            <th scope="col">Id</th>
            <th scope="col">Club name</th>
            <th scope="col">Country ID</th>
        </tr>
    </thead>
    <tbody>
        </div>

        @foreach ($clubs-> items() as $club)
        <tr>

            <td>{{ $club->id }}</td>
            <td>{{ $club->club_name }}</td>
            <td>{{ $club->country_id }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection