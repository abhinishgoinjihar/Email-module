@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Dashboard</h1>

        <h3>Users</h3>
        <ul>
            @foreach ($users as $user)
                <li>{{ $user->name }} - {{ $user->email }}</li>
            @endforeach
        </ul>

        <h3>Sent Emails</h3>
        <table class="table">
            <thead>
                <tr>
                    <th>User</th>
                    <th>Subject</th>
                    <th>Content</th>
                    <th>Sent At</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($emails as $email)
                    <tr>
                        <td>{{ $email->email }}</td>
                        <td>{{ $email->subject }}</td>
                        <td>{{ $email->content }}</td>
                        <td>{{ $email->created_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
