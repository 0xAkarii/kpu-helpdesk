<div class="shadow mb-4">
    <div class="card-header py-3">
        <h3 class="m-0 font-weight-bold text-primary fs-4">{{ __('Data Posts') }}</h3>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <a href="{{ route('dashboard.posts.create') }}" class="btn btn-primary mb-3">
                <i class="fas fa-plus fa text-gray-300"></i> {{ __('Create New Post') }}
            </a>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Thumbnail</th>
                        <th>Title</th>
                        <th>Body</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td><img src="/images/{{ $post->thumbnail }}" width="100"></td>
                            <td>{{ $post->title }}</td>
                            <td>
                                {!! Str::limit($post->body, 100) !!}
                                @if (strlen($post->body) > 100)
                                    <a class="text-blue-500" href="{{ route('dashboard.posts.show', $post->id) }}">Read more</a>
                                @endif
                            </td>
                            <td>
                                <a class="text-decoration-none" href="{{ route('dashboard.posts.edit', $post->id) }}">
                                    <x-primary-button>
                                        <i class="fas fa-pen fa text-gray-300"></i> Edit
                                    </x-primary-button>
                                </a>
                                <form class="delete-form" action="{{ route('dashboard.posts.delete', $post->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <x-danger-button>
                                        <i class="fas fa-trash fa text-gray-300"></i> Delete
                                    </x-danger-button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
