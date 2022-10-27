@extends('layouts/contentNavbarLayout')

@section('title', 'Wiggles - Edit association')

@section('content')
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Association/</span> Edit</h4>
<div class="row">
<div class="col-xxl">
    <div class="card mb-4">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="mb-0">Edit association</h5> <small class="text-muted float-end">Please check all the inputs below</small>
      </div>
      <div class="card-body">
        <form  method="POST" action="{{ route('association.update',$association) }}">
        @csrf
        @method('PATCH')
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Name</label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-company2" class="input-group-text"><i class="bx bx-rename"></i></span>
                <input type="text" class="form-control" value="{{ old('name', $association->name) }}" name="name" id="name"/>
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
            <label class="col-sm-2 form-label" for="basic-icon-default-phone">RIB</label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-phone2" class="input-group-text"><i class="bx bx-credit-card-front"></i></span>
                <input type="text" class="form-control" value="{{ old('rib', $association->rib) }}" name="rib" id="rib"/>
              </div>
            </div>
          </div>
          <div class="row mb-3">
          <label class="col-sm-2 form-label" for="basic-icon-default-message"></label>
              <div class="col-sm-10">
              @error('rib')
                      <div class="alert alert-danger">{{ $message }}</div>
              @enderror
              </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 form-label" for="basic-icon-default-message">Description</label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-message2" class="input-group-text"><i class="bx bx-comment"></i></span>
                <input class="form-control" value="{{ old('description', $association->description) }}" name="description" id="description"></input>
              </div>
            </div>
          </div>
          <div class="row mb-3">
          <label class="col-sm-2 form-label" for="basic-icon-default-message"></label>
              <div class="col-sm-10">
              @error('description')
                      <div class="alert alert-danger">{{ $message }}</div>
              @enderror
              </div>
          </div>
          <div class="row justify-content-end">
            <div class="col-sm-10">
              <button type="submit" class="btn btn-outline-success">Edit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<p></p><p></p><p></p>
<a href="{{ route('association.index') }}">
  <button type="button" class="btn btn-outline-secondary" style="float: left;">Go to ASSOCIATIONS</button>
</a>

@endsection
