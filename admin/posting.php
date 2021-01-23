<?php 
require_once('auth.php');
?>

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
            <?php require('navigasi.php')?>
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
                            <form method="POST" action="prosesPosting.php" enctype="multipart/form-data">
                                <div class="card">
                                    <div class="card-body">
                                        <label for="judul" class="form-label">Judul</label>
                                        <input type="text" class="form-control" id="judul" name="judul" required>
                                        <label for="kategori" class="form-label">Kategori</label>
                                        <input type="text" class="form-control" id="kategori" name="kategori" required>
                                        <label for="file" class="form-label">Thumbnail</label>
                                        <input type="file" class="form-control" id="fileToUpload" name="fileToUpload" required>
                                        <br>                    
                                        <textarea id="myeditor" name="data" required></textarea>
                                        <br/>
                                        <button class="btn btn-primary" type="submit" name="btn" id="btn">Simpan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        <!-- /#wrapper -->
        <script type="text/javascript">
        CKEDITOR.replace('myeditor',{
            filebrowserUploadUrl : 'ck_upload.php',
            filebrowserUploadMethod : 'form'
        });
        </script>
        <script>
            $(document).ready(function(){


                CKEDITOR.addCss('body {font-family: "Roboto", "Helvetica", "Arial", sans-serif;}');
                var contentEditor = CKEDITOR.replace( 'myeditor' );
            });
            </script>
    </body>
</html>
