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
            <div class="card">
                <div class="card-header">{{ __('View Post') }}</div>

                <div class="card-body">
                    @foreach($posts as $post)
                    <h2>{{$post->title}}</h2>
                    <h6>{{$post->created_at}}</h6>
                    <!-- <p>Published At: {{date('Y-m-d', strtotime($post->published_at))}}</p> -->
                    <br>
                    <div>
                        {{$post->description}}
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
