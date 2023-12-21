@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center ">
        @include('sidebar')
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                  {{ __('Edit Order') }}
                </div>

                <div class="card-body">
                  <form action="{{route('order.update', $order->id)}}" method="post">
                     @csrf
                     @method('PUT')
                     <div class="form-group mb-3">
                        <label for="name">Name</label>
                        @error('name')                            
                        <label class="text-danger">{{$message}}</label>
                        @enderror
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name"
                        value="{{$order->name}}">
                        <label class="mt-2" for="name">Description</label>
                        @error('description')                            
                        <label class="text-danger">{{$message}}</label>
                        @enderror
                        <textarea class="form-control" id="description" name="description" placeholder="Description" rows="7">{{$order->description}}</textarea>
                     </div>
                     <input type="submit" value="Edit" class="btn btn-outline-success" name="order_edit">
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
