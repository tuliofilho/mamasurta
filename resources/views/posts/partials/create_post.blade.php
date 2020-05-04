<form action="{{ route('posts.store') }}" method="post">
    @csrf
    {{-- Post body --}}
    <div class="form-group">
      <label for="body">descreva seu surto</label>
      <textarea class="form-control"
                name="body"
                id="body"
                rows="3"
                placeholder="conte-nos aqui seu surto..."
                required
                style="resize: none;"></textarea>

        @if ($errors->has('body'))
            <small class="text-danger">{{ $errors->first('body') }}</small>
        @endif
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-secondary">pronto, surtei</button>
    </div>
</form>
