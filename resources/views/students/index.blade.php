@extends('layouts.app')

@section('content')
    <h1>Students</h1>

    <form action="{{ route('students.search') }}" method="GET" class="form-inline mb-3">
        @csrf
        <div class="form-group">
            <label for="email" class="mr-2">Search by Email:</label>
            <input type="email" class="form-control mr-2" id="email" name="email" required>
        </div>
        <button type="submit" class="btn btn-primary">Search</button>
    </form>
    
    @if(isset($message) && !empty($message))
        <div class="alert alert-info">{{ $message }}</div>
    @endif

    <a href="{{ route('students.create') }}" class="btn btn-primary">Add New Student</a>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>

                
                <th>Date of Birth</th>
                <th>Address</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->date_of_birth }}</td>
                    <td>{{ $student->address }}</td>
                    <td>
                        <a href="{{ route('students.show', $student->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
