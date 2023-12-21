@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center ">
        @include('sidebar')
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                  {{ __('Edit Client') }}
                </div>

                <div class="card-body">
                  <form action="{{route('client.update', $client->id)}}" method="post">
                     @csrf
                     @method('PUT')
                     <div class="form-group mb-3">
                        <label for="name">Name</label>
                        @error('name')                            
                        <label class="text-danger">{{$message}}</label>
                        @enderror
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name"
                        value="{{$client->name}}">
                     </div>
                     <div class="form-group mb-3">
                        <label for="role">Role</label>
                        @error('role')
                        <label class="text-danger">{{$message}}</label>
                        @enderror
                        <select class="form-control" id="role" name="role_id" >
                           <option value="">Select Role</option>
                           @foreach ($roles as $role)
                              <option {{$role->id === $client->role_id ? 'selected' : ''}} value="{{$role->id}}" >
                                 {{$role->name}}
                              </option>
                           @endforeach
                        </select>
                     </div>
                     <input type="submit" value="Edit" class="btn btn-outline-success" name="client_edit">
                     <a href="{{route('client')}}" class="btn btn-outline-secondary">
                        Go Back <i class="fa-solid fa-arrow-left-long"></i>
                     </a>
                  </form>
                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
