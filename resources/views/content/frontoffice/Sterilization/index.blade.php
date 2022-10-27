@extends('content/frontoffice/home')
@section('title', 'Wiggler - Veterinarians')

@section('content')
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Wiggler / HomePage </span> / Veterinarian</h4>


<div class="row row-cols-1 row-cols-md-3 g-4 mb-5">
  @foreach($listeVetos as $veto)
  <div class="col">
    <div class="card">
      <img class="card-img-top" src="{{asset('assets/img/wiggler/veterinarian.jpg')}}" alt="Card image cap" />
      <div class="card-body">
        <h5 class="card-title">{{ $veto->name }}</h5>
        <p class="card-text">{{ $veto->address }}</p>
        <p class="card-text"><small class="text-muted">{{ sizeof($veto->sterilizations) }} sterilization(s)</small></p>
      </div>
    </div>
    <div class="pt-4">
      <div class="card bg-primary text-white text-center p-3">
        <figure class="mb-0">
          <blockquote class="blockquote">
            <a class="text-white" href="mailto:{{ $veto->email }}">{{ $veto->email }}</a>
          </blockquote>
          <figcaption class="blockquote-footer mb-0 text-white">
            <cite title="{{ $veto->phone }}"><a class="text-white" href="tel:{{ $veto->phone }}">{{ $veto->phone }}</a></cite>
          </figcaption>
        </figure>
      </div>
    </div>
  </div>
  @endforeach


</div>
@endsection