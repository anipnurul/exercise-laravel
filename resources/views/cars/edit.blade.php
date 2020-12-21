@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit car') }}</div>

                <div class="card-body">
                   <form method="POST" action="">
                   @csrf
                     <div class="form-group">
                     <label>Model name</label>
                     <input type="text" name="name" class="form-control" required value="{{$car->name}}">
                     </div>

                     <div class="form-group">
                     <label>Register Number</label>
                     <textarea name="register_no" class="form-control">{{$car->register_no}}</textarea>
                     </div>

                     <div class="form-group">
                     <label>Model Color</label>
                     <input type="text" name="color" class="form-control" required value="{{$car->color}}">
                     </div>

                     <div class="form-group">
                     <button type="submit" class="btn btn-primary">Update Car</button>

                     </div>

                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
