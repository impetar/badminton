@extends('layouts.app')

@section('content')
<div class="mt-5 col-sm-6 mx-auto">

    <form action="{{ route('roles.store') }}" method="POST">

        <!-- CSRF token -->
        @csrf

        
        <div class="form-group">
        
            <label for="name">Name of Role</label>
            <input value="{{ @old('name') }}" name="name" type="text" class="form-control" id="name">
            @if ($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
            @endif
        </div>

        <div class="form-group">
            <label for="description-name">Description role</label>
            <input value="{{ @old('description') }}" name="description" type="text" class="form-control" id="description">
            @if ($errors->has('description'))
                <span class="text-danger">{{ $errors->first('description') }}</span>
            @endif
        </div>
        
        <button type="submit" class="btn btn-primary float-right">Save</button>
        <a href="{{ route('roles.index') }}" class="btn btn-link">Cancel</a>
    </form>
</div>
@endsection