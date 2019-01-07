@extends('layouts.app')

@section('content')
    @include('admin.users._nav')

    <div class="d-flex flex-row mb-3">
        <a class="btn btn-primary mr-1" href="{{ route('admin.users.edit', $user) }}">Edit</a>
        <form class="mr-1" action="{{ route('admin.users.verify', $user) }}" method="POST">
            @csrf
            <button class="btn btn-danger">Verify</button>
        </form>
        <form class="mr-1" action="{{ route('admin.users.destroy', $user) }}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger">Delete</button>
        </form>
    </div>

    <table class="table table-bordered table-striped">
        <tbody>
            <tr>
                <th>ID</th><td>{{ $user->id }}</td>
            </tr>
            <tr>
                <th>Name</th><td>{{ $user->name }}</td>
            </tr>
            <tr>
                <th>Email</th><td>{{ $user->email }}</td>
            </tr>
            <tr>
                <th>Status</th>
                <td>
                    @if ($user->isWait())
                        <span class="badge badge-secondary">Waiting</span>
                    @elseif ($user->isActive())
                        <span class="badge badge-primary">Active</span>
                    @endif
                </td>
            </tr>
        </tbody>
    </table>
@endsection
