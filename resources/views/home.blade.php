@extends('layouts.app')

@section('content')
{{-- List all posts --}}
<div class="row mx-auto d-flex justify-content-center">
    @forelse ($posts as $post)
    <div class="col s12 m5">
        <div class="card blue-grey darken-1" style="max-width: 18rem;">

                <span class="white-text word-wrapnp">{{ $post->body }}</span>

            <small class="card-footer bg-transparent float-left text-muted border-white">{{ $post->created_at->diffForHumans() }}</small>
        </div>
    </div>
    @empty
    <p>sem surtos ainda!</p>
    @endforelse
</div>


@endsection
