@extends('layouts/contentNavbarLayout')

@section('title', 'Wiggles - Add enclos')

@section('content')

<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Enclos/</span> Create</h4>

<div class="card">
  <div class="card-body">
    <form method="POST" action="{{ route('enclos.store') }}">
      @csrf
      @method('POST')
      <div class="mb-3">
        <label for="race" class="form-label">Race</label>
        <input type="text" class="form-control" id="race" name="race" value="">
      </div>
      <div class="mb-3">
        <label for="capacity" class="form-label">Capacity</label>
        <input type="text" class="form-control" id="capacity" name="capacity" value="">
      </div>
      <div class="row mb-3">
        <label class="col-sm-2 form-label" for="local_id">Which Local does this belong to :</label>
        <div class="col-sm-10">
        <select class="form-select" id="local_id" name="local_id">
            @foreach($locals as $local)
                <option value="{{ $local->id }}">
                  {{ $local->name }}
                </option>
            @endforeach
        </select>
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>
<a href="{{ route('enclos.index') }}">
  <button type="button" class="btn btn-secondary" style="float: left;">Go BACK</button>
</a>
@endsection
