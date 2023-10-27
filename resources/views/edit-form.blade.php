<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Form</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>
<body>

    <h1 class="">Edit Student Form</h1>

    <div class="container">
        <form action="{{url('update_data', $getData->id)}}" method="POST">

            @csrf

            <div class="">
                <label for="exampleInputUsername">Username</label>
                <input type="text" name="name" value="{{$getData->name}}" class="form-control" id="exampleInputUsername"
                    aria-describedby="usernameHelp">
            </div>

            <div class="">
                <label for="exampleInputEmail">Email address</label>
                <input type="text" name="email" value="{{$getData->email}}" class="form-control" id="exampleInputEmail"
                    aria-describedby="emailHelp">
            </div>

            <div class="">
                <label for="exampleInputNumber">Number</label>
                <input type="text" name="number" value="{{$getData->number}}" class="form-control" id="exampleInputNumber"
                    aria-describedby="numberHelp">
            </div>

            <div class="">
                <label for="exampleInputPassword">Password</label>
                <input type="text" name="password" value="{{$getData->password}}" class="form-control" id="exampleInputPassword">
            </div>

            <button type="submit" class="">Submit</button>
        </form>
    </div>

</body>
</html>