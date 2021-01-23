<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">Startmin</a>
                </div>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <ul class="nav navbar-nav navbar-left navbar-top-links">
                    <li><a href="../index.php"><i class="fa fa-home fa-fw"></i> Website</a></li>
                </ul> 
                <ul class="nav navbar-right navbar-top-links">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i> Hai <?= $_SESSION['nama'] ?><b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
                            </li>
                        </ul>

                    </li>
                </ul>
                <!-- /.navbar-top-links -->
                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu"> 
                            <li>
                                <a href="posting.php"><i class="fa fa-edit fa-fw"></i> Posting</a>
                            </li>
                            <li>
                                <a href="dataPosting.php"><i class="fa fa-edit fa-fw"></i> Data Posting</a>
                            </li>
                            <li>
                                <a href="tables.php"><i class="fa fa-table fa-fw"></i> Data Admin</a>
                            </li>
                            <li>
                                <a href="membership.php"><i class="fa fa-table fa-fw"></i> Data Membership</a>
                            </li>
                            <li>
                                <a href="saran.php"><i class="fa fa-table fa-fw"></i> Saran & Masukan</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </nav>