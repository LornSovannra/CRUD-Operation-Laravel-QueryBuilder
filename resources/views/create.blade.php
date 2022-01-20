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
    <div style="max-width: 700px; margin: 20px auto; justify-content: center; align-items: center;">
        <form method="POST" action="{{ route("save-create") }}">
            @csrf
            <div class="card">
                <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                  <h5>Create Author</h5>
                  <a href="/" class="btn btn-warning">Back</a>
              </div>
                <div class="card-body">
                  <div class="mb-3">
                    <label for="Name" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name">
                    @error('name')
                        <p style="color: red;">{{ $message }}</p>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label for="Email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email">
                    @error('email')
                        <p style="color: red;">{{ $message }}</p>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label for="Address" class="form-label">Address</label>
                    <input type="text" class="form-control" name="address">
                    @error('address')
                        <p style="color: red;">{{ $message }}</p>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label for="Website" class="form-label">Website</label>
                    <input type="text" class="form-control" name="website">
                    @error('website')
                        <p style="color: red;">{{ $message }}</p>
                    @enderror
                  </div>
                </div>
                <button type="submit" class="btn btn-primary">Create</button>
            </div>
        </form>
    </div>
</body>
</html>