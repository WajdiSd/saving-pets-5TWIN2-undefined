@extends('layouts/contentNavbarLayout')

@section('title', 'Tables - Basic Tables')

@section('content')

<!-- Bootstrap Table with Header - Light -->
<div class="card">
  <h5 class="card-header">Rewards</h5>
  <a href="{{ route('rewards.create') }}">
  <button type="button" class="btn btn-success" style="float: right;">Add reward</button>
</a>
  <div class="table-responsive text-nowrap">
    <table class="table">
      <thead class="table-light">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Quantity</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
        @foreach ($rewards as $reward)
        <tr>
          <td>{{ $reward->name }}</td>
          <td>{{ $reward->quantity }}</td>
          <td>
            <a href="{{ route('rewards.edit',$reward->id) }}" class="btn btn-primary">Edit</a>
            <form action="{{ route('rewards.destroy',$reward->id) }}" method="POST" class="d-inline">
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
