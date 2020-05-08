<form action="{{ route('posts.store') }}" method="post">
    @csrf
    {{-- Post body --}}
    <div class="form-group">
      <label for="body">você não está sozinha</label>
      <textarea class="form-control"
                name="body"
                id="body"
                rows="3"
                placeholder="abra seu coração..."
                required
                style="resize: none;"></textarea>

        @if ($errors->has('body'))
            <small class="text-danger">{{ $errors->first('body') }}</small>
        @endif
    </div>
    <div class="form-group">
        <button type="submit" onclick="this.disabled=true;this.value='armazenando surto...';this.form.submit();" class="btn btn-secondary">pronto, surtei</button>
    </div>
</form>
