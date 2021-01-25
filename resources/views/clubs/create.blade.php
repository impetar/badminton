@extends('layouts.app')

@section('content')
<div class="mt-5 col-sm-6 mx-auto">

    <form action="{{ route('clubs.store') }}" method="POST">

        <!-- CSRF token -->
        @csrf

        
        <div class="form-group">
        
            <label for="club_name">Name</label>
            <input value="{{ @old('club_name') }}" name="club_name" type="text" class="form-control" id="club_name">
            @if ($errors->has('club_name'))
                <span class="text-danger">{{ $errors->first('club_name') }}</span>
            @endif
        </div>

       
       
        <button type="submit" class="btn btn-primary float-right">Save</button>
        <a href="{{ route('roles.index') }}" class="btn btn-link">Cancel</a>
    </form>
</div>
@endsection