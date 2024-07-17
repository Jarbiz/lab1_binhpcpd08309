<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Danh sách học sinh</title>
</head>
<body>
    <h1>Danh sách học sinh</h1>

    <ul>
        @foreach ($students as $student)
            <li>
                <strong>ID:</strong> {{ $student['id'] }} <br>
                <strong>Name:</strong> {{ $student['name'] }} <br>
                <strong>Class Code:</strong> {{ $student['class_code'] }} <br><br>
            </li>
        @endforeach
    </ul>
</body>
</html>