<div class="shadow mb-4">
    <div class="card-header py-3">
        <h3 class="m-0 font-weight-bold text-primary fs-4">{{ __('Data Users') }}</h3>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <a href="{{ route('dashboard.users.create') }}" class="btn btn-primary mb-3">
                <i class="fas fa-plus fa text-gray-300"></i> {{ __('Create New User') }}
            </a>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Created_at</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $index => $user) 
                        <tr>
                            <td>{{ $index + 1 }}</td> 
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->username }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->created_at }}</td>
                            <td>
                                <a class="text-decoration-none" href="{{ route('dashboard.users.edit', $user->id) }}">
                                    <x-primary-button>
                                        <i class="fas fa-pen fa text-gray-300"></i> Edit
                                    </x-primary-button>
                                </a>
                                <form class="delete-form" action="{{ route('dashboard.users.destroy', $user->id) }}" method="POST">
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
