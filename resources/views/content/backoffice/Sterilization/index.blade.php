@extends('layouts/contentNavbarLayout')

@section('title', 'Wiggler - Sterilizations')

@section('content')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Sterilizations /</span> List Sterilizations
</h4>

<div class="row">
  <div class="col-lg-8 mb-4 order-0">
    <div class="card">
      <div class="d-flex align-items-end row">
        <div class="col-sm-7">
          <div class="card-body">
            <h5 class="card-title text-primary"> Welcome {{ Auth::user()->name }}</h5>
            <p class="mb-4">Here you can <span class="fw-bold">create, update and delete</span> all <span class="fw-bold">sterilization</span> records.</p>

            <a href="{{ route('sterilization.create') }}" class="btn btn-outline-primary">Add sterilization</a>
          </div>
        </div>
        <div class="col-sm-5 text-center text-sm-left">
          <div class="card-body pb-0 px-0 px-md-4">
            <img src="{{asset('assets/img/illustrations/man-with-laptop-light.png')}}" height="140" alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png" data-app-light-img="illustrations/man-with-laptop-light.png">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-4 col-md-4 order-1">
    <div class="row d-flex align-items-center justify-content-center">
      <div class="col-lg-6 col-md-12 col-6 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="card-title d-flex align-items-center justify-content-center">
              <div class="avatar flex-shrink-0">
                <img src="{{asset('assets/img/icons/unicons/chart-success.png')}}" alt="chart success" class="rounded">
              </div>
            </div>
            <span class="fw-semibold d-block mb-1">{{$sterNumber}} out of {{$nonSterNumber}} pets sterialized </span>
            <small class="text-success fw-semibold"><i class='bx bx-up-arrow-alt'></i> {{round($percentageSter, 2)}}%</small>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

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
                  <button type="submit" class="btn btn-link"><i class="bx bx-trash-alt me-1"></i> Delete</button>
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