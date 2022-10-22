@extends('layouts/contentNavbarLayout')

@section('title', 'Wiggler - Veterinarian')


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
  <span class="text-muted fw-light">Veterinarian /</span> Show

  <a href="{{ route('veterinarian.edit',$veterinarian->id) }}">
    <button type="button" class="btn btn-success" style="float: right;">EDIT </button>
  </a>

</h4>

<div class="row">
  <p></p>
  <div class="">
    <div class="card">
      <div class="d-flex align-items-end row">
        <div class="col-sm-7">
          <div class="card-body">
            <h5 class="card-title text-primary">{{ $veterinarian->name}}</h5>
            <p class="mb-4"><span class="fw-bold">Address : </span>{{$veterinarian->address}}</p>
            <p class="mb-4"></p>
            <p class="mb-4"><span class="fw-bold">Phone : </span>{{$veterinarian->phone}}</p>
            <p class="mb-4"></p>
            <p class="mb-4"><span class="fw-bold">Email : </span>{{$veterinarian->email}}</p>
            <p class="mb-4"></p>

          </div>
        </div>
        <div class="col-sm-5 text-center text-sm-left">
          <div class="card-body pb-10 px-0 px-md-4">
            <img src="{{asset('assets/img/illustrations/veto.jpg')}}" height="140" alt="View Badge User" data-app-dark-img="illustrations/veto.jpg" data-app-light-img="illustrations/veto.jpg">
          </div>
        </div>
      </div>
    </div>
    <p></p>

    <a href="{{ route('veterinarian.index') }}">
      <button type="button" class="btn btn-secondary" style="float: left;">Back to list</button>
    </a>
    @endsection