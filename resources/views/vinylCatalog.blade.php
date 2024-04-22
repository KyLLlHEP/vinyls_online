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
    <h1 class="mb-4 text-center">Vinyl Catalog</h1>
    <form action="{{ route('vinylCatalog') }}" method="GET" class="mb-4">
        <div class="row">
            <div class="col-md-6">
                <input type="text" name="search" class="form-control" placeholder="Search by name..." value="{{ request('search') }}">
            </div>
            <div class="col-md-4">
                <select class="form-select" name="sort">
                    <option value="">Default Sorting</option>
                    <option value="low-high" {{ request('sort') == 'low-high' ? 'selected' : '' }}>Price: Low to High</option>
                    <option value="high-low" {{ request('sort') == 'high-low' ? 'selected' : '' }}>Price: High to Low</option>
                </select>
            </div>
            <div class="col-md-2">
                <button type="submit" class="btn btn-primary w-100">Apply</button>
            </div>
        </div>
    </form>

    <div class="row">
        @if(isset($vinyls) && count($vinyls) > 0)
            @foreach($vinyls as $vinyl)
                <div class="col-md-4 col-lg-3 mb-4">
                    <div class="card h-100">
                        <img src="{{ Storage::url($vinyl->image_path) }}" class="card-img-top" alt="{{ $vinyl->album_title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $vinyl->album_title }}</h5>
                            <p class="card-text">{{ $vinyl->artist_name }}</p>
                            <p class="card-text">£{{ number_format($vinyl->price, 2) }}</p>
                            <a href="#" class="btn btn-primary">Buy Now</a>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <div class="col-12">
                <p class="text-center">No records found</p>
            </div>
        @endif
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
