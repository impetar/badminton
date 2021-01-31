@extends('layouts.app')

@section('content')

<div class="mt-5 text-center">

    
    <h1 class="text-center"> {{$user->first_name}} {{$user->last_name}}</h1>
    <ul class="list-unstyled">
    <img src="https://picsum.photos/300" alt="profile image" class="d-block mx-auto rounded-circle">
    
    <div class="btn-group mt-5" role="group">
        <a class="btn btn-secondary" href="{{ route('users.index') }}">Back</a>

        @if($loggedInUser->isAdmin() || $user->id === $loggedInUser->id)
        <a class="btn btn-primary" href="{{ route('users.edit', ['user' => $user]) }}">Edit</a>
        <a class="btn btn-primary" href="{{ route('change_password.edit', ['user' => $user]) }}">Change Password</a>
        @endif

        <!-- admin svima deaktivira račun, korisnik može samo sebi -->
        @if($loggedInUser->isAdmin() || $user->id === $loggedInUser->id)
        <form class="form-inline" action="{{ route('users.destroy', ['user' => $user->id]) }}" method="POST">
            <!-- CSRF token -->
            @csrf
            @method('DELETE')
            <button type="submit" onclick="confirm('Are you sure?')" class="btn btn-danger">Deactivate</button>
        </form>
        @endif
    </div>
        <!-- popis grupa -->
        <h1 class="h3 mt-5">Groups</h1>
    <table class="table table-striped mt-3 table-sm">
        <thead>
          <tr>
            <th scope="col">Group name</th>
            <th class="text-center w-25" scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($user->groups as $group)
              <tr>
                  <td>{{ $group->name }}</td>
                  <td class="text-center">
                    <a href="{{ route('groups.show', ['group' => $group->id]) }}" class="btn btn-outline-primary btn-sm">Details</a>
                  </td>
              </tr>
          @endforeach
        </tbody>
    </table>
</div>
@endsection


