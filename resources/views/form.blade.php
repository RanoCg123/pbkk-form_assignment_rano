<!DOCTYPE html>
<html>
<head>
    <title>Formulir For something</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classy Form Template</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #171717;
        }
        .card{
            background-color: #71797E ;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center bg-dark text-white">
                    <h3>A Form</h3>
                </div>
                <div class="card-body">
                        <form action="/form" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" class="form-control" required><br>
        </div>
        <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" name="email" class="form-control" required><br>
        </div>
        <div class="form-group">
        <label for="number">Number:</label>
        <input type="number" name="number" min="2.50" max="99.99" step="0.01" class="form-control" required><br>
        </div>
        <div class="form-group">
        <label for="gambar">Unggah Gambar (.png/.jpg/.jpeg, maks. 2MB):</label>
        <input type="file" name="gambar" class="form-control" accept=".png, .jpg, .jpeg" required><br>
        </div>
        <div class="form-group">
        <label for="text">Text:</label>
        <textarea name="text" rows="4" class="form-control"></textarea><br>
        </div>
        <input type="submit" value="Kirim" class="btn btn-dark">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<div class="text-center">
<a href="{{route('showform')}}" class="btn btn-secondary ">See Form Data</a>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
</body>
</html>