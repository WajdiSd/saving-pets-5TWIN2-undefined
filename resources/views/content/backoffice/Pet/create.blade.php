@extends('layouts/contentNavbarLayout')

@section('title', 'Wiggler - Add Pet')

@section('content')
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Pet/</span> Add</h4>
<div class="row">
  <div class="col-xxl">
    <div class="card mb-4">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="mb-0">Add pet</h5> <small class="text-muted float-end">Please fill the inputs below</small>
      </div>
      <div class="card-body">
        <form method="post" action="{{ route('pets.store') }}">
          @csrf
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Name</label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-company2" class="input-group-text"><i class="bx bx-rename"></i></span>
                <input type="text" class="form-control" placeholder="Pet name" name="name" id="name" />
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
            <label class="col-sm-2 form-label" for="basic-icon-default-message">type</label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-message2" class="input-group-text"><i class="bx bx-comment"></i></span>
                <input type="text" class="form-control" name="type" id="type" />
              </div>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 form-label" for="basic-icon-default-message"></label>
            <div class="col-sm-10">
              @error('type')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 form-label" for="basic-icon-default-message">race</label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-message2" class="input-group-text"><i class="bx bx-comment"></i></span>
                <input type="text" class="form-control" name="race" id="race" />
              </div>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 form-label" for="basic-icon-default-message"></label>
            <div class="col-sm-10">
              @error('race')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 form-label" for="basic-icon-default-message">age</label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-message2" class="input-group-text"><i class="bx bx-comment"></i></span>
                <input type="text" class="form-control" name="age" id="age" />
              </div>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 form-label" for="basic-icon-default-message"></label>
            <div class="col-sm-10">
              @error('age')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="row mb-3">
            <label for="typevaccine" class="form-label">Vaccines</label>
            <select multiple class="form-select" id="vaccine_ids[]" aria-label="Default select example" name="vaccine_ids[]">
              @foreach($listvaccines as $vaccine)
              <option value="{{ $vaccine->id }}">
                {{ $vaccine->name }}
              </option>
              @endforeach
            </select>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 form-label" for="basic-icon-default-message"></label>
            <div class="col-sm-10">
              @error('vaccine_ids')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="row justify-content-end">
            <div class="col-sm-10">
              <button type="submit" class="btn btn-outline-success">Add Pet</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<p></p>
<p></p>
<p></p>
<a href="{{ route('pets.index') }}">
  <button type="button" class="btn btn-outline-secondary" style="float: left;">pets</button>
</a>

@endsection