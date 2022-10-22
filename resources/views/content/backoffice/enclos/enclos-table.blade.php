@extends('layouts/contentNavbarLayout')

@section('title', 'Tables - Basic Tables')

@section('content')

<!-- Bootstrap Table with Header - Light -->
<div class="card">
  <h5 class="card-header">Enclos</h5>
  <a href="{{ route('enclos.create') }}">
  <button type="button" class="btn btn-success" style="float: right;">Add enclos</button>
</a>
  <div class="table-responsive text-nowrap">
    <table class="table">
      <thead class="table-light">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Capacity</th>
          <th scope="col">Local</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
        @foreach ($enclos as $enclos)
        <tr>
          <th scope="row">{{ $enclos->id }}</th>
          <td>{{ $enclos->name }}</td>
          <td>{{ $enclos->capacity }}</td>
          <td>{{ $enclos->local_id }}</td>
          <td>
            <a href="{{ route('enclos.edit',$enclos->id) }}" class="btn btn-primary">Edit</a>
            <form action="{{ route('enclos.destroy',$enclos->id) }}" method="POST" class="d-inline">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger">Delete</button>
            </form>
          </td>
        </tr>
        @endforeach

      </tbody>
    </table>
  </div>
</div>
<!-- Bootstrap Table with Header - Light -->

@endsection
