@extends('layouts/contentNavbarLayout')

@section('title', 'Wiggler - Events')

@section('content')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Events /</span> List Events

  <a href="{{ route('event.create') }}">
  <button type="button" class="btn btn-success" style="float: right;">Add event</button>
</a>
</h4>

<div class="row">
  <div class="col-lg-8 mb-4 order-0">
    <div class="card">
      <div class="d-flex align-items-end row">
        <div class="col-sm-7">
          <div class="card-body">
            <h5 class="card-title text-primary"> The MOST active association ! 🎉</h5>
            <p class="mb-4">The association <span class="fw-bold">" {{$associationMAX}} "</span>
                  has organized the majority of the events below.</p>

            <a href="{{ route('association.index') }}" class="btn btn-sm btn-outline-primary">View Associations</a>
          </div>
        </div>
        <div class="col-sm-5 text-center text-sm-left">
          <div class="card-body pb-0 px-0 px-md-4">
            <img src="{{asset('assets/img/wiggler/AssociationIndex.jpg')}}" height="140" alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png" data-app-light-img="illustrations/man-with-laptop-light.png">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-4 col-md-4 order-1">
    <div class="row">
      <div class="col-lg-6 col-md-12 col-6 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="card-title d-flex align-items-start justify-content-between">
              <div class="avatar flex-shrink-0">
                <img src="{{asset('assets/img/icons/unicons/cc-success.png')}}" alt="chart success" class="rounded">
              </div>
            </div>
            <span class="fw-semibold d-block mb-1"> Organising</span>
            <h3 class="card-title mb-2">{{$nbreEventMax}}</h3>
            <small class="text-success fw-semibold">events</small>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-12 col-6 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="card-title d-flex align-items-start justify-content-between">
              <div class="avatar flex-shrink-0">
                <img src="{{asset('assets/img/icons/unicons/cc-warning.png')}}" alt="Credit Card" class="rounded">
              </div>
            </div>
            <span class="fw-semibold d-block mb-1">Within a total of </span>
            <h3 class="card-title text-nowrap mb-1">{{$totalAssociation}}</h3>
            <small class="text-success fw-semibold"> associations</small>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


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
          @if (empty($event->association_id))       
          <a href="{{ route('event.edit',$event->id) }}">
          <font color="red"> <i class="bx bx-no-entry me-1"></i>
            None,Add Association </font>
            </a>
          @else   
            <a href="{{ route('association.show',$event->association_id) }}"><i class="bx bx-link-external me-1"></i>
                {{ \App\Models\Association::where(['id' => $event->association_id])->pluck('name')->first() }}
            </a>
          @endif
          </td>

          <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ route('event.show',$event->id) }}"><i class="bx bx-detail me-1"></i> Show</a>
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
