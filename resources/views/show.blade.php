<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Book Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div style="max-width: 1000px; margin: 20px auto; justify-content: center; align-items: center;">
        <div class="card">
            <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                <h5>Information</h5>
                <a href="{{ route("create") }}" class="btn btn-warning">Create New Author</a>
            </div>
            <div style="margin: 10px;">
                <table class="table">
                    <tbody>
                      <tr>
                        <td style="font-weight: bold; width: 100px">ID</td>
                        <td>{{ $author -> id }}</td>
                      </tr>
                      <tr>
                        <td style="font-weight: bold; width: 100px">Name</td>
                        <td>{{ $author -> name }}</td>
                      </tr>
                      <tr>
                        <td style="font-weight: bold; width: 100px">Email</td>
                        <td>{{ $author -> email }}</td>
                      </tr>
                      <tr>
                        <td style="font-weight: bold; width: 100px">Address</td>
                        <td>{{ $author -> address }}</td>
                      </tr>
                      <tr>
                        <td style="font-weight: bold; width: 100px">Website</td>
                        <td>{{ $author -> website }}</td>
                      </tr>
                    </tbody>
                </table>
                <a href={{ route("edit", $author->id) }}>Edit</a> |
                <a href="/">Back</a>
            </div>
        </div>
    </div>
</body>
</html>