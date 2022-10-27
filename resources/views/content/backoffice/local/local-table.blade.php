@extends('layouts/contentNavbarLayout')

@section('title', 'Tables - Basic Tables')

@section('content')

<!-- Bootstrap Table with Header - Light -->
<div class="card">
  <h5 class="card-header">Locals</h5>
  <a href="{{ route('locals.create') }}">
  <button type="button" class="btn btn-outline-success" style="float: right;">Add local</button>
</a>
  <div class="table-responsive text-nowrap">
    <table class="table">
      <thead class="table-light">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Address</th>
          <th scope="col">Status</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
        @foreach ($locals as $local)
        <tr>
          <th scope="row">{{ $local->id }}</th>
          <td>{{ $local->name }}</td>
          <td>{{ $local->address }}</td>
          <td>{{ $local->status }}</td>
          <td>
            <a href="{{ route('locals.edit',$local->id) }}" class="btn btn-outline-primary">Edit</a>
            <form action="{{ route('locals.destroy',$local->id) }}" method="POST" class="d-inline">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-outline-danger">Delete</button>
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
