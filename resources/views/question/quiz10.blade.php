@extends('common.main')
@section('content')
    <h1>クイズ登録画面</h1>
    
    @if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif

    <form action="{{ url('/quiz10/store') }}" method="post">
    @csrf
    <p><input type="text" name="name" placeholder="名前を入力"></p>
    <p><input type="number" name="type" placeholder="数値を入力"></p>
    <p><button type="submit">送信ボタン</button></p>
    </form>

@endsection
