@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center ">
        @include('sidebar')
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                  {{ __('Statuses') }}
                  <a href="{{ route('status.create') }}" class="btn btn-primary float-right">Create</a>
                </div>

                <div class="card-body">
                  <table class="table table-bordered border-muted">
                     <thead>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Action</th>
                     </thead>
                     <tbody>
                        @foreach ($statuses as $status)
                           <tr>
                              <td>{{$status->id}}</td>
                              <td>{{$status->name}}</td>
                              <td>
                                 <div class="d-flex gap-2 justify-content-center">
                                    <a href="{{ route('status.edit', $status->id) }}" class="btn btn-secondary "><i class="fa-regular fa-pen-to-square"></i></a>
                                    <form action="{{ route('status.destroy', $status->id) }}" method="post">
                                       @csrf
                                       @method('DELETE')
                                       <button type="submit" class="btn btn-danger">
                                          <i class="fa-regular fa-trash-can"></i>
                                       </button>
                                    </form>
                                 </div>
                              </td>
                           </tr>
                        @endforeach
                     </tbody>
                  </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
