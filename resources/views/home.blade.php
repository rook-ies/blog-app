@extends('layouts.app')

@section('content')
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard User') }}</div>

            </div>
        </div>
    </div>
    <br>
</div>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach($posts as $post)
            <div class="card">
                <div class="card-header">{{$post->title}}</div>
                <div class="card-body">
                    <div>
                        {{$post->description}}
                    </div>
                    <br>
                    <p> created at : {{$post->created_at}}</p>
                </div>
            </div>
            <br>
            @endforeach
        </div>
    </div>
</div>

@endsection
