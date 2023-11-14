@extends('main')

@section('title')
    <h3 class="title">Edit Data</h3>
@endsection

@section('content')
    <!-- Form Start -->
    <div class="content">
        <form method="POST" action="/update/{{ $data->students_id }}">
            {{ csrf_field() }}
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $data->name }}">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $data->email }}">
            </div>
            <div class="mb-3">
                <label for="gpa" class="form-label">Your GPA</label>
                <input type="text" class="form-control" id="gpa" name="gpa" value="{{ $data->gpa }}">
            </div>

            <!-- Button -->
            <button type="submit" class="btn btn-light" value="submit">Send Data</button>
            <a type="submit" class="btn btn-outline-light" href="{{ route('view') }}">View Data</a>
        </form>
    </div>
    <!-- Form End -->
@endsection
