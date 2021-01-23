<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yuk Kerja</title>
    <?php include('resources.php') ?>
</head>
<body>
<style>
    body{
        background-color: #77aa77 ;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100%25' height='100%25' viewBox='0 0 2 1'%3E%3Cdefs%3E%3ClinearGradient id='a' gradientUnits='userSpaceOnUse' x1='0' x2='0' y1='0' y2='1'%3E%3Cstop offset='0' stop-color='%2377aa77'/%3E%3Cstop offset='1' stop-color='%234fd'/%3E%3C/linearGradient%3E%3ClinearGradient id='b' gradientUnits='userSpaceOnUse' x1='0' y1='0' x2='0' y2='1'%3E%3Cstop offset='0' stop-color='%23cf8' stop-opacity='0'/%3E%3Cstop offset='1' stop-color='%23cf8' stop-opacity='1'/%3E%3C/linearGradient%3E%3ClinearGradient id='c' gradientUnits='userSpaceOnUse' x1='0' y1='0' x2='2' y2='2'%3E%3Cstop offset='0' stop-color='%23cf8' stop-opacity='0'/%3E%3Cstop offset='1' stop-color='%23cf8' stop-opacity='1'/%3E%3C/linearGradient%3E%3C/defs%3E%3Crect x='0' y='0' fill='url(%23a)' width='2' height='1'/%3E%3Cg fill-opacity='0.5'%3E%3Cpolygon fill='url(%23b)' points='0 1 0 0 2 0'/%3E%3Cpolygon fill='url(%23c)' points='2 1 2 0 0 0'/%3E%3C/g%3E%3C/svg%3E");
        background-attachment: fixed;
        background-size: cover;
        /* background by SVGBackgrounds.com */
    }
    </style>
<body>
<?php include('navbar.php');?>

<div class="container">
  <div class="page-header">
    <h1>Daftar Tempat Kerja</h1>
    </div>
    
    <div class="container-fluid">

    <div class="row" style="background-color: honeydew; padding:50px ;margin: 25px 0px; border-radius:15px; text-align:left">
            <div class="col-xs-6 col-lg-4">
              <h3>Junior Engineer</h3>
              <p><span class="text-muted">Wiguna Sarana Sejahtera PT - Jakarta Raya <br>Design, control, and implement electrical systems and products <br>Ensure that installations and applications are in line with customer needs and safety standards</span></p>
              <p><button  class="btn btn-info" data-toggle="collapse" data-target="#wiguna"><i class="fa fa-eye fa-fw"></i> View Details</button></p>
              <div id="wiguna" class="collapse"><strong><h4>Persyaratan: <br>1. Min S1 in Electrical Engineering<br>2. Min 2-3 years of experience in electrical engineering<br>3. Under 30 years old<br>4. Good Communication Skill<br>5. Able to speak and write in English<br>6. Have a good knowledge on LV MCC <br>7. Possess a good knowledge on understanding single line diagram</h4></strong>
              <br>
              <br>
              <p><a class="btn btn-primary" href="#" role="button">Lamar Sekarang</a></p>
              </div>
            </div><!--/.col-xs-6.col-lg-4-->
            <div class="col-xs-6 col-lg-4">
              <h3>Public Relations</h3>
              <p><span class="text-muted">Agrodana Bandung - Bandung <br> Marketing, PR</span></p>
              <p><button  class="btn btn-info" data-toggle="collapse" data-target="#agrodana"><i class="fa fa-eye fa-fw"></i> View Details</button></p>
              <div id="agrodana" class="collapse"><strong><h4>Persyaratan: <br>1. Cantik dan tampan <br>2. Maksimal usia 30 tahun <br>3. Pendidikan minimal D3 dan S1 <br>4. Penampilan rapi dan sopan <br>5. Bisa bekerja di dalamm team</h4></strong>
              <br>
              <br> 
              <p><a class="btn btn-primary" href="#" role="button">Lamar Sekarang</a></p>
            </div>
            </div><!--/.col-xs-6.col-lg-4-->

            <div class="col-xs-6 col-lg-4">
              <h3>Analis Laboratorium Mikrobiologi</h3>
              <p><span class="text-muted">Yayasan Kesehatan Sumber Waras - Jakarta Barat <br> Health and Medical, Technical Assistant</span></p>
              <p><button  class="btn btn-info" data-toggle="collapse" data-target="#megasetia"><i class="fa fa-eye fa-fw"></i> View Details</button></p>
              <div id="megasetia" class="collapse"><strong><h4>Persyaratan: <br>1. Pendidikan minimal D3 Analis Kesehatan <br>2. Diutamakan memiliki pengalaman di bagian laboratorium klinik dan mikrobiologi. <br>3. Memiliki STR yang masih berlaku <br>4. Mampu bekerja secara tim di laboratorium klinik <br>5. Jujur, teliti, bertanggung jawab, dan disiplin <br>6. Laki - Laki & Perempuan Akan ditempatkan di lab.mikrobiologi (utama) dan bersedia membantu pengambilan darah di bagian lab.klinik.
              <br>
              <br> 
              <p><a class="btn btn-primary" href="#" role="button">Lamar Sekarang</a></p>
            </div>
            </div><!--/.col-xs-6.col-lg-4-->
</div>
</div><!--/row--> 
</div>

    <?php include('footer.php') ?>
    
</body>
</html>