@extends('layouts.base')

@section('tilte')
    A Propos - @parent
@endsection

@section('content')
    
    <h1>A Propos</h1>

    <ul>
        @foreach($team as $user)
            <li>{{ $user['name'] . ' fait ' .$user['job']}}</li>
        @endforeach

        {{ $team[0]['name'] }}
    </ul>
@endsection