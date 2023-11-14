@extends('main')

@section('title')
    <h3 class="title">Fill The Following Data</h3>
@endsection

@section('content')
    <!-- Form Start -->
    <div class="content">
        <form method="POST" action="{{ route('store') }}">
            {{ csrf_field() }}
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your full name">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="gpa" class="form-label">Your GPA</label>
                <input type="text" class="form-control" id="gpa" name="gpa" placeholder="Enter your GPA score">
            </div>

            <!-- Button -->
            <button type="submit" class="btn btn-light" value="submit">Send Data</button>
            <a type="submit" class="btn btn-outline-light" href="{{ route('view') }}">View Data</a>
        </form>
    </div>
    <!-- Form End -->
@endsection
