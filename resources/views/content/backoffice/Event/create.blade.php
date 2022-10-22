@extends('layouts/contentNavbarLayout')

@section('title', 'Wiggler - Add event')

@section('content')
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Event/</span> Add</h4>
<div class="row">
  <div class="col-xxl">
    <div class="card mb-4">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="mb-0">Add event</h5> <small class="text-muted float-end">Please fill the inputs below</small>
      </div>
      <div class="card-body">
        <form method="post" action="{{ route('event.store') }}">
          @csrf
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Name</label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-company2" class="input-group-text"><i class="bx bx-rename"></i></span>
                <input type="text" class="form-control" placeholder="Event's name" name="name" id="name" />
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
            <label class="col-sm-2 form-label" for="basic-icon-comment">Description</label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-phone2" class="input-group-text"><i class="bx bx-credit-card-front"></i></span>
                <input type="text" class="form-control" placeholder="Event's description" name="description" id="description" />
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
          <div class="row mb-3">
            <label class="col-sm-2 form-label" for="basic-icon-time-five">Start Date</label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-message2" class="input-group-text"><i class="bx bx-comment"></i></span>
                <input type="datetime-local" class="form-control" placeholder="Event's start date" name="dateDeb" id="dateDeb" />
              </div>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 form-label" for="basic-icon-default-message"></label>
            <div class="col-sm-10">
              @error('dateDeb')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 form-label" for="basic-icon-time-five">End Date</label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-message2" class="input-group-text"><i class="bx bx-comment"></i></span>
                <input type="datetime-local" class="form-control" placeholder="Event's end date" name="dateFin" id="dateFin" />
              </div>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 form-label" for="basic-icon-default-message"></label>
            <div class="col-sm-10">
              @error('dateFin')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 form-label" for="association_id">Organised by association :</label>
            <div class="col-sm-10">
              <select class="form-select" id="association_id" name="association_id">
                <option selected="selected">This event is organised by the association : </option>
                @foreach($associations as $association)
                <option value="{{ $association->id }}">
                  {{ $association->name }}
                </option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="row justify-content-end">
            <div class="col-sm-10">
              <button type="submit" class="btn btn-success">Add event</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<p></p>
<a href="{{ route('event.index') }}">
  <button type="button" class="btn btn-secondary" style="float: left;">Go to EVENTS</button>
</a>
@endsection