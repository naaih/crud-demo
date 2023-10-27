<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Records</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>

<body>

    <h1 class="">Student Records</h1>

    <div class="container">
        <table class="">
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
                        <td>{{$getData->password}}</td>
                        <td>{{ $getData->created_at }}</td>
                        <td>{{ $getData->update_at }}</td>
                        <td><a href="edit_record/{{$getData->id}}"><button>Edit</button></a></td>
                        <td><a href="delete_record/{{$getData->id}}"><button>Delete</button></a></td>
                    </tr>
                @endforeach
            </tbody>
        </table
    </div>
    
    <a class="" href="http://localhost:8000/">Go back</a>

</body>

</html>
