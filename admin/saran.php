<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saran & Masukan</title>
    <?php 
    session_start();
    include('resources.php'); ?>
</head>
<body>
    <div id="wrapper">
        <!-- Navigation -->
        <?php include('navigasi.php') ?>

        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Saran & Masukan</h1>
                    </div>
                </div>

                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                    <!-- <button data-toggle="modal" data-target="#myModal" class="btn btn-success" style="margin-bottom: 10px; float:right" data-toggle="addData" data-target="ModalAddData"><i class="fa fa-edit fa-fw"></i>Create New</button> -->
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Pesan</th>             
                                    <th scope="col">Action</th>                    
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                                require_once('config.php');

                                $sql = "SELECT * FROM saran";
                                $query = mysqli_query($db, $sql);

                                while($data = mysqli_fetch_array($query)){
                            ?>
                                <tr>
                                    <td><?= $data['nama']?></td>
                                    <td><?= $data['email']?></td>
                                    <td><?= $data['pesan']?></td>
                                    <td><a href="hapusSaran.php?id=<?=$data['id']?>">Delete</a></td>
                                </tr>
                                <?php }?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>      
</body>
</html>