@extends('layouts.app')
@section('content')
<p>{{$user->name}}さん、こんにちは!</p>
@if(session('message'))
<div class="alert alert-success">{{session('message')}}</div>
@endif
@foreach($posts as $post)
<div class="container-fluid mt-20" style="margin-left:-10px;">
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-header">
                    <div class="media flex-wrap w-100 align-items-center">
                        <div class="media-body ml-3">
                            <a href="{{route('post.show',$post)}}">{{$post->title}}</a>
                            <p class="text-muted small">{{$post->user->name}}さんの投稿</p>
                        </div>
                        <div class="text-muted small ml-3">
                            <div>投稿日</div>
                            <p><strong>{{$post->created_at->diffForHumans()}} </strong> </p>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <p>{{$post->body}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection