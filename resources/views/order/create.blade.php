@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center ">
        @include('sidebar')
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                  {{ __('Create Order') }}
                </div>

                <div class="card-body">
                  <form action="{{route('order.store')}}" method="post">
                     @csrf
                     <div class="form-group mb-3">
                        <label for="name">Name</label>
                        @error('name')                            
                        <label class="text-danger">{{$message}}</label>
                        @enderror
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                        <label class="mt-2" for="name">Description</label>
                        @error('description')                            
                        <label class="text-danger">{{$message}}</label>
                        @enderror
                        <textarea class="form-control" id="description" name="description" placeholder="Description" rows="7"></textarea>
                     </div>
                     <input type="submit" value="Create" class="btn btn-outline-primary" name="order_add">
                     <a href="{{route('order')}}" class="btn btn-outline-secondary">
                      Go Back <i class="fa-solid fa-arrow-left-long"></i>
                     </a>
                  </form>
                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
