<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Web</title>
    <?php include('resources.php') ?>
</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">SI</a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="#">News<span class="sr-only">(current)</span></a></li>
            <li><a href="#">Tribute</a></li>
            <li><a href="#">Scholarship</a></li>
            <li><a href="#">Work and interships</a></li>
            <li><a href="#">Membership & Giving</a></li>
            <li><a href="#">History</a></li>
            <li><a href="#">About Us</a></li>
        </ul>
        <!-- <form class="navbar-form navbar-left">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form> -->
        <!-- <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="#">Link </a></li>
        </ul> -->

        </div>
    </div>
</nav>
    <div class="container-fluid">
        <?php
            include('config.php');

            $sql = "SELECT * FROM posting";
            $query = mysqli_query($db, $sql);
            
        ?>
            <div class="row">
                <div class="col-md-8">
                <?php while($data = mysqli_fetch_array($query)){ ?>
                    <div class="panel panel-default">
                        <div class="panel-heading"><?= $data['judul'] ?></div>
                        <div class="panel-body"><?= $data['deskripsi'] ?></div>
                        <div class="panel-footer">
                            <a href="article.php?id=<?= $data['id']  ?>">
                            <button class="btn btn-success">Lihat</button>
                            </a>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            <div class="col-md-4 " >
                <div class="panel panel-default">
                    <div class="panel-heading">title</div>
                    <div class="panel-body">body</div>
                    <div class="panel-footer">
                    <a href="">
                        <button class="btn btn-success">Lihat</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>