@extends('layouts/contentNavbarLayout')

@section('title', 'Wiggler - New veterinarian')

@section('content')
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Veterinarian/</span> New</h4>
<div class="row">
  <div class="col-xxl">
    <div class="card mb-4">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="mb-0">Add veterinarian</h5> <small class="text-muted float-end">Please fill the inputs below</small>
      </div>
      <div class="card-body">
        <form method="post" action="{{ route('veterinarian.store') }}">
          @csrf
          <div class="row mb-3">
            <label class="col-sm-2 form-label" for="basic-icon-comment">Name :</label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-phone2" class="input-group-text"><i class="bx bx-user"></i></span>
                <input type="text" class="form-control" placeholder="Veterinarian's name" name="name" id="name" />
              </div>
            </div>
          </div>

          <div class="row mb-3">
            <label class="col-sm-2 form-label" for="basic-icon-comment">Address :</label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-phone2" class="input-group-text"><i class="bx bx-pin"></i></span>
                <input type="text" class="form-control" placeholder="Veterinarian's address" name="address" id="address" />
              </div>
            </div>
          </div>

          <div class="row mb-3">
            <label class="col-sm-2 form-label" for="basic-icon-comment">Phone :</label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-phone2" class="input-group-text"><i class="bx bx-phone"></i></span>
                <input type="tel" class="form-control" placeholder="Veterinarian's phone" name="phone" id="phone" />
              </div>
            </div>
          </div>

          <div class="row mb-3">
            <label class="col-sm-2 form-label" for="basic-icon-comment">Email :</label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-phone2" class="input-group-text"><i class="bx bx-at"></i></span>
                <input type="email" class="form-control" placeholder="Veterinarian's email" name="email" id="email" />
              </div>
            </div>
          </div>

          <div class="row justify-content-end">
            <div class="col-sm-10">
              <button type="submit" class="btn btn-success">Add veterinarian</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<p></p>
<a href="{{ route('veterinarian.index') }}">
  <button type="button" class="btn btn-secondary" style="float: left;">Back to list</button>
</a>
@endsection