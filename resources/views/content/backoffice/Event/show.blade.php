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
  <span class="text-muted fw-light">Event /</span> Show
       
      <a href="{{ route('event.edit',$event->id) }}"> 
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
            <h5 class="card-title text-primary">{{$event->name}}</h5>
            <p class="mb-4"><span class="fw-bold">Description : </span>{{$event->description}}</p>
            <p class="mb-4"></p>
            <span class="badge bg-label-success me-1">Start date : {{$event->dateDeb}}</span>
            
            <span class="badge bg-label-danger me-1">End date : {{$event->dateFin}}</span>
          </div>
        </div>
        <div class="col-sm-5 text-center text-sm-left">
          <div class="card-body pb-0 px-0 px-md-4">
            <img src="{{asset('assets/img/wiggler/event.png')}}" height="150" alt="Event">
          </div>
        </div>
    </div>
</div> 
<p></p>
<a href="{{ route('association.index') }}"> 
  <button type="button" class="btn btn-success" style="float: right;"> Go to ASSOCIATIONS</button>
</a>
<a href="{{ route('event.index') }}"> 
  <button type="button" class="btn btn-secondary" style="float: left;">Go BACK</button>
</a>
@endsection
