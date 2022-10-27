@extends('layouts/contentNavbarLayout')

@section('title', 'Wiggler - Edit sterilization')

@section('content')
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Sterilization/</span> Edit</h4>
<div class="row">
  <div class="col-xxl">
    <div class="card mb-4">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="mb-0">Edit sterilization</h5> <small class="text-muted float-end">Please fill the inputs below</small>
      </div>
      <div class="card-body">
        <form method="post" action="{{ route('sterilization.update',$sterilization) }}">
          @csrf
          @method('PATCH')
          <div class="row mb-3">
            <label class="col-sm-2 form-label" for="pet_id">Pet name :</label>
            <div class="col-sm-10">
              <select readonly class="form-select" id="pet_id" name="pet_id">
                <option value="{{ $sterilization->pet_id }}">
                  @if (empty($sterilization->pet))
                  _
                  @else
                  {{$sterilization->pet->name}}
                  @endif
                </option>
                @foreach($pets as $pet)
                <option value="{{ $pet->id }}">
                  {{ $pet->name }}
                </option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 form-label" for="basic-icon-default-message"></label>
            <div class="col-sm-10">
              @error('pet_id')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>

          <div class="row mb-3">
            <label class="col-sm-2 form-label" for="veto_id">Veterinarian name :</label>
            <div class="col-sm-10">
              <select class="form-select" id="veto_id" name="veto_id">
                @foreach($veterinarians as $veto)
                <option value="{{ $veto->id }}" @selected(old('veto_id', $sterilization->veto_id)==$veto->id)>
                  {{ $veto->name }}
                </option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 form-label" for="basic-icon-default-message"></label>
            <div class="col-sm-10">
              @error('veto_id')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>

          <div class="row mb-3">
            <label class="col-sm-2 form-label" for="basic-icon-comment">Fee :</label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-phone2" class="input-group-text"><i class="bx bx-money"></i></span>
                <input value="{{ old('fee', $sterilization->fee) }}" type="doubleval" class="form-control" placeholder="Sterilization's free" name="fee" id="fee" />
              </div>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 form-label" for="basic-icon-default-message"></label>
            <div class="col-sm-10">
              @error('fee')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>

          <div class="row mb-3">
            <label class="col-sm-2 form-label" for="basic-icon-time-five">Start Sterilization :</label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-message2" class="input-group-text"><i class="bx bx-calendar-event"></i></span>
                <input type="datetime-local" class="form-control" value="{{ old('date', $sterilization->date) }}" placeholder="Sterilization's scheduled date" name="date" id="date" />
              </div>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 form-label" for="basic-icon-default-message"></label>
            <div class="col-sm-10">
              @error('date')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>

          <div class="row mb-3">
            <label class="col-sm-2 form-label" for="basic-icon-comment">Remarks :</label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-phone2" class="input-group-text"><i class="bx bx-pencil"></i></span>
                <textarea class="form-control" name="remarks" id="remarks">
                {{ old('remarks', $sterilization->remarks) }}
                </textarea>
              </div>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 form-label" for="basic-icon-default-message"></label>
            <div class="col-sm-10">
              @error('remarks')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>

          <div class="row justify-content-end">
            <div class="col-sm-10">
              <button type="submit" class="btn btn-outline-primary">Update</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<p></p>
<a href="{{ route('sterilization.index') }}">
  <button type="button" class="btn btn-outline-secondary" style="float: left;">Back to list</button>
</a>
@endsection