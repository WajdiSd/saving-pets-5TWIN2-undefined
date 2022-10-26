@extends('layouts/contentNavbarLayout')

@section('title', 'Wiggler - Sterilizations')

@section('content')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Sterilizations /</span> List Sterilizations

  <a href="{{ route('sterilization.create') }}">
    <button type="button" class="btn btn-success" style="float: right;">Add sterilization</button>
  </a>
</h4>

<div class="card">
  <h5 class="card-header">Sterilizations existing :</h5>
  <div class="table-responsive text-nowrap">
    @if (sizeof($listeSterilizations)== 0)
    <div class="container-xxl container-p-y">
      <div class="misc-wrapper text-center">
        <h2 class="mb-2 mx-2">No record found.</h2>
        <p class="mb-4 mx-2">
          Try adding new sterilizations.
        </p>
        <img src="{{asset('assets/img/illustrations/man-with-laptop-light.png')}}" height="140" alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png" data-app-light-img="illustrations/man-with-laptop-light.png">
      </div>

    </div>
    @else
    <table class="table table-hover">
      <thead>
        <tr>
          <th>Pet</th>
          <th>Veterinarian</th>
          <th>Fee</th>
          <th>Date</th>
          <th>Time</th>
          <th>Remarks</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
        @foreach($listeSterilizations as $sterilization)
        <tr>
          <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>
              @if (empty($sterilization->pet))
              _
              @else
              {{$sterilization->pet->name}}
              @endif
            </strong>
          </td>
          <td>
            @if ($sterilization->veterinarian != null)
            {{$sterilization->veterinarian->name}}
            @else Deleted.
            @endif
          </td>
          <td><span class="badge bg-label-success me-1">{{$sterilization->fee}}&nbsp;<i class="bx bx-dollar-circle me-1"></i>
            </span></td>
          <td>{{ date('d-m-Y', strtotime($sterilization->date))   }}</td>
          <td>{{ date('H:m', strtotime($sterilization->date))   }}</td>
          <td>{{$sterilization->remarks}}</td>

          <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ route('sterilization.show',$sterilization->id) }}"><i class="bx bx-detail me-1"></i> Show</a>
                <a class="dropdown-item" href="{{ route('sterilization.edit',$sterilization->id) }}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                <form action="{{ route('sterilization.destroy',$sterilization->id) }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger"><i class="bx bx-trash-alt me-1"></i> Delete</button>
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