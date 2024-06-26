<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/styles.css">
    <title>My Account</title>
</head>
<body>
<main>
        <header class="site-header ">
            <!-- Header same as index.blade.php -->
        </header>
        <div class="container mt-4">
            <h1>My Accaunt</h1>
            <div class="row">
                <div class="col-md-4">
                <img src="{{ asset('storage/' . (Auth::user()->avatar ?? 'path_to_default_avatar.jpg')) }}" alt="User Avatar" class="img-thumbnail">
                    <h3>{{ Auth::user()->nickname }}</h3>
                    <p>{{ Auth::user()->email }}</p>
                    <!-- Additional user info and links -->
                     <!-- Form for uploading a new avatar -->
                     <form action="{{ route('account.updateAvatar') }}" method="post" enctype="multipart/form-data">
                         @csrf
                        <div class="mb-3">
                            <label for="avatar" class="form-label">Update Avatar</label>
                            <input type="file" class="form-control" id="avatar" name="avatar" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Upload Avatar</button>
                     </form>
                </div>
                            <!-- Button to open a modal window -->
                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#deleteVinylModal">
                    Delete Vinyls
                    </button>

                            <!-- Modal window -->
                            <div class="modal fade" id="deleteVinylModal" tabindex="-1" aria-labelledby="deleteVinylModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="deleteVinylModalLabel">Delete Vinyls</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <!-- The content of the modal will be added here -->
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                                </div>
                            </div>
                            </div>


                <div class="col-md-8">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger">Log Out</button>
                    </form>
                </div>
            </div>
        </div>
        <footer class="site-footer">
            <!-- Footer same as index.blade.php -->
        </footer>
    </main>

</body>
    <script src="{{ asset('js/vinyl.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>

</html>
