<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>quiz3</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>名前</th>
            <th>種別</th>
            <th>作成日時</th>
            <th>更新日時</th>
            <th>編集</th>
        </tr>
        @foreach($quizzes as $quiz)
            <tr>
                <td>{{ $quiz->id }}</td>
                <td>{{ $quiz->name }}</td>
                <td>{{ $quiz->type }}</td>
                <td>{{ $quiz->created_at }}</td>
                <td>{{ $quiz->updated_at }}</td>
                <td><a href="{{ url('/quiz12/' . $quiz->id) }}">編集</a></td>
                <td><a href="{{ url('/quiz12/' . $quiz->id) }}">削除</a></td>
            </tr>
        @endforeach
    </table>
</body>
</html>