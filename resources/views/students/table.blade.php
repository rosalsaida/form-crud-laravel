@extends('main')

@section('title')
    <h3 class="title">Students Data</h3>
@endsection

@section('content')
    <div class="button_add">
        <a type="button" class="btn btn-warning" href="{{ route('create') }}">Add New Data</a>
    </div>

    <div class="content_table">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col" class="student_id">Student ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">GPA</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $students_id = 1;
                @endphp
                @foreach ($students as $student)
                    <tr>
                        <th scope="row" class="student_id">{{ $students_id++ }}</th>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->email }}</td>
                        <td>{{ $student->gpa }}</td>
                        <td class="action">
                            <a type="button" class="btn btn-success" href="/edit/{{ $student->students_id }}">Edit</a>
                            <a type="button" class="btn btn-danger" href="/delete/{{ $student->students_id }}">Remove</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
