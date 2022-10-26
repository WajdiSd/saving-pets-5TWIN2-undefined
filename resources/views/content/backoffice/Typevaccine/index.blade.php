@extends('layouts/contentNavbarLayout')

@section('title', 'Wiggler - Type Vaccine')

@section('content')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Type Vaccine /</span> List Type Vaccines

  <a href="{{ route('typevaccines.create') }}">
  <button type="button" class="btn btn-success" style="float: right;">Add Type vaccine</button>
</a>
</h4>

<div class="card">
  <h5 class="card-header">Types Vaccines existing :</h5>
  <div class="table-responsive text-nowrap">
    <table class="table table-hover">
      <thead>
        <tr>
          <th>type</th>
          <th>duration</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
      @foreach($listetypevaccine as $typevaccine)
      <tr>
          <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$typevaccine->type}}</strong></td>
          <td>{{$typevaccine->duration}}</td>
        <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ route('typevaccines.show',$typevaccine->id) }}"><i class="bx bx-detail me-1"></i> Show</a>
                <a class="dropdown-item" href="{{ route('typevaccines.edit',$typevaccine->id) }}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                <form action="{{ route('typevaccines.destroy',$typevaccine->id) }}" method="POST">
                @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger">Delete Type vaccine</button>
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
