@extends('layouts/contentNavbarLayout')

@section('title', 'Wiggler - Type Vaccine')


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
  <span class="text-muted fw-light">Type Vaccine /</span> Show

      <a href="{{ route('typevaccines.edit',$typevaccine->id) }}">
          <button type="button" class="btn btn-success" style="float: right;">EDIT </button>
      </a>

</h4>

<div class="row">
<p></p>
  <div class="col-lg-8 mb-4 order-0">
    <div class="card">
      <div class="d-flex align-items-end row">
        <div class="col-sm-7">
          <div class="card-body">
            <h5 class="card-title text-primary">Type : {{$typevaccine->type}}</h5>
            <p class="mb-4"><span class="fw-bold">Duration : </span>{{$typevaccine->duration}}</p>
            <p class="mb-4"></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-4 col-md-4 order-1">
    <div class="row">

  </div>
</div>
<p></p><p></p><p></p>
<a href="{{ route('vaccines.index') }}">
  <button type="button" class="btn btn-secondary" style="float: right;"> Go to Vaccines</button>
</a>
<a href="{{ route('typevaccines.index') }}">
  <button type="button" class="btn btn-secondary" style="float: left;">Go to Type Vaccines</button>
</a>

@endsection
