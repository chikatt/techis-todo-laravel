@extends('common.main')
@section('content')
    <h1>クイズ更新/削除画面</h1>
    
    @if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif

    <form action="{{ route('quiz12_update', ['id' => $quiz->id]) }}" method="post">
    @csrf
    @method('PUT')      
    <p><input type="text" name="name"  value="{{ $quiz->name }}"placeholder="名前を入力"></p>
    <p><input type="number" name="type"  value="{{ $quiz->type }}" placeholder="数値を入力"></p>
    <p><button type="submit">送信ボタン</button></p>
    </form>

    <form action="{{ route('quiz12_test3', ['id' => $quiz->id]) }}" method="post">
    @csrf
    @method('DELETE')
    <button type="submit">削除</button>
    </form>

@endsection
