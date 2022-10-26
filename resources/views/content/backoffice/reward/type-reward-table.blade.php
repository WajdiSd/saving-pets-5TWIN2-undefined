@extends('layouts/contentNavbarLayout')

@section('title', 'Tables - Basic Tables')

@section('content')

<!-- Bootstrap Table with Header - Light -->
<div class="card">
  <h5 class="card-header">Type Rewards</h5>
  <div class="table-responsive text-nowrap">
    <table class="table">
      <thead class="table-light">
        <tr>
          <th scope="col">Type</th>
          <th scope="col">Description</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
        @foreach ($typeRewards as $typeReward)
        <tr>
          <td>{{ $typeReward->type }}</td>
          <td>{{ $typeReward->description }}</td>
          <td>
            <a href="{{ route('typerewards.edit',$typeReward->id) }}" class="btn btn-primary">Edit</a>
            <form action="{{ route('typerewards.destroy',$typeReward->id) }}" method="POST" class="d-inline">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger">Delete</button>
            </form>
          </td>
          @endforeach

      </tbody>
    </table>
  </div>
</div>
<!-- Bootstrap Table with Header - Light -->

@endsection
