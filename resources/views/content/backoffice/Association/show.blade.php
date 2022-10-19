@extends('layouts/contentNavbarLayout')

@section('title', 'Wiggler - Association')


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
  <span class="text-muted fw-light">Association /</span> Show
       
      <a href="{{ route('association.edit',$association->id) }}"> 
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
            <h5 class="card-title text-primary">{{$association->name}}</h5>
            <p class="mb-4"><span class="fw-bold">Description : </span>{{$association->description}}</p>
            <p class="mb-4"></p>
            <span class="badge bg-label-success me-1">RIB : {{$association->rib}}</span>
          </div>
        </div>
        <div class="col-sm-5 text-center text-sm-left">
          <div class="card-body pb-0 px-0 px-md-4">
            <img src="{{asset('assets/img/wiggler/association.png')}}" height="150" alt="Association" data-app-dark-img="illustrations/man-with-laptop-dark.png" data-app-light-img="illustrations/man-with-laptop-light.png">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-4 col-md-4 order-1">
    <div class="row">
      
      <div class="col-12 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between flex-sm-row flex-column gap-3">
              <div class="d-flex flex-sm-column flex-row align-items-start justify-content-between">
                <div class="card-title">
                  <span class="badge bg-label-warning rounded-pill">Events </span>
                </div>
                <div class="mt-sm-auto">
                  <h3 class="mb-0">{{$pourcentageEvents}} %</h3>
                  <small class="text-success text-nowrap fw-semibold"> of the events</small>


                </div>
              </div>
              <div id="profileReportChart"></div>
            </div>
            <small class="text-dark text-nowrap fw-semibold"> Are organized by this association.</small>
            <p></p>
          </div>
        </div>
        
      </div>
    </div>
  </div>
</div>
<p></p><p></p><p></p>
<a href="{{ route('association.index') }}"> 
  <button type="button" class="btn btn-secondary" style="float: left;">Go BACK</button>
</a>

@endsection
