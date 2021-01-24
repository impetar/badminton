@extends('layouts.app')

@section('content')
<div class="mt-5 col-sm-6 mx-auto">
    
    <form action="{{ route('countries.update', ['country' => $country->id]) }}" method="POST">

        <!-- CSRF token -->
        @csrf
        @method('PUT')

        <!-- country name -->
        <div class="form-group">
        <h3 class="mt-3">Country details EDIT</h3>
            <label for="name">Country name</label>
            <input value="{{ $country->name }}" name="name" type="text" class="form-control" id="name">
            @if ($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
            @endif
        </div>

        <!-- native name -->
        <div class="form-group">
            <label for="native-name">Native name</label>
            <input value="{{ $country->native_name }}" name="native_name" type="text" class="form-control" id="native-name">
            @if ($errors->has('native_name'))
                <span class="text-danger">{{ $errors->first('native_name') }}</span>
            @endif
        </div>

        <button type="submit" class="btn btn-primary float-right">Save</button>
        <a href="{{ route('countries.index') }}" class="btn btn-link">Cancel</a>
    </form>
</div>
@endsection