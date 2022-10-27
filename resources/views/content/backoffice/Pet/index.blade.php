@extends('layouts/contentNavbarLayout')

@section('title', 'Wiggler - Pet')

@section('content')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Pet /</span> List Pets

  <a href="{{ route('pets.create') }}">
    <button type="button" class="btn btn-outline-success" style="float: right;">Add Pet</button>
  </a>
</h4>

<div class="card">
  <h5 class="card-header">Pets existing :</h5>
  <div class="table-responsive text-nowrap">
    <table class="table table-hover">
      <thead>
        <tr>
          <th>Name</th>
          <th>type</th>
          <th>race</th>
          <th>age</th>
          <th>Capture Date</th>
          <th>Vaccines</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
        @foreach($listepets as $pet)
        <tr>
          <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$pet->name}}</strong></td>
          <td>{{$pet->type}}</td>
          <td>{{$pet->race}}</td>
          <td>{{$pet->age}}</td>
          <td>{{$pet->captureDate}}</td>
          <td>{{sizeof($pet->vaccines)}}</td>
          <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
              <div class="dropdown-menu">
                <form action="{{ route('pets.destroy',$pet->id) }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-outline-danger">Delete pet</button>
                </form>
              </div>
            </div>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

@endsection
