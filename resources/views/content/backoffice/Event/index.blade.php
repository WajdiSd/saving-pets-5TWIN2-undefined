@extends('layouts/contentNavbarLayout')

@section('title', 'Wiggler - Events')

@section('content')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Events /</span> List Events

  <a href="{{ route('association.create') }}"> 
  <button type="button" class="btn btn-success" style="float: right;">Add event</button>
</a>
</h4>

<div class="card">
  <h5 class="card-header">Events existing :</h5>
  <div class="table-responsive text-nowrap">
    <table class="table table-hover">
      <thead>
        <tr>
        <th>Name</th>
        <th>Description</th>
        <th>Start date</th>
        <th>End date</th>
        <th>ASSOCIATION</th>
          
        <th>Action</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
      @foreach($listevents as $event)
      <tr>
          <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$event->name}}</strong></td>
          <td>{{$event->description}}</td>
          <td><span class="badge bg-label-success me-1">{{$event->dateDeb}}</span></td>
          <td><span class="badge bg-label-danger me-1">{{$event->dateFin}}</span></td>
          <td> 
            <a href="{{ route('association.show',$event->association_id) }}"><i class="bx bx-link-external me-1"></i>
                {{ \App\Models\Association::where(['id' => $event->association_id])->pluck('name')->first() }}
            </a>
          </td>

          <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ route('event.show',$event->id) }}"><i class="bx bx-edit-alt me-1"></i> Show</a>
                <a class="dropdown-item" href="{{ route('event.edit',$event->id) }}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                <form action="{{ route('event.destroy',$event->id) }}" method="POST">
                @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger">Delete event</button>
                </form>
              </div>
            </div>
          </td>
        </tr>
      @endforeach
      </tbody>
    </table>
  </div>
</div>

@endsection
