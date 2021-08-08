@extends('layouts.app')

@section('content')
<div class="container col-md-4">

    <div class="table">
        <table class="table table-sm table-bordered table-dark shadow-sm p-3 text-white-50">
        </thead>
        <tbody>
          <tr>
            <td class='text-center'>
                <a href="/profile" class='text-decoration-none text-reset'>Back To Profile</a><br>
            </td>

            <td class='text-center'>
                <a href="" class="text-decoration-none text-reset">Complaint Status</a><br>
            </td>
          </tr>
        </tbody>
      </table>
    </div>

    <form action="/profile/{{$user->id}}" enctype="multipart/form-data" method="post">
        @csrf
        @method('PATCH')
        @if(session()->has('message'))
            <div class="alert alert-success text-center">
                {{ session()->get('message') }}
            </div>
        @endif

        @csrf
        <div class="col p-0">
            <div class="mb-4">
                <input type="text" name="name" placeholder="Name" class="form-control
                @error('name') is-invalid @enderror" value="{{ old('name') ?? $user->name }}"
                required autocomplete="name" autofocus>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-4">
                <input type="email" name="email" placeholder="E-Mail Address" class="form-control
                @error('email') is-invalid @enderror" value="{{ old('email') ?? $user->email }}"
                required autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <!--<div class="mb-4">
                <p class='text-black-50 text-center'>Leave the password fields empty if you dont want to make changes!</p>
                <input id="password" type="password" class="form-control
                @error('password') is-invalid @enderror" name="password"
                autocomplete="new-password" placeholder="New Password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-4">
                <input id="password-confirm" type="password" class="form-control"
                placeholder="Confirm Password" name="password_confirmation"
                autocomplete="new-password">
            </div>-->

            <div class="p-0">
                <button type="submit" class="btn btn-primary col-md-12">{{ __('Update') }}</button>
            </div>
        </div>
        </form>
</div>
@endsection
