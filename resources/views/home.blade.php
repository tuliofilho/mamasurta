@extends('layouts.app')

@section('content')
{{-- List all posts --}}
<div class="row mx-auto justify-content-center text-center" style="width:100%;">
    <div class="card-columns">
        @forelse ($posts as $post)
        <div class="card text-white bg-primary text-left" style="max-width: 18rem;">
            <div class="card-body">
                <p class="card-text">{{ $post->body }}</p>
            </div>
            <small class="card-footer bg-transparent float-left text-muted-white border-primary">{{ $post->created_at->diffForHumans() }}</small>
        </div>
        @empty
        <p>sem surtos ainda!</p>
        @endforelse
    </div>
</div>


@endsection
