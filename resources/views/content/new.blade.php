@extends('layouts.app')

@section('content')
    {{-- main start --}}
    <div class="main">
        <div class="input">
            <form action="/content/create" method="post">
                @csrf
                <p>タイトル</p>
                <input type="text" name="title">
                <p>メモ</p>
                <textarea name="memo" cols="30" rows="10"></textarea>
                <br>
                <input type="submit" value="確認">
            </form>
        </div>
    </div>
    {{-- main end --}}
@endsection