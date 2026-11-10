<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    @if ($fruits == 'orange')
        ミカンです！
    @elseif ($fruits == 'apple')
        リンゴです！
    @else
        その他の果物です！
    @endif
</body>
</html>