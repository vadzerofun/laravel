@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center ">
        @include('sidebar')
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                  {{ __('Client') }}
                  <a href="{{ route('client.create') }}" class="btn btn-primary float-right">Create</a>
                </div>

                <div class="card-body">
                  <table class="table table-bordered border-muted mb-0">
                     <thead>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Role</th>
                        <th>Action</th>
                     </thead>
                     <tbody>
                        @foreach ($clients as $client)
                           <tr>
                              <td>{{$client->id}}</td>
                              <td>{{$client->name}}</td>
                              <td>{{$client->role->name}}</td>
                              <td>
                                 <div class="d-flex gap-2 justify-content-center">
                                    <a href="{{ route('client.edit', $client->id) }}" class="btn btn-secondary "><i class="fa-regular fa-pen-to-square"></i></a>
                                    <form action="{{ route('client.destroy', $client->id) }}" method="post">
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
