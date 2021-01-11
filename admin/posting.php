<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Halaman Posting</title>
        <?php include('resources.php') ?>
    </head>
    <body>

        <div id="wrapper">
            <!-- Navigation START-->
            <?php include('navigasi.php')?>
            <!-- Navigation END-->

            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Posting</h1>
                        </div>
                    </div>

                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <form method="POST" action="prosesPosting.php">
                                <div class="card">
                                    <div class="card-body">
                                        <label for="judul" class="form-label">Judul</label>
                                        <input type="text" class="form-control" id="judul" name="judul">
                                        <label for="kategori" class="form-label">Kategori</label>
                                        <input type="text" class="form-control" id="kategori" name="kategori">
                                        <label for="deskripsi" class="form-label">Deskripsi</label>
                                        <input type="text" class="form-control" id="deskripsi" name="deskripsi"><br>                    
                                        <textarea class="ckeditor" id="myeditor" name="data"></textarea>
                                        <br/>
                                        <button class="btn btn-primary" type="submit" name="btn">Simpan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        <!-- /#wrapper -->
    </body>
</html>
