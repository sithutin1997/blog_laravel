@extends('layouts.app')
    @section("content")
        <div class="container">
            <div class="card mb-2">
                <div class="card-body">
                    <h5 class="card-title">{{ $article->title }}</h5>
                    <div class="card-subtitle mb-2 text-muted small">
                        {{ $article->created_at->diffForHumans() }}
                    </div>
                    <p class="card-body">{{ $article->content }}</p>
                    <a class="btn btn-warning"
                    href="{{ url("/articles/delete/$article->id") }}">
                    Delete
                    </a>
                    <a class="btn btn-success"
                    href="{{ url("/articles") }}">
                    Back
                    </a>
                </div>    
            </div>
        </div>
    @endsection