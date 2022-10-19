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
          @endforeach

      </tbody>
    </table>
  </div>
</div>
<!-- Bootstrap Table with Header - Light -->

@endsection
