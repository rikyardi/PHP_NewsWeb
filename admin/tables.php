<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Halaman Data Admin</title>
        <?php include('resources.php')?>
    </head>
    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <?php include('navigasi.php') ?>

            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Data Admin</h1>
                        </div>
                    </div>

                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                        <!-- <button data-toggle="modal" data-target="#myModal" class="btn btn-success" style="margin-bottom: 10px; float:right" data-toggle="addData" data-target="ModalAddData"><i class="fa fa-edit fa-fw"></i>Create New</button> -->
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Alamat</th>
                                        <th scope="col">No. Telp</th>
                                        <th scope="col">Email</th>                                  
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                    include("config.php");

                                    $sql = "SELECT * FROM admin";
                                    $query = mysqli_query($db, $sql);

                                    while($data = mysqli_fetch_array($query)){
                                ?>
                                    <tr>
                                        <th scope="row"><?= $data['id']?></th>
                                        <td><?= $data['nama']?></td>
                                        <td><?= $data['alamat']?></td>
                                        <td><?= $data['notelp']?></td>
                                        <td><?= $data['email']?></td>
                                    </tr>
                                    <?php }?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        <!-- /#wrapper -->


        <!-- Modal -->
        <!-- <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title" id="myModalLabel">Create New</h3>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">File input</label>
                        <input type="file" id="exampleInputFile">
                        <p class="help-block">Example block-level help text here.</p>
                    </div>
                    <div class="checkbox">
                        <label>
                        <input type="checkbox"> Check me out
                        </label>
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
            </div>
        </div>
        </div> -->

    </body>
</html>
