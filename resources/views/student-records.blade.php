<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Records</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>

<body>

    <h1 class="text-center mt-4">Student Records</h1>



    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    {{-- <th scope="col">Password</th> --}}
                    <th scope="col">Created At</th>
                    <th scope="col">Updated At</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($getData as $getData)
                <tr>
                    <th>{{ $getData->id }}</th>
                    <td>{{ $getData->name }}</td>
                    <td>{{ $getData->email }}</td>
                    {{-- <td>{{$getData->password}}</td> --}}
                    <td>{{ $getData->created_at }}</td>
                    <td>{{ $getData->updated_at }}</td>
                    <td><a href="edit_record/{{$getData->id}}"><button class="btn btn-primary">Edit</button></a></td>
                    <td><a href="delete_record/{{$getData->id}}"><button class="btn btn-danger">Delete</button></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{-- <span>
            {{ $getData->links() }}
        </span> --}}
    </div>


    <div class="container">
        <a class="btn btn-primary" href="http://localhost:8000/">Go back</a>
    </div>
</body>

</html>