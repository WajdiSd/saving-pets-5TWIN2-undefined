@extends('content/frontoffice/home')
@section('title', 'Wiggler - Veterinarians')

@section('content')
<x-app-layout>
<a href="/frontoffice"> 
          <button type="button" class="btn btn-warning" style="float: right;">Home Page</button>
        </a> 
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Wiggler / HomePage </span> / Vaccine</h4>


<div class="row row-cols-1 row-cols-md-3 g-4 mb-5">
  @foreach($listevaccine as $vacc)
  <div class="col">
    <div class="card">
      <img class="card-img-top" src="{{asset('assets/img/vaccination/vaccines.jpg')}}" alt="Card image cap" />
      <div class="card-body">
        <h5 class="card-title">Name : {{ $vacc->name }}</h5>
        <p class="card-text">Quantity : {{ $vacc->quantity }}</p>
        <p class="card-text"><small class="text-muted">type : {{ $vacc->typevaccine->type }}</small></p>
      </div>
    </div>
  </div>
  @endforeach
</div>
</x-app-layout>

@endsection