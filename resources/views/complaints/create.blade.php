@extends('layouts.app')

@section('content')
<div class="container col-md-4 p-0 " style="font-family: lato, sans-serif">
    <div class="container p-0">
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

    <div class="container border-top bg-white shadow-sm pt-4 pb-2">
        <form action="/complaints" enctype="multipart/form-data" method="post">
            @if(session()->has('message'))
                <div class="alert alert-success text-center">
                    {{ session()->get('message') }}
                </div>
            @endif

            @csrf
            <div class="form-row">
                <div class="col-6 mb-4">
                    <select class="form-select col-md-12 p-2" name="complaintCat">
                        <option selected>Choose Level</option>
                        <option value="Certificate">Certificate</option>
                        <option value="Diploma">Diploma</option>
                        <option value="Bachelor">Bachelor</option>
                    </select>
                </div>
                <div class="col-6">
                    <select class="form-select col-md-12 p-2" name="complaintType">
                        <option selected>Complaint Type</option>
                        <option value="Academics">Academics</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
            </div>
            <div>
                <textarea name="complaintDetails" id="complaintDetails" cols="30"
                rows="5" class='col-md-12'></textarea>
            </div>
            <div class="form-row mt-3">
                <div class="col-md-6 mb-4">
                    <input type="file" name="complaintFile" id="complaintFile" class="pt-1">
                </div>
                <div class="col-md-6">
                    <button type="submit" class="btn btn-primary col-md-12">Lodge</button>
                </div>
            </div>
            </form>
    </div>
</div>
@endsection
