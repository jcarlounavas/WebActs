<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            background-color: #f9f9f9;
        }

        table {
            width: 80%;
            border-collapse: collapse;
            margin: auto;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 12px 15px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #007BFF;
            color: white;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        caption {
            caption-side: top;
            font-size: 1.5rem;
            margin-bottom: 10px;
        }

        .action-buttons a, .action-buttons form {
            display: inline-block;
            margin-right: 5px;
        }

        .action-buttons button, .action-buttons a {
            padding: 5px 10px;
            border: none;
            color: white;
            cursor: pointer;
            text-decoration: none;
            border-radius: 3px;
            font-size: 0.9rem;
        }

        .edit-btn {
            background-color: #ffc107;
        }

        .delete-btn {
            background-color: #dc3545;
        }
    </style>
</head>
<body>
    <table>
        <caption>Student Records</caption>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Age</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($studs as $studAct)
                <tr>
                    <td>{{ $studAct->id }}</td>
                    <td>{{ $studAct->name }}</td>
                    <td>{{ $studAct->email }}</td>
                    <td>{{ $studAct->age }}</td>
                    <td class="action-buttons">
                        <a href="/editing-page/{{$studAct['id']}}" class="edit-btn">Edit</a>
                        <form action="/editing-page/{{$studAct['id']}}" method="POST" onsubmit="return confirm('Are you sure?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="delete-btn">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

