@extends('layouts.app')

@section('content')
<h3 class="mt-3">Country details INDEX</h3>
<a href="{{ route('countries.create') }}" class="btn btn-primary mt-5">Add</a>


<!-- Search form -->
<form class="form-inline float-right mt-5" method="GET" action="{{ route('countries.index') }}">
    <input class="form-control" type="text" placeholder="Search" name="search">
    <a class="btn btn-secondary" href="{{ route('countries.index') }}">All</a>
</form>

<table class="table table-striped mt-3">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Country name</th>
            <th scope="col">Native name</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($countries->items() as $country)
        <tr>
            <td>{{ $country->id }}</td>
            <td>{{ $country->name }}</td>
            <td>{{ $country->native_name }}</td>
            <td>
                <a class="btn btn-outline-primary"
                    href="{{ route('countries.show', ['country' => $country->id]) }}">Details</a>
                <a class="btn btn-outline-primary"
                    href="{{ route('countries.edit', ['country' => $country->id]) }}">Edit</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<div class="d-flex justify-content-center">
    {{ $countries->links() }}
</div>
@endsection