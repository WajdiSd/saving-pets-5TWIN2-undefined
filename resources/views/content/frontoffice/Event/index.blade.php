@extends('content/frontoffice/home')
@section('content')
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Wiggler / HomePage </span> / Event</h4>

<!-- Horizontal -->
<h5 class="pb-1 mb-4">Events</h5>
<div class="row mb-5">
  @foreach($listevents as $event)
  <div class="col-md-3">
    <div class="card mb-3">
      <div class="row g-0">
        <div class="col-md-4">
          <img class="card-img card-img-left" src="{{asset('assets/img/wiggler/Event.png')}}" alt="Card image" />
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">{{$event->name}}</h5>
            <p class="card-text">
              {{$event->description}}
            </p>
            <span class="badge bg-label-success me-1">{{$event->dateDeb}}</span>
            <span class="badge bg-label-danger me-1">{{$event->dateFin}}</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endforeach
</div>
<!--/ Horizontal -->
@endsection