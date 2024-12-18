<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Result</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Roboto', sans-serif;
        }
        .container {
            max-width: 600px;
            margin-top: 50px;
        }
        h1 {
            color: #343a40;
            font-size: 2.5rem;
            text-align: center;
            margin-bottom: 20px;
        }
        .result-box {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }
        .result-text {
            font-size: 1.25rem;
            color: #6c757d;
            text-align: center;
            margin-bottom: 20px;
        }
        .btn-custom {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            text-align: center;
            border-radius: 5px;
            text-decoration: none;
            font-size: 1.2rem;
            margin-top: 20px;
        }
        .btn-custom:hover {
            background-color: #0056b3;
            text-decoration: none;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Test Result</h1>
    <div class="result-box">
        <p class="result-text">{{ $result }}</p>
        <a href="{{ route('sleeptest.index') }}" class="btn-custom">Take the test again</a>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
