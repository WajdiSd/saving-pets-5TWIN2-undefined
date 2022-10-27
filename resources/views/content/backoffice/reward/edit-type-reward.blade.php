@extends('layouts/contentNavbarLayout')

@section('title', 'Wiggles - Edit Reward')

@section('content')
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Type Reward/</span> Edit</h4>

<div class="card">
  <div class="card-body">
    <form method="POST" action="{{ route('typerewards.update', $typeReward->id) }}">
      @csrf
      @method('PUT')
      <div class="mb-3">
        <label for="type" class="form-label">Type</label>
        <input type="text" class="form-control" id="type" name="type" value="{{ $typeReward->type }}">
      </div>
      <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <input type="text" class="form-control" id="description" name="description" value="{{ $typeReward->description }}">
      </div>
      <button type="submit" class="btn btn-outline-primary">Submit</button>
    </form>
  </div>
</div>


@endsection
