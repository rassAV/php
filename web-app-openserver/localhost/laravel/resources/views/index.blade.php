@extends('layouts.app')

@section('content')
    <h2>Form Page</h2>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <form method="POST" action="/submit">
        @csrf
        <label for="data">Data:</label>
        <input type="text" name="data" required>
        <button type="submit">Submit</button>
    </form>
@endsection