@extends('layouts.app')

@section('content')
    <h2>Form Page</h2>

    @if(session('message'))
        <p>{{ session('message') }}</p>
    @endif

    <form method="POST" action="/submit">
        @csrf
        <label for="name">Name:<br>
            <input type="text" name="name" required minlength="1" maxlength="50"></label><br>
        <label for="lastname">Lastname:<br>
            <input type="text" name="lastname" required minlength="1" maxlength="50"></label><br>
        <label for="age">Age:<br>
            <input type="number" name="age" required minlength="18" maxlength="200"></label><br>
        <label for="email">Email:<br>
            <input type="email" name="email" required maxlength="255"></label><br>

        <br><button type="submit">Submit</button>
    </form><br>
@endsection