@extends('layouts.main-layout')

@section('content')
    <main>
        <h1>Match</h1>
        <ul>
            <li>
                {{ $match -> team1 }}: {{ $match -> point1 }}
            </li>
            <li>
                {{ $match -> team2 }}: {{ $match -> point2 }}
            </li>
            <li>
                Winner:
                @if ($match -> result === 0)
                    {{ $match -> team1 }}
                @else
                    {{ $match -> team2 }}
                @endif
            </li>
        </ul>
        <a href="{{ route('edit', $match -> id) }}" class="link-button">
            Edit
        </a>
        <a href="{{ route('destroy', $match -> id) }}" class="link-button danger">
            Delete
        </a>
    </main>
@endsection