<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Category</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f7f8fa;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            min-height: 100vh;
            margin: 0;
            padding: 40px;
        }

        table {
            border-collapse: collapse;
            width: 80%;
            max-width: 700px;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
            overflow: hidden;
        }

        th {
            background-color: #f1f3f5;
            color: #333;
            text-align: left;
            padding: 14px 20px;
            font-weight: 600;
            font-size: 15px;
            letter-spacing: 0.5px;
        }

        td {
            padding: 12px 20px;
            border-top: 1px solid #eee;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
        </tr>
        @foreach ($categories as $category)
        <tr>
            <td>{{ $category->id }}</td>
            <td>{{ $category->name }}</td>
        </tr>    
        @endforeach
    </table>
</body>
</html>