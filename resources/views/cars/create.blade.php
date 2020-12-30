@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create car') }}</div>

                <div class="card-body">
                <form method="POST" action="{{route('car:store') }}" enctype="multipart/form-data">
                   @csrf
                     <div class="form-group">
                     <label>Model name</label>
                     <input type="text" name="name" class="form-control">
                     </div>

                     <div class="form-group">
                     <label>Registration Number</label>
                     <textarea name="register_no" class="form-control"></textarea>
                     </div>

                     <div class="form-group">
                     <label>Model Color</label>
                     <input type="text" name="color" class="form-control">
                     </div>

                     <div class="form-group">
                     <label>Attachment</label>
                     <input type="file" name="attachment" class="form-control">
                     </div>

                     <div class="form-group">
                     <button type="submit" class="btn btn-primary">Submit</button>

                     </div>

                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
