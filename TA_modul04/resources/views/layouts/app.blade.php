
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LaporBanjir</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
            background: #f4f7f5;
            color: #222;
        }

        .container {
            max-width: 700px;
            margin: 0 auto;
            padding: 25px;
            background: white;
            border-radius: 10px;
        }

        .mb-3 {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 6px;
        }

        input {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
        }

        button {
            padding: 10px 18px;
            background: #198754;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .alert {
            padding: 12px;
            margin-bottom: 15px;
            border-radius: 5px;
        }

        .alert-danger {
            background: #f8d7da;
            color: #842029;
        }
    </style>
</head>
<body>
    @yield('content')
</body>
</html>
