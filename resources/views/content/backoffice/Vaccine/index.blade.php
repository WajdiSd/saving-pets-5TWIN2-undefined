@extends('layouts/contentNavbarLayout')

@section('title', 'Wiggler - Vaccine')

@section('content')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Vaccine /</span> List Vaccines

  <a href="{{ route('vaccines.create') }}">
  <button type="button" class="btn btn-success" style="float: right;">Add vaccine</button>
</a>
</h4>

<div class="card">
  <h5 class="card-header">Vaccines existing :</h5>
  <div class="table-responsive text-nowrap">
    <table class="table table-hover">
      <thead>
        <tr>
          <th>Name</th>
          <th>Validity</th>
          <th>Quantity</th>
          <th>type</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
      @foreach($listevaccine as $vaccine)
      <tr>
          <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$vaccine->name}}</strong></td>
          <td>{{$vaccine->validity}}</td>
          <td>{{$vaccine->quantity}}</td>
          <td>{{$vaccine->typevaccine->type}}</td>
        <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ route('vaccines.show',$vaccine->id) }}"><i class="bx bx-detail me-1"></i> Show</a>
                <a class="dropdown-item" href="{{ route('vaccines.edit',$vaccine->id) }}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                <form action="{{ route('vaccines.destroy',$vaccine->id) }}" method="POST">
                @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger">Delete vaccine</button>
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
