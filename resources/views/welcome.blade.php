<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Records</title>
    <link 
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
    crossorigin="anonymous">
    
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>

<body>
    <div class="container text-center position-absolute top-50 start-50 translate-middle">
        <h4>Go to <a href="http://localhost:8000/form">student forms</a></h4>
        <h4>Go to <a href="http://localhost:8000/student-records">student records</a></h4>
    </div>
</body>

</html>
