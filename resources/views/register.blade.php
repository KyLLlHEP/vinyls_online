<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Register</title>
</head>
<body>
<div class="register-form my-5">
    <h2 class="text-center mb-3">Register</h2>
    <form form action="{{ route('register') }}" method="POST" class="p-4 shadow rounded bg-white">
    @csrf
    <div class="mb-3">
            <input type="text" class="form-control" name="nickname" placeholder="Nickname" required>
            @error('nickname')
        <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" name="first_name" placeholder="First Name">
            @error('first_name')
        <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <input type="email" class="form-control" name="email" placeholder="Email" required>
            @error('email')
        <div class="alert alert-danger">{{ $message }}</div>
            @enderror

        </div>
        <div class="mb-3">
            <input type="password" class="form-control" name="password" placeholder="Password" required>
            @error('password')
        <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary">Register</button>
        </div>
    </form>
</div>


</body>
</html>
