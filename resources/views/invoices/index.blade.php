@extends('layouts.app')

@section('content')
<a href="{{route ('invoices.create')}}" class="btn btn-primary mt-5">Add</a>
<table class="table table-striped mt-3">
    <thead class="thead-dark">

        <tr>
            <th scope="col">Id</th>
            <th scope="col">Date</th>
            <th scope="col">Price</th>
            <th scope="col">Reservation ID</th>
            <th>Action </th>

        </tr>
    </thead>
    <tbody>
        @foreach ($invoices-> items() as $invoice)
        <tr>
            <td>{{ $invoice->id }}</td>
            <td>{{ $invoice->invoice_date }}</td>
            <td>{{ $invoice->price_total }} kn </td>
            <td>{{ $invoice->reservation->id }}</td>
            <td>
            <a class="btn btn-outline-primary" href="{{ route('invoices.show', ['invoice' => $invoice->id])}}">Details</a>
            <a class="btn btn-outline-primary" href="{{ route('invoices.edit', ['invoice' => $invoice->id])}}">Edit</a>
            </td>



        </tr>
        @endforeach
    </tbody>
</table>

@endsection