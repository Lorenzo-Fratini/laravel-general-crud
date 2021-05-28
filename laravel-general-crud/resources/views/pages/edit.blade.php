@extends('layouts.main-layout')

@section('content')
    <main>
        <h1>Edit match</h1>
        <form method="POST" action="{{ route('update', $match -> id) }}">

            @csrf
            @method('POST')

            <div class="form">
                <label for="team1">Team 1: </label>
                <br>
                <input type="text" id="team1" name="team1" value="{{ $match -> team1 }}">
            </div>
            <div class="form">
                <label for="team2">team 2: </label>
                <br>
                <input type="text" id="team2" name="team2" value="{{ $match -> team2 }}">
            </div>
            <div class="form">
                <label for="point1">Point 1: </label>
                <br>
                <input type="number" id="point1" name="point1" value="{{ $match -> point1 }}"">
            </div>
            <div class="form">
                <label for="point2">Point 2: </label>
                <br>
                <input type="number" id="point2" name="point2" value="{{ $match -> point2 }}"">
            </div>
            <div class="form">
                <label for="result">Winner:</label>
                <select name="result" id="result">
                    <option value="0"
                        @if ($match -> result == 0)
                            selected
                        @endif
                    >Team 1</option>
                    <option value="1"
                        @if ($match -> result == 1)
                            selected
                        @endif
                    >Team 2</option>
                </select>
            </div>

            <button type="submit" class="link-button">
                Update
            </button>
    </main>
@endsection