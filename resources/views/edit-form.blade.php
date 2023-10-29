<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Form</title>
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

    <h1 class="text-center mt-4">Edit Student Forms</h1>

    <div class="container">
        <form action="{{ url('update_data', $getData->id) }}" method="POST">

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