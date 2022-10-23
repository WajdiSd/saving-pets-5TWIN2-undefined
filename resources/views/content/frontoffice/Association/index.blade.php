@extends('content/frontoffice/home')
@section('content')

<a href="/frontoffice"> 
          <button type="button" class="btn btn-warning" style="float: right;">Home Page</button>
        </a> 
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Wiggler / HomePage </span> / Association</h4>

<!-- Horizontal -->
<h5 class="pb-1 mb-4">Associations</h5>
<div class="row mb-5">
@foreach($listeassociations as $association)
  <div class="col-md-3">
    <div class="card mb-3">
      <div class="row g-0">
        <div class="col-md-4">
          <img class="card-img card-img-left" src="{{asset('assets/img/wiggler/association.png')}}" alt="Card image" />
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">{{$association->name}}</h5>
            <p class="card-text">
            {{$association->description}}
            </p>
            <span class="badge bg-label-success me-1">{{$association->rib}}</span>          
          </div>
        </div>
      </div>
    </div>
  </div>
  @endforeach
</div>
<!--/ Horizontal -->
@endsection