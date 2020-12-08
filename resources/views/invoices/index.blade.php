@extends('layouts.app')

@section('content')

<table class="table table-striped">
    <thead class="thead-dark">

        <tr>
            <th scope="col">Id</th>
            <th scope="col">Date</th>
            <th scope="col">Price</th>
            <th scope="col">Reservation ID</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($invoices-> items() as $invoice)
        <tr>
            <td>{{ $invoice->id }}</td>
            <td>{{ $invoice->invoice_date }}</td>
            <td>{{ $invoice->price_total }} kn </td>
            <td>{{ $invoice->reservation_id }}</td>



        </tr>
        @endforeach
    </tbody>
</table>

@endsection