@extends('layouts/contentNavbarLayout')

@section('title', 'Wiggler - Veterinarians')

@section('content')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Veterinarian /</span> List Veterinarian

  <a href="{{ route('veterinarian.create') }}">
    <button type="button" class="btn btn-outline-success" style="float: right;">Add Veterinarian</button>
  </a>
</h4>

<div class="card">
  <h5 class="card-header">Veterinarian existing :</h5>
  <div class="table-responsive text-nowrap">
    @if (sizeof($listeVetos)== 0)
    <div class="container-xxl container-p-y">
      <div class="misc-wrapper text-center">
        <h2 class="mb-2 mx-2">No record found.</h2>
        <p class="mb-4 mx-2">
          Try adding new veterinarians.
        </p>
        <img src="{{asset('assets/img/illustrations/man-with-laptop-light.png')}}" height="140" alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png" data-app-light-img="illustrations/man-with-laptop-light.png">
      </div>

    </div>
    @else
    <table class="table table-hover">
      <thead>
        <tr>
          <th>Name</th>
          <th>Address</th>
          <th>Phone</th>
          <th>Email</th>
          <th>Sterilizations</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
        @foreach($listeVetos as $veto)
        <tr>
          <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$veto->name}}</strong></td>
          <td>{{$veto->address}}</td>
          <td>
            <a href="tel:{{$veto->phone}}">{{$veto->phone}}</a>
          </td>
          <td>
            <a href="mailto: {{$veto->email}}">{{$veto->email}}</a>
          </td>
          <td>{{sizeof($veto->sterilizations)}}</td>
          <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ route('veterinarian.show',$veto->id) }}"><i class="bx bx-detail me-1"></i> Show</a>
                <a class="dropdown-item" href="{{ route('veterinarian.edit',$veto->id) }}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                <form action="{{ route('veterinarian.destroy',$veto->id) }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-outline-danger"><i class="bx bx-trash-alt me-1"></i> Delete</button>
                </form>
              </div>
            </div>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    @endif
  </div>
</div>

@endsection
