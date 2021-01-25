<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php include('resources.php') ?>
<style>
* {
  box-sizing: border-box;
}

body{
    background-color: #77aa77;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100%25' height='100%25' viewBox='0 0 2 1'%3E%3Cdefs%3E%3ClinearGradient id='a' gradientUnits='userSpaceOnUse' x1='0' x2='0' y1='0' y2='1'%3E%3Cstop offset='0' stop-color='%2377aa77'/%3E%3Cstop offset='1' stop-color='%234fd'/%3E%3C/linearGradient%3E%3ClinearGradient id='b' gradientUnits='userSpaceOnUse' x1='0' y1='0' x2='0' y2='1'%3E%3Cstop offset='0' stop-color='%23cf8' stop-opacity='0'/%3E%3Cstop offset='1' stop-color='%23cf8' stop-opacity='1'/%3E%3C/linearGradient%3E%3ClinearGradient id='c' gradientUnits='userSpaceOnUse' x1='0' y1='0' x2='2' y2='2'%3E%3Cstop offset='0' stop-color='%23cf8' stop-opacity='0'/%3E%3Cstop offset='1' stop-color='%23cf8' stop-opacity='1'/%3E%3C/linearGradient%3E%3C/defs%3E%3Crect x='0' y='0' fill='url(%23a)' width='2' height='1'/%3E%3Cg fill-opacity='0.5'%3E%3Cpolygon fill='url(%23b)' points='0 1 0 0 2 0'/%3E%3Cpolygon fill='url(%23c)' points='2 1 2 0 0 0'/%3E%3C/g%3E%3C/svg%3E");
    background-attachment: fixed;
    background-size: cover;
    /* background by SVGBackgrounds.com */
    }

/* The actual timeline (the vertical ruler) */
.timeline {
  position: relative;
  max-width: 1200px;
  margin: 0 auto;
}
.timeline > div{
    margin: 0px;
}

/* The actual timeline (the vertical ruler) */
.timeline::after {
  content: '';
  position: absolute;
  width: 6px;
  background-color: white;
  top: 0;
  bottom: 0;
  left: 50%;
  margin-left: -3px;
}

/* Container around content */
.container {
  padding: 10px 40px;
  position: relative;
  background-color: inherit;
  width: 50%;
}

/* The circles on the timeline */
.container::after {
  content: '';
  position: absolute;
  width: 25px;
  height: 25px;
  right: -17px;
  background-color: white;
  border: 4px solid #FF9F55;
  top: 15px;
  border-radius: 50%;
  z-index: 1;
}

/* Place the container to the left */
.left {
  left: 0;
}

/* Place the container to the right */
.right {
  left: 50%;
}

/* Add arrows to the left container (pointing right) */
.left::before {
  content: " ";
  height: 0;
  position: absolute;
  top: 22px;
  width: 0;
  z-index: 1;
  right: 30px;
  border: medium solid white;
  border-width: 10px 0 10px 10px;
  border-color: transparent transparent transparent white;
}

/* Add arrows to the right container (pointing left) */
.right::before {
  content: " ";
  height: 0;
  position: absolute;
  top: 22px;
  width: 0;
  z-index: 1;
  left: 30px;
  border: medium solid white;
  border-width: 10px 10px 10px 0;
  border-color: transparent white transparent transparent;
}

/* Fix the circle for containers on the right side */
.right::after {
  left: -16px;
}

/* The actual content */
.content {
  padding: 20px 30px;
  background-color: white;
  position: relative;
  border-radius: 6px;
}

/* Media queries - Responsive timeline on screens less than 600px wide */
@media screen and (max-width: 600px) {
  /* Place the timelime to the left */
  .timeline::after {
  left: 31px;
  }
  
  /* Full-width containers */
  .container {
  width: 100%;
  padding-left: 70px;
  padding-right: 25px;
  }
  
  /* Make sure that all arrows are pointing leftwards */
  .container::before {
  left: 60px;
  border: medium solid white;
  border-width: 10px 10px 10px 0;
  border-color: transparent white transparent transparent;
  }

  /* Make sure all circles are at the same spot */
  .left::after, .right::after {
  left: 15px;
  }
  
  /* Make all right containers behave like the left ones */
  .right {
  left: 0%;
  }
}
</style>
</head>
<body>

<?php include('navbar.php');?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-default" style="border-radius: 20px;">
                    <div class="panel-body">
                        <h1><strong>Profil</strong></h1>
                        <hr style="border-top: 5px solid aliceblue;">
                        <p>MAUP adalah organisasi yang dibuat dengan maksud memberi wadah kreasi dan jalinan penghubung bagi mahasiswa dan alumni Universitas Muhammadiyah Prof. Dr. Hamka yang dipelopori oleh mahasiswa aktif fakultas teknik progam studi teknik informatika UHAMKA. Dengan harapan jalinan antara mahasiswa dan alumni UHAMKA terjalin dengan baik dan bermanfaat bagi Universitas Khususnya dan Mahasiswa, alumni umumnya.</p>
                    </div>
                </div>
                <div class="panel panel-default" style="border-radius: 20px;">
                    <div class="panel-body">
                        <h1><strong>Visi & Misi</strong></h1>
                        <hr style="border-top: 5px solid aliceblue;">
                        <p><b>Visi :<b> <br> 1. Menjadi wadah informasi yang bermanfaat bagi mahasiswa, alumni serta universitas <br>2. Menjadi penyalur informasi antar fakultas dan program studi <br>3. Menjadi penyalur informasi kemanusiaan</p>
                        <p><b>Misi : <b> <br> 1. Membuat platform yang ramah, baik, dan bermanfaat bagi semua civitas akademik UHAMKA dan masyarakat </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <h1><strong><center>History</center></strong></h1>
                <hr>
                <div class="timeline" style="margin-bottom: 15px;">
                <div class="container left" style="margin: -4px;">
                    <div class="content">
                    <h2>2021</h2>
                    <p>Website Sistem informasi Selesai dibentuk</div>
                </div>
                <div class="container right" style="margin: 4px;">
                    <div class="content">
                    <h2>2020</h2>
                    <p>Pembentukan Organisasi MAUP</p>
                    </div>
                </div>
                <div class="container left" style="margin: -4px;">
                    <div class="content">
                    <h2>2019</h2>
                    <p>Covid-19 Menyerang Dunia</p>
                    </div>
                </div>
                </div>
            </div>
        </div>
      <div class="row">
        <div class="col-md-12" style="text-align: center;">
          <h1>Our <strong>Team </strong></h1>
          <hr style="border-top:5px solid white; width : 15%">
          <hr style="border-top:5px solid white; width : 30%">
          <div class="col-md-3">
                <img src="asset/img/riky.jpg" style="border-radius: 50%; height:200px; width:200px;">
                <h3>Riky <strong>Ardiansyah</strong></h3>
                <h4><strong>PROGRAMMER</strong></h4>
                  <hr style="border-top: 5px solid aliceblue;">
                  <div style="text-align:left">
                  <h4><i class="fa fa-github fa-fw"></i>rikyardi
                      <i class="fa fa-instagram fa-fw"></i>riky.ardi <br>
                      
                  </h4>
                  </div>   
          </div>
          <div class="col-md-3">
                <img src="asset/img/1520149535334.jpg" style="border-radius: 50%; height:200px; width:200px;">
                <h3>Dafi <strong>Mu'Ammar Z</strong></h3>
                <h4><strong>PROGRAMMER</strong></h4>
                  <hr style="border-top: 5px solid aliceblue;">
                  <div style="text-align: left;">
                      <h4><i class="fa fa-github fa-fw"></i>dafimz
                      <i class="fa fa-instagram fa-fw"></i>dafimz <br>
                  </h4>
                  </div>   
          </div>
          <div class="col-md-3">
                <img src="asset/img/fitra.PNG" style="border-radius: 50%; height:200px; width:200px;">
                <h3>Muhammad <strong>Fitra</strong></h3>
                <h4><strong>UI/UX Design</strong></h4>
                  <hr style="border-top: 5px solid aliceblue;">
                  <div style="text-align: left;">
                  <h4><i class="fa fa-facebook fa-fw"></i>Muhammad Fitra
                      <i class="fa fa-instagram fa-fw"></i>fitramanang 
                      <i class="fa fa-youtube fa-fw"></i>MUHAMMAD FITRA 
                  </h4>   
                  </div>
          </div>
          <div class="col-md-3">
                <img src="asset/img/muzadi.PNG" style="border-radius: 50%; height:200px; width:200px;">
                <h3>Akhmad <strong>Muzadi</strong></h3>
                <h4><strong>UI/UX Design</strong></h4>
                  <hr style="border-top: 5px solid aliceblue;">
                  <div style="text-align: left;">
                  <h4><i class="fa fa-facebook fa-fw"></i>akhmad muzadi
                      <i class="fa fa-instagram fa-fw"></i>muzadi_akh88 
                      <i class="fa fa-youtube fa-fw"></i>akhmad muzadi
                  </h4>   
                  </div>
          </div>
        </div>
      
      </div>
    </div>
    <?php include('footer.php')?>
</body>
</html>
