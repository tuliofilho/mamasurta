@extends('layouts.app')

@section('content')
{{-- List all posts --}}
<div class="row mx-auto justify-content-center text-center" style="width:100%;">
    <div class="card-columns">
        @forelse ($posts as $post)
        <div class="card border-info text-left" style="max-width: 18rem;">
            <div class="card-body">
                <p class="card-text">{{ $post->body }}</p>
            </div>
            <small class="card-footer bg-transparent float-left text-muted-white border-white" style="width:100%;">{{ $post->created_at->diffForHumans() }}</small>
        </div>
        @empty
        <p>sem surtos ainda!</p>
        @endforelse
    </div>
</div>


@endsection
