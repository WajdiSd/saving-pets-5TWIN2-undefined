@extends('layouts/contentNavbarLayout')

@section('title', 'Wiggler - Edit vaccine')

@section('content')
  <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Vaccine/</span> Edit</h4>
  <div class="row">
    <div class="col-xxl">
      <div class="card mb-4">
        <div class="card-header d-flex align-items-center justify-content-between">
          <h5 class="mb-0">Edit vaccine</h5> <small class="text-muted float-end">Please fill the inputs below</small>
        </div>
        <div class="card-body">
          <form method="post" action="{{ route('vaccines.update',$vaccine) }}">
            @csrf
            @method('PATCH')
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Name</label>
              <div class="col-sm-10">
                <div class="input-group input-group-merge">
                  <span id="basic-icon-default-company2" class="input-group-text"><i class="bx bx-rename"></i></span>
                  <input value="{{ old('name', $vaccine->name) }}" type="text" class="form-control" placeholder="Vaccine name" name="name" id="name"/>
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
              <label for="exampleFormControlSelect1" class="form-label">Validity</label>
              <select class="form-select" id="validty" name="validity"aria-label="Default select example">
                <option value="1" selected>valid</option>
                <option value="0">not valid</option>
              </select>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 form-label" for="basic-icon-default-message"></label>
              <div class="col-sm-10">
                @error('validity')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 form-label" for="basic-icon-default-message">Quantity</label>
              <div class="col-sm-10">
                <div class="input-group input-group-merge">
                  <span id="basic-icon-default-message2" class="input-group-text"><i class="bx bx-comment"></i></span>
                  <input value="{{ old('quantity', $vaccine->quantity) }}" type="number" class="form-control"  name="quantity" id="quantity"/>              </div>
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 form-label" for="basic-icon-default-message"></label>
              <div class="col-sm-10">
                @error('quantity')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
            </div>
            <div class="row mb-3">
              <label for="type_vaccine_id" class="form-label">Type Vaccine</label>
              <select class="form-select" id="type_vaccine_id" aria-label="Default select example" name="type_vaccine_id">
                @foreach($typevaccines as $typevaccine)
                  <option value="{{ $typevaccine->id }}" @selected(old('type_vaccine_id', $vaccine->type_vaccine_id)==$typevaccine->id)>
                  {{ $typevaccine->type }}
                  </option>
                @endforeach
              </select>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 form-label" for="basic-icon-default-message"></label>
              <div class="col-sm-10">
                @error('type_vaccine_id')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
            </div>
            <div class="row justify-content-end">
              <div class="col-sm-10">
                <button type="submit" class="btn btn-outline-success">Update vaccine</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <p></p><p></p><p></p>
  <a href="{{ route('vaccines.index') }}">
    <button type="button" class="btn btn-outline-secondary" style="float: left;">Vaccines</button>
  </a>

@endsection
