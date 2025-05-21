<div class="bg-light p-4 rounded">
  @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif
  <form action="{{ route('dashboard.posts.store') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
          <label for="title">Title:</label>
          <input type="text" id="title" name="title" class="form-control" value="{{ old('title') }}" required>
      </div>
      <div class="form-group">
          <label for="body">Body:</label>
          <textarea id="body" name="body" class="form-control">{{ old('body') }}</textarea>
      </div>
      <div class="form-group">
          <label for="thumbnail">Thumbnail:</label>
          <input type="file" id="thumbnail" name="thumbnail" class="form-control-file">
      </div>
      <x-primary-button>Submit</x-primary-button>
  </form>
</div>