@extends('auth')

@section('content')
    <h1 class="text-center font-semibold text-xl">Login</h1>
    <form method="POST">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="flex items-center justify-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
@endsection