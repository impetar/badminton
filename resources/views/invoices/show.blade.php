@extends('layouts.app')

@section('content')
<div>
    <h3 class="mt-3"> Invoice detail </h3>
    <ul class="list-unstyled">


        <li>Invoice made: {{$invoice->invoice_date}} </li>
        <li>Price: {{$invoice->price_total}} </li>
        <li>Reservation: {{$invoice->reservation_id}} </li>
        <li><a href="https://hr.wikipedia.org/w/index.php?search=">Link link</a> </li>
        <a href="{{ url()->previous()}}" class="btn mt-2 btn-outline-primary">Back</a>

    </ul>


    @endsection