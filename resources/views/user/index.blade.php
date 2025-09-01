<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>User List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h2>User List</h2>
        @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                        <th>#</th>
                        <th>
                            <a href="{{ request()->fullUrlWithQuery(['sort' => 'name', 'direction' => request('direction') === 'asc' && request('sort') === 'name' ? 'desc' : 'asc']) }}">
                                Name
                                @if(request('sort') === 'name')
                                    <span class="ms-1">@if(request('direction') === 'asc')&uarr;@else&darr;@endif</span>
                                @endif
                            </a>
                        </th>
                        <th>
                            <a href="{{ request()->fullUrlWithQuery(['sort' => 'email', 'direction' => request('direction') === 'asc' && request('sort') === 'email' ? 'desc' : 'asc']) }}">
                                Email
                                @if(request('sort') === 'email')
                                    <span class="ms-1">@if(request('direction') === 'asc')&uarr;@else&darr;@endif</span>
                                @endif
                            </a>
                        </th>
                </tr>
            </thead>
            <tbody>
                @forelse($users as $user)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="3" class="text-center">No users found.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
        <!-- Pagination links -->
        <div class="d-flex justify-content-center">
            {{ $users->links('pagination::bootstrap-5') }}
        </div>
    </div>
</body>
</html>