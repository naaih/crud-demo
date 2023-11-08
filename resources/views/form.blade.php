<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>

<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="/">CRUD</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/form">Form</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="student-records">Records</a>
                </li>
        </div>
    </nav>

    <h1 class="text-center mt-4">Student Form</h1>

    <div class="container">
        <form action="store_data" method="POST">

            @csrf

            <div class="mb-3">
                <label for="exampleInputUsername">Username</label>
                <input type="text" name="name" class="form-control" id="exampleInputUsername"
                    aria-describedby="usernameHelp">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail">Email address</label>
                <input type="text" name="email" class="form-control" id="exampleInputEmail"
                    aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="exampleInputNumber">Number</label>
                <input type="text" name="number" class="form-control" id="exampleInputNumber"
                    aria-describedby="numberHelp">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</body>

</html>