@php
$isMenu = false;
$navbarHideToggle = false;
@endphp

@extends('layouts/contentNavbarLayout')

@section('title', 'Wiggler')

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/masonry/masonry.js')}}"></script>
@endsection

@section('content')
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Wiggler /</span> HomePage</h4>



<!-- Grid Card -->
<div class="row row-cols-1 row-cols-md-3 g-4 mb-5">
  <div class="col">
    <div class="card h-100">
      <img class="card-img-top" src="{{asset('assets/img/wiggler/AssociationFront2.jpg')}}" alt="Card image cap" />
      <div class="card-body">
        <h5 class="card-title">
        <a href="frontoffice/association"> 
          <button type="button" class="btn btn-success">Associations</button>
        </a> 

        </h5>
        <p class="card-text"> Associations working with the aim of saving, caring for, helping and rehabilitating animals of different species in need,
        leading efforts to elevate the global pet care community and promote responsible pet ownership.
        </p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img class="card-img-top" src="{{asset('assets/img/wiggler/EventFront.jpg')}}" alt="Card image cap" />
      <div class="card-body">
      <a href="frontoffice/event"> 
        <h5 class="card-title"><button type="button" class="btn btn-danger">Events</button></h5>
      </a>
        <p class="card-text">Planned public or social occasion to raise awareness, to help animals... organized by associations</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img class="card-img-top" src="{{asset('assets/img/vaccination/vaccines.jpg')}}" alt="Card image cap" />
      <div class="card-body">
      <a href="frontoffice/vaccine"> 
        <h5 class="card-title"><button type="button" class="btn btn-secondary">Vaccines</button></h5>
      </a>
        <p class="card-text">See all the vaccines available</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img class="card-img-top" src="{{asset('assets/img/elements/18.jpg')}}" alt="Card image cap" />
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img class="card-img-top" src="{{asset('assets/img/elements/19.jpg')}}" alt="Card image cap" />
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img class="card-img-top" src="{{asset('assets/img/elements/20.jpg')}}" alt="Card image cap" />
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
</div>

@endsection
