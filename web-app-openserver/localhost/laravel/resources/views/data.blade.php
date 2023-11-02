@extends('layouts.app')

@section('content')
    <h2>Data Page</h2>

    <table>
        <thead>
            <tr>
                <th>Data</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $item)
                <tr>
                    <td>{{ $item }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
