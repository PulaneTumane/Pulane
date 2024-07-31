@extends('layouts.app')

@section('content')
    <h1>{{ $student->name }}</h1>
    <p>Email: {{ $student->email }}</p>
    <p>Date of Birth: {{ $student->date_of_birth }}</p>
    <p>Address: {{ $student->address }}</p>
    <a href="{{ route('students.index') }}" class="btn btn-primary">Back to List</a>
@endsection
