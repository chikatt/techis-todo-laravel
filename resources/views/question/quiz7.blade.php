<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="{{ url('/quiz6') }}">quiz6の画面にurl関数で移動する</a>
   
     <p><a href="{{ route('quiz6_test') }}">quiz6の画面にroute関数で移動する</a>

     <p><a href="{{ url('/quiz9/' . $quiz->id) }}">quiz9の画面にurl関数で移動する</a>
    
     <p><a href="{{ route('quiz9_test' , ['id' => $quiz->id ]) }}">quiz9の画面にroute関数で移動する</a>


     <form action="{{ url('/quiz9/' . $quiz->id) }}" method="post">
     @csrf
     <button type="submit">quiz9の画面にroute関数で移動する</button>
     </form>


    <form action="{{ url('/quiz9/' . $quiz->id) }}" method="post">
        @csrf
        <input type="text">
        <input type="submit" value="送信ボタン">
    </form>
</body>
</html>