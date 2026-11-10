<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>quiz3</title>
</head>
<body>
    <h2>Companiesテーブル</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>会社名</th>
            <th>創立日</th>
            <th>住所</th>
        </tr>
        @foreach($companies as $company)
            <tr>
                <td>{{ $company->id }}</td>
                <td>{{ $company->name }}</td>
                <td>{{ $company->founding_date }}</td>
                <td>{{ $company->address }}</td>
            </tr>
        @endforeach
    </table>

    <h2>Salesテーブル</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>企業ID</th>
            <th>売上</th>
            <th>売上日</th>
        </tr>
        @foreach($sales as $sale)
            <tr>
                <td>{{ $sale->id }}</td>
                <td>{{ $sale->company_id }}</td>
                <td>{{ $sale->sales }}</td>
                <td>{{ $sale->sales_date }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>