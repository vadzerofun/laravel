@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center ">
        @include('sidebar')
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                  {{ __('Edit Role') }}
                </div>

                <div class="card-body">
                  <form action="{{route('role.update', $role->id)}}" method="post">
                     @csrf
                     @method('PUT')
                     <div class="form-group mb-3">
                        <label for="name">Name</label>
                        @error('name')                            
                        <label class="text-danger">{{$message}}</label>
                        @enderror
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name"
                        value="{{$role->name}}">
                     </div>
                     <input type="submit" value="Edit" class="btn btn-outline-success" name="role_edit">
                     <a href="{{route('role')}}" class="btn btn-outline-secondary">
                      Go Back <i class="fa-solid fa-arrow-left-long"></i>
                     </a>
                  </form>
                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
