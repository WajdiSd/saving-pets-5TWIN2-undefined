@extends('layouts/contentNavbarLayout')

@section('title', 'Wiggler - Add association')

@section('content')
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Association/</span> Add</h4>
<div class="row">
<div class="col-xxl">
    <div class="card mb-4">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="mb-0">Add association</h5> <small class="text-muted float-end">Please fill the inputs below</small>
      </div>
      <div class="card-body">
        <form method="post" action="{{ route('association.store') }}">
        @csrf
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Name</label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-company2" class="input-group-text"><i class="bx bx-rename"></i></span>
                <input type="text" class="form-control" placeholder="Association's name" name="name" id="name"/> 
              </div>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 form-label" for="basic-icon-default-phone">RIB</label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-phone2" class="input-group-text"><i class="bx bx-credit-card-front"></i></span>
                <input type="text" class="form-control" placeholder="Association's RIB : XXXXXXXXXXXXXXXXXXXX" name="rib" id="rib"/>
              </div>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 form-label" for="basic-icon-default-message">Description</label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-message2" class="input-group-text"><i class="bx bx-comment"></i></span>
                <textarea class="form-control" placeholder="Association's Description" name="description" id="description"></textarea>
              </div>
            </div>
          </div>
          <div class="row justify-content-end">
            <div class="col-sm-10">
              <button type="submit" class="btn btn-success">Add association</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<p></p><p></p><p></p>
<a href="{{ route('association.index') }}"> 
  <button type="button" class="btn btn-secondary" style="float: left;">Go to ASSOCIATIONS</button>
</a>

@endsection
