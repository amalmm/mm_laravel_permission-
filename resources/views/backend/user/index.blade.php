@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> user </div>

                <div class="card-body">
                     @foreach($obj as $data)
                       <div>{{$data->name}}</div>
                     @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
