@extends('layouts.app')

@section('content')
{{-- List all posts --}}
<div class="row mx-auto d-flex justify-content-center">
    <div class="card-columns justify-content-center">
        @forelse ($posts as $post)
        <div class="card border-primary mx-auto" style="max-width: 18rem;">
            <div class="card-body ">
                <p class="card-text">{{ $post->body }}</p>
            </div>
            <small class="card-footer bg-transparent float-left text-muted border-white">{{ $post->created_at->diffForHumans() }}</small>
        </div>
        @empty
        <p>sem surtos ainda!</p>
        @endforelse
    </div>
</div>


@endsection
