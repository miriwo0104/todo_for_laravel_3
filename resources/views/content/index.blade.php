@extends('layouts.app')

@section('content')
    {{-- main start --}}
    <div class="main">
        <div class="title">
            <p>content index</p>
        </div>
        <div class="new_todo">
            <input type="button" onclick="location.href='/content/new'" value="新規登録">
        </div>
        <div class="content">
            @foreach ($user_todos as $user_todo)
                <p>{{$user_todo['title']}}</p>
                <br>
                <p>{{$user_todo['memo']}}</p>
            @endforeach
        </div>
    </div>
    {{-- main end --}}
@endsection