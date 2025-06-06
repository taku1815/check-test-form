@extends('layouts.default')
<style>
    th {
        background-color: #289ADC;
        color: white;
        padding: 5px 40px;
    }

    tr:nth-child(odd) td {
        background-color: #FFFFFF;
    }

    td {
        padding: 25px 40px;
        background-color: #EEEEEE;
        text-align: center;
    }
</style>
@section('title', 'index.blade.php')

@section('content')
    <table>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>age</th>
            <th>nationality</th>
        </tr>
        @foreach ($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->age}}</td>
                <td>{{$user->nationality}}</td>
            </tr>
        @endforeach
    </table>
@endsection