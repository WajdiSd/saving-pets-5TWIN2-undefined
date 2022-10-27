@extends('layouts/contentNavbarLayout')

@section('title', 'Wiggler - Sterilization')


@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/apex-charts/apex-charts.css')}}">
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/dashboards-analytics.js')}}"></script>
@endsection


@section('content')

<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Event /</span> Show

  <a href="{{ route('sterilization.edit',$sterilization->id) }}">
    <button type="button" class="btn btn-outline-primary" style="float: right;">EDIT </button>
  </a>

</h4>

<div class="row">
  <p></p>
  <div class="">
    <div class="card">
      <div class="d-flex align-items-end row">
        <div class="col-sm-7">
          <div class="card-body">
            <h5 class="card-title text-primary">{{ date('d-m-Y H:m', strtotime($sterilization->date)) }}</h5>
            <p class="mb-4"><span class="fw-bold">Pet : </span>
              @if (empty($sterilization->pet))
              _
              @else
              {{$sterilization->pet->name}}
              @endif
            </p>
            <p class="mb-4"></p>
            <p class="mb-4"><span class="fw-bold">Veterinarian : </span>{{$sterilization->veterinarian->name}}</p>
            <p class="mb-4"></p>
            <p class="mb-4"><span class="fw-bold">Fee : </span>{{$sterilization->fee}} <i class="bx bx-dollar-circle me-1"></i></p>
            <p class="mb-4"></p>
            <p class="mb-4"><span class="fw-bold">Remarks : </span>{{$sterilization->remarks}}</p>
            <p class="mb-4"></p>

          </div>
        </div>
        <div class="col-sm-5 text-center text-sm-left">
          <div class="card-body pb-10 px-0 px-md-4">
            <img src="{{asset('assets/img/illustrations/paw.jpg')}}" height="140" alt="View Badge User" data-app-dark-img="illustrations/paw.jpg" data-app-light-img="illustrations/paw.jpg">
          </div>
        </div>
      </div>
    </div>
    <p></p>

    <a href="{{ route('sterilization.index') }}">
      <button type="button" class="btn btn-outline-secondary" style="float: left;">Back to list</button>
    </a>
    @endsection