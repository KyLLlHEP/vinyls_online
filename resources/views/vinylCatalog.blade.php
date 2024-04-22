<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Vinyl Catalog</title>
</head>
<body>
<div class="container mt-5">
    <h1 class="mb-3">Vinyl Catalog</h1>
    <div class="row mb-3">
        <div class="col">
            <input type="text" class="form-control" placeholder="Search by name...">
        </div>
        <div class="col">
            <select class="form-select">
                <option selected>Sort by price</option>
                <option value="low-high">Low to High</option>
                <option value="high-low">High to Low</option>
            </select>
        </div>
    </div>
    <div class="row">
        <!-- Vinyl records will be injected here -->
        <div class="col-md-3 mb-4">
            <div class="card">
                <img src="path_to_image.jpg" class="card-img-top" alt="Album Cover">
                <div class="card-body">
                    <h5 class="card-title">Album Title</h5>
                    <p class="card-text">Artist Name</p>
                    <p class="card-text">£Price</p>
                    <a href="#" class="btn btn-primary">Buy Now</a>
                </div>
            </div>
        </div>
        <!-- Repeat the above div for each record -->
    </div>
    <!-- Pagination or load more button -->
    <div class="d-flex justify-content-center">
        <button class="btn btn-secondary">Load More</button>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
