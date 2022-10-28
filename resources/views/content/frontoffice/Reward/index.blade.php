@extends('content/frontoffice/home')
@section('content')

<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Wiggler / HomePage </span> / Reward</h4>
<h5 class="pb-1 mb-4">Rewards</h5>
<div class="row row-cols-1 row-cols-md-3 g-4 mb-5">
  @foreach($rewards as $reward)
  <div class="col-md">
    <div class="card mb-3">
      <img class="card-img card-img-left" src="{{asset('assets/img/wiggler/reward.png')}}" alt="Card image" />
      <div class="card-body">
        <h5 class="card-title">{{$reward->name}}</h5>
      </div>
    </div>
  </div>
  @endforeach
</div>
@endsection
