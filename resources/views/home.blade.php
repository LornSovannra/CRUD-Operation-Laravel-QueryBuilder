<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Book Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
    <div style="max-width: 1000px; margin: 20px auto; justify-content: center; align-items: center;">
        <div class="card">
            <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                <h5>Information</h5>
                <a href="{{ route("create") }}" class="btn btn-warning">Create New Author</a>
            </div>
            <div style="margin: 10px;">
                <table class="table" border="1">
                    <thead>
                        <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Address</th>
                        <th scope="col">Website</th>
                        <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($authors as $author)    
                            <tr>
                                <td>{{ $author->name }}</td>
                                <td>{{ $author->email }}</td>
                                <td>{{ $author->address }}</td>
                                <td>{{ $author->website }}</td>
                                <td>
                                    <a href={{ route("edit", $author->id) }}>Edit</a> | 
                                    <a href={{ route("remove", $author->id) }} class="show_confirm">Remove</a> |
                                    <a href={{ route("show", $author->id) }}>Show</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $('.show_confirm').click(function(e) {
            if(!confirm('Are you sure you want to delete this?')) {
                e.preventDefault();
            }
        });
    </script>
</body>
</html>