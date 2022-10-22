@extends('content/frontoffice/home')
@section('content')


<a href="/frontoffice">
  <button type="button" class="btn btn-warning" style="float: right;">Home Page</button>
</a>
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Wiggler / HomePage </span> / Reward</h4>
<h5 class="pb-1 mb-4">Rewards</h5>
<div class="row mb-5">
  @foreach($rewards as $reward)
  <div class="col-md">
    <div class="card mb-3">
      <div class="col-md-4">
        <img class="card-img card-img-left" src="{{asset('assets/img/wiggler/reward.png')}}" alt="Card image" />
      </div>
      <div class="card-body">
        <h5 class="card-title">{{$reward->name}}</h5>
      </div>
    </div>
  </div>
  @endforeach
</div>

@endsection
