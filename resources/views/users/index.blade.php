@extends('layouts.main')

@section('content')
<div class="cotainer-fluid px-4">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-start">
                <h2>Users Management</h2>
            </div>
            <div class="float-end">
                <a class="btn btn-success" href="{{ route('users.create') }}"> Create New User</a>
            </div>
        </div>
    </div>

    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Users List</li>
    </ol>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{$message}}</p>
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <table class="table table-responsive table-striped">
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
                @foreach ($data as $key => $user)
                <tr>
                    <td>{{++$i}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        <a href="{{route('users.show', $user->id)}}" class="btn btn-info">Show</a>
                        <a href="{{route('users.edit', $user->id)}}" class="btn btn-primary">Edit</a>
                        {!! Form::open(['method' => 'DELETE', 'route' => ['users.destroy', $user->id], 'style' => 'display:inline']) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
                @endforeach
            </table>
            <div class="d-flex">
                {!! $data->links() !!}
            </div>
        </div>
    </div>
</div>
@endsection
