@extends('layouts/contentNavbarLayout')

@section('title', 'Wiggler - Add Type vaccine')

@section('content')
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Type Vaccine/</span> Add</h4>
<div class="row">
<div class="col-xxl">
    <div class="card mb-4">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="mb-0">Add type vaccine</h5> <small class="text-muted float-end">Please fill the inputs below</small>
      </div>
      <div class="card-body">
        <form method="post" action="{{ route('typevaccines.store') }}">
        @csrf
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Type</label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-company2" class="input-group-text"><i class="bx bx-rename"></i></span>
                <input type="text" class="form-control" placeholder="Vaccine type" name="type" id="type"/>
              </div>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 form-label" for="basic-icon-default-message"></label>
            <div class="col-sm-10">
              @error('name')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 form-label" for="basic-icon-default-message">Duration</label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-message2" class="input-group-text"><i class="bx bx-comment"></i></span>
                <input type="number" class="form-control" placeholder="Duration in Days" name="duration" id="duration"/>              </div>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 form-label" for="basic-icon-default-message"></label>
            <div class="col-sm-10">
              @error('duration')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>

          <div class="row justify-content-end">
            <div class="col-sm-10">
              <button type="submit" class="btn btn-outline-success">Add type vaccine</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<p></p><p></p><p></p>
<a href="{{ route('typevaccines.index') }}">
  <button type="button" class="btn btn-outline-secondary" style="float: left;">Type Vaccines</button>
</a>

@endsection
