@extends('content/frontoffice/home')
@section('title', 'Wiggler - Locals')

@section('content')
<x-app-layout>
  <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Wiggler / HomePage </span> / Local</h4>


  <div class="row row-cols-1 row-cols-md-3 g-4 mb-5">
    @foreach($listelocal as $local)
  <div class="col">
      <div class="card">
        <img class="card-img-top" src="{{asset('assets/img/local/local.jpg')}}" alt="Card image cap" />
        <div class="card-body">
          <h5 class="card-title">Name : {{ $local->name }}</h5>
          <p class="card-text mb-3">Address : {{ $local->address }}</p>
          {{-- if local has enclos --}}
          @if($local->enclos->count() > 0)
            <h6 class="card-subtitle mb-1"><strong>Enclos</strong></h6>
            @foreach($local->enclos as $enclo)
              <span class="badge bg-primary">{{ $enclo->race }}</span>
            @endforeach
          @endif
        </div>
      </div>
    </div>
    @endforeach
  </div>
</x-app-layout>

@endsection