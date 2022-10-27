@extends('layouts/contentNavbarLayout')

@section('title', 'Wiggles - Add association')

@section('content')

<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Reward/</span> Create</h4>

<div class="card">
  <div class="card-body">
    <form method="POST" action="{{ route('rewards.store') }}">
      @csrf
      @method('POST')
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" value="">
      </div>
      <div class="row mb-3">
        <label class="form-label" for="basic-icon-default-message"></label>
        <div class="col-sm-10">
          @error('name')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
      </div>
      <div class="mb-3">
        <label for="quantity" class="form-label">Quantity</label>
        <input type="text" class="form-control" id="quantity" name="quantity" value="">
      </div>
      <div class="row mb-3">
        <label class="form-label" for="basic-icon-default-message"></label>
        <div class="col-sm-10 ">
          @error('quantity')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
      </div>
      <div class="mb-3">
        <label for="type" class="form-label">
          Type
        </label>
        <select class="form-select" aria-label="Default select example" id="typeReward" name="typeReward">
          @foreach ($types as $type)
          <option value="{{ $type->id }}">{{ $type->type }}</option>
          @endforeach
        </select>
      </div>
      <button type="submit" class="btn btn-outline-primary">Submit</button>
    </form>
  </div>
</div>
<a href="{{ route('rewards.index') }}">
  <button type="button" class="btn btn-outline-secondary" style="float: left;">Go BACK</button>
</a>
@endsection
