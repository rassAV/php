@extends('layouts.app')

@section('content')
    <h2>Data Page</h2>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Lastname</th>
                <th>Age</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $item)
                <tr>
                    <td>{{ $item['name'] }}</td>
                    <td>{{ $item['lastname'] }}</td>
                    <td>{{ $item['age'] }}</td>
                    <td>{{ $item['email'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table><br>
@endsection
