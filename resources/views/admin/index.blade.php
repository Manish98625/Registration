<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Image processing</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid">
        <table class="table table-stripped">
            <thead>
                <tr class="table-dark">
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Username</th>
                    </th>
                    <th scope="col">email</th>
                    <th scope="col">state</th>
                    <th scope="col">Phonenumber</th>
                    <th scope="col">address</th>
                    <th scope="col">image</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Skill</th>
                    <th scope="col  ">Action</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($data as $record)
                    <tr>
                        <th scope="row">{{ $record->id }}</th>
                        <th>{{ $record->name }}</th>
                        <th>{{ $record->username }}</th>
                        <th>{{ $record->email }}</th>
                        <th>{{ $record->state }}</th>
                        <th>{{ $record->phonenumber }}</th>
                        <th>{{ $record->address }}</th>
                        <th><img src="{{ asset('storage/' . $record->image) }}" class="rounded-circle" height="100px"
                                width="100px"</th>
                        <th>{{ $record->gender }}</th>
                        <th>{{ $record->skill }}</th>
                        <td rowspan="2"><a href="edit/{{ $record->id }}">
                                <button class="btn btn-primary mt-3"> Edit</button></a>
                            <a href="delete/{{ $record->id }}">
                                <button class="btn btn-danger mt-3"> Delete</button></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="/add"><button class="btn btn-primary mt-3"> ADD</button></a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
