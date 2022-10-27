@extends('layouts/contentNavbarLayout')

@section('title', 'Wiggles - Edit Reward')

@section('content')
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Reward/</span> Edit</h4>

<div class="card">
  <div class="card-body">
    <form method="POST" action="{{ route('rewards.update', $reward->id) }}">
      @csrf
      @method('PUT')
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ $reward->name }}">
      </div>
      <div class="mb-3">
        <label for="quantity" class="form-label">Quantity</label>
        <input type="text" class="form-control" id="quantity" name="quantity" value="{{ $reward->quantity }}">
      </div>
      <button type="submit" class="btn btn-outline-primary">Submit</button>
    </form>
  </div>
</div>
<a href="{{ route('rewards.index') }}">
  <button type="button" class="btn btn-outline-secondary" style="float: left;">Go BACK</button>
</a>

@endsection
