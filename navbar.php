<nav class="navbar navbar-inverse" style="padding: 10px;" >
    <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php" style="padding: 5px;display:flex">
            <div style="display: flex;">
            <img src="asset/img/logo.png" style="width: 50px; height:50px; margin-top:-6px; margin-right:5px">
            </div>
            <div style="display: flex;">
            <p> Mahasiswa & Alumni <br>
            Universitas Muhammadiyah Prof. Dr. Hamka</p>
            </div>
        </a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php">Beranda</a></li>
            <li class="dropdown" data-target="dropdownMahasiswa">
                <a class="dropdown-toggle" data-toggle="dropdown" target="dropdownMahasiswa" href="#">Mahasiswa & Alumni</a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="scholarship.php"><i class="fa fa-graduation-cap fa-fw"></i> Scholarship</a>
                    </li>
                    <li>
                        <a href="tribute.php"><i class="fa fa-trophy fa-fw"></i> Tribute</a>
                    </li>
                    <li>
                        <a href="workinternship.php"><i class="fa fa-building fa-fw"></i> Work & Internship</a>
                    </li>
                </ul>
            </li>

            <li><a href="baksos.php">Membership & Giving</a></li>
            <li>
                <a href="about.php">About Us</a>
            </li>
        </ul>
        <form class="navbar-form navbar-right" action="search.php" method="POST">
            <div class="form-group">
                <input type="text" class="form-control" onclick="searchLebar()" name="input" id="input" placeholder="Judul" style="width:100px;">
            </div>
            <button type="submit" class="btn btn-default"><i class="fa fa-search fa-fw"></i></button>
        </form>
        <!-- <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="#">Link </a></li>
        </ul> -->
        </div>
    </div>
    </nav>