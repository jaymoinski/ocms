@extends('layouts.app')

@section('content')
<div class="container col-md-6">

    <table class="table table-sm table-bordered table-dark shadow-sm p-3 text-white-50">
        </thead>
        <tbody>
          <tr>
            <td class='text-center'>
                <a href="/complaints/create" class='text-decoration-none text-reset'>Lodge Complaint</a>
            </td>

            <td class='text-center'>
                <a href="" class="text-decoration-none text-reset">Complaint Status</a>
            </td>

            <td class='text-center'>
                <a href="" class='text-decoration-none text-reset'>
                Complaints List <span class="badge badge-primary badge-pill">20</span>
                </a>
            </td>
          </tr>
        </tbody>
      </table>

      <div class="container bg-white shadow-sm p-3 border-top">
        <div class='col-md-12 p-0'>
            @if(session()->has('message'))
                <div class="alert alert-success text-center">
                    {{ session()->get('message') }}
                </div>
            @endif

            <div class='pl-3'>
                <p>
                    Name: {{ $user->name }}<br>
                    E-Mail: {{ $user->email }}<br>
                    <a class='text-decoration-none' href="/profile/{{ $user->id }}/edit">Edit Profile</a>
                </p>
            </div>
        </div>
      </div>

</div>
@endsection
