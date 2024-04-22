<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Add New Vinyl</title>
</head>
<body>
<div class="container">
        <div class="vinyl-form-container">
            <h2 class="vinyl-form-heading">Add New Vinyl Record</h2>

            <!-- Display success and error messages here -->
            @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
 <!-- Start form here-->
            <form action="/submitVinyl" method="POST" enctype="multipart/form-data" class="vinyl-form">
                @csrf <!-- CSRF token for security -->
                <div class="mb-3">
                    <label for="artist_name" class="form-label">Artist Name</label>
                    <input type="text" class="form-control" id="artist_name" name="artist_name" required>
                </div>
                <div class="mb-3">
                    <label for="album_title" class="form-label">Album Title</label>
                    <input type="text" class="form-control" id="album_title" name="album_title" required>
                </div>
                <div class="mb-3">
                    <label for="genre" class="form-label">Genre</label>
                    <select class="form-select" id="genre" name="genre">
                        <option selected>Choose...</option>
                        <option value="pop">Pop</option>
                        <option value="rock">Rock</option>
                        <option value="alternative-rock">Alternative Rock</option>
                        <option value="punk">Punk</option>
                        <option value="pop-punk">Pop Punk</option>
                        <option value="chill-out">Chill Out</option>
                        <option value="other">Other</option>
                    </select>
                <div class="mb-3" id="otherGenre" style="display:none;">
                    <label for="other_genre" class="form-label">Enter New Genre</label>
                    <input type="text" class="form-control" id="other_genre" name="other_genre">
                </div>
                </div>
                <div class="mb-3">
                    <label for="image_path" class="form-label">Album Cover Image</label>
                    <input type="file" class="form-control custom-file-input" id="image_path" name="image_path" required>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price (£)</label>
                    <input type="number" class="form-control" id="price" name="price" step="0.01" required>
                </div>
                <button type="submit" class="btn btn-primary">Add Vinyl</button>
            </form>
        </div>
    </div>
    </script>
    <script>
    document.getElementById('genre').addEventListener('change', function() {
        var style = this.value;
        var otherGenre = document.getElementById('otherGenre');
        if(style === 'other') {
            otherGenre.style.display = 'block';
        } else {
            otherGenre.style.display = 'none';
        }
    });
</script>
</body>
</html>
