@extends('layouts.main-layout')

@section('content')
    <main>
        <h1>Matches</h1>
        <ul>
            @foreach ($matches as $match)
                <li>
                    <a href="{{ route('show', $match -> id) }}">
                        {{ $match -> team1 }} VS {{ $match -> team2 }}
                    </a>
                    <div>
                        <a href="{{ route('edit', $match -> id) }}">
                            <i class="far fa-edit white"></i>
                        </a>
                        <a href="{{ route('destroy', $match -> id) }}">
                            <i class="fas fa-times red"></i>
                        </a>
                    </div>
                </li>
            @endforeach
        </ul>
        <a href="{{ route('create') }}" class="link-button">
            New match
        </a>
    </main>
@endsection