@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Show car') }} model {{$car->name}} color {{$car->color}}</div>

                <div class="card-body">
                  
            
                     <div class="form-group">
                     <label>Model name</label>
                     <input type="text" name="name" class="form-control" required value="{{ $car->name}}" readonly>
                     </div>

                     <div class="form-group">
                     <label>Register Number</label>
                     <textarea name="register_no" class="form-control"  readonly>{{ $car->register_no}} </textarea>
                     </div>

                     <div class="form-group">
                     <label>Model Color</label>
                     <input type="text" name="color" class="form-control" required value="{{ $car->color}}" readonly>
                     </div>

                     
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
