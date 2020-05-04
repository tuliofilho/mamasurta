<div class="card shadow">
    <div class="card-body">
      {{-- Owner name with created_at --}}
      <small class="text-muted">
          Posted by: on {{ $post->created_at->format('M d, Y H:i:s') }}
      </small>

      {{-- Post body --}}
      <p class="card-text">
          {{ $post->body }}
      </p>

      {{-- include all comments related to this post --}}
      <hr>
      @include('posts.partials.comments')
    </div>
  </div>
