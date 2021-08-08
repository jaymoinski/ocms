@extends('layouts.app')

@section('content')
<div class="container col-md-8" style="font-family: lato, sans-serif">
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

    <table class="table table-sm table-light table-striped shadow-sm p-3 mb-5">
        <thead>
            <tr class='table-primary'>
                <th scope="col" class='align-middle'>Category</th>
                <th scope="col" class='align-middle'>Type</th>
                <th scope="col" class='align-middle'>Details</th>
                <th scope="col" class='align-middle'>Attached File</th>
                <th scope="col" class='align-middle'>Created At</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $i )
            <tr>
                <td class='align-middle'>{{ $i->complaintCat }}</td>
                <td class='align-middle'>{{ $i->complaintType }}</td>
                <td class='align-middle'>{{ $i->complaintDetails }}</td>
                <td class='align-middle'>{{ $i->complaintFile }}</td>
                <td class='align-middle'>{{ $i->created_at }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
