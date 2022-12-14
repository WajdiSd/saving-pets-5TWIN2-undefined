@extends('layouts/contentNavbarLayout')

@section('title', 'Wiggles - Add local')

@section('content')

<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Local/</span> Create</h4>

<div class="card">
  <div class="card-body">
    <form method="POST" action="{{ route('locals.store') }}">
      @csrf
      @method('POST')
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" value="">
      </div>
          <div class="mb-3">
              @error('name')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
          </div>
      <div class="mb-3">
        <label for="address" class="form-label">Address</label>
        <input type="text" class="form-control" id="address" name="address" value="">
      </div>
          <div class="mb-3">
              @error('address')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
          </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="check" id="status" name="status" checked>
        <label class="form-check-label" for="status">
          Is Active
        </label>
      </div>
          <div class="mb-3">
              @error('status')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
          </div>
      <button type="submit" class="btn btn-outline-primary">Submit</button>
    </form>
  </div>
</div>
<a href="{{ route('locals.index') }}">
  <button type="button" class="btn btn-outline-secondary" style="float: left;">Go BACK</button>
</a>
@endsection
