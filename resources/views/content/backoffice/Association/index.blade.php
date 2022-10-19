@extends('layouts/contentNavbarLayout')

@section('title', 'Wiggler - Associations')

@section('content')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Association /</span> List Associations

  <a href="{{ route('association.create') }}"> 
  <button type="button" class="btn btn-success" style="float: right;">Add association</button>
</a>
</h4>

<div class="card">
  <h5 class="card-header">Associations existing :</h5>
  <div class="table-responsive text-nowrap">
    <table class="table table-hover">
      <thead>
        <tr>
          <th>Nom</th>
          <th>Description</th>
          <th>RIB</th>
                       
          <th>Action</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
      @foreach($listeassociations as $association)
      <tr>
          <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$association->name}}</strong></td>
          <td>{{$association->description}}</td>
          <td><span class="badge bg-label-success me-1">{{$association->rib}}</span></td>

          <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ route('association.show',$association->id) }}"><i class="bx bx-edit-alt me-1"></i> Show</a>
                <a class="dropdown-item" href="{{ route('association.edit',$association->id) }}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                <form action="{{ route('association.destroy',$association->id) }}" method="POST">
                @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger">Delete association</button>
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
