<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<body>
    <h1 class="text-center">Form</h1>

    <div class="container">
        <form action="store_data" method="POST">

            @csrf

            <div class="form-group">
                <label for="exampleInputEmail1">Username</label>
                <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="text" name="email" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Number</label>
                <input type="text" name="number" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <div class="container d-grid gap-2 col-4 mx-auto">
        <a class="btn btn-primary " href="http://localhost:8000">Go home</a>
    </div>

</body>

</html>
