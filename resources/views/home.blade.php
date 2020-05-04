@extends('layouts.app')

@section('content')
{{-- List all posts --}}
<div class="card-columns">
    @forelse ($posts as $post)
    <div class="card border-primary" style="max-width: 18rem;">
        <div class="card-body">
            <p class="card-text text-info">{{ $post->body }}</p>
        </div>
    {{-- creation time --}}
    <small class="card-footer bg-transparent float-left text-muted border-white">{{ $post->created_at->diffForHumans() }}</small>
</div>
@empty
<p>sem surtos ainda!</p>

@endforelse
</div>

@endsection
