
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        @if (session()->has('alert'))
           <div class="alert {{session()->get('alert-type')}}">
             {{session()->get('alert')}}
            </div>
        @endif
            <div class="card">
                <div class="card-header">{{ __('Car Index') }}</div>

                <div class="card-body">

                <table class="table">
                <thead>
                 <tr>
                 <th> ID </th>
                 <th> Model Name</th>
                 <th> Registration No </th>
                 <th> Model Color </th>
                 <th> Created </th>
                 <th> Created DateTime </th>
                 
                 </tr>
                 </thead>
                 
 
                 <tbody>
                   @foreach($cars as $car)
                   <tr>
                   <td>{{ $car->id}}</td>
                   <td>{{ $car->name}}</td>
                   <td>{{ $car->register_no}}</td>
                   <td>{{ $car->color}} </td>
                   <td>{{ $car->Created ? $car->created->diffForHumans(): 'Undefined'}}</td>
                   <td>{{ $car->Created ?? '-'}}</td>

                   <td>
                   <a href="{{route('cars:show',$car)}}" class="btn btn-primary"> View </a>
                   </td>
                   <td>
                   <a href="{{route('cars:edit',$car)}}" class="btn btn-success"> Edit </a>
                   </td>
                   <td>
                   <a onclick="return confirm('Are you sure?')" href="{{route('cars:delete',$car)}}" class="btn btn-danger"> Delete </a>
                   </td>
                 
                </tr>
                    @endforeach
                </tbody>
                </table>
                {{ $cars->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
