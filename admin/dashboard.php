<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <?php include('resources.php')?>
    <script>
    </script>
    
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Dashboard</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <button class="btn btn-primary">Account</button>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <div class="col-2 bg-secondary p-2">
                <div class="text-center text-white p-2">
                    <div class="bg-primary p-2 rounded-3">
                    <h4>Posting</h4>
                    </div>
                    <div class="bg-primary p-2 rounded-3 mt-3">
                    <h4>Data Admin</h4>
                    </div>
                </div>
            </div>
            <div class="col-10 bg-primary p-2">
                <h4>Halaman Posting</h4>
                <form method="POST" action="">
                    <div class="card">
                        <div class="card-body">
                            <label for="judul" class="form-label">Judul</label>
                            <input type="text" class="form-control" id="judul" name="judul">
                            <label for="kategori" class="form-label">Kategori</label>
                            <input type="text" class="form-control" id="kategori" name="kategori"><br>
                            <textarea class="ckeditor" id="myeditor" name="data"></textarea>
                            <br/>
                            <button class="btn btn-primary" type="submit" >Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>