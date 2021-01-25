<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Work & internship</title>
    <?php include('resources.php') ?>
</head>
<style>
    body{
        background-color: #77aa77;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100%25' height='100%25' viewBox='0 0 2 1'%3E%3Cdefs%3E%3ClinearGradient id='a' gradientUnits='userSpaceOnUse' x1='0' x2='0' y1='0' y2='1'%3E%3Cstop offset='0' stop-color='%2377aa77'/%3E%3Cstop offset='1' stop-color='%234fd'/%3E%3C/linearGradient%3E%3ClinearGradient id='b' gradientUnits='userSpaceOnUse' x1='0' y1='0' x2='0' y2='1'%3E%3Cstop offset='0' stop-color='%23cf8' stop-opacity='0'/%3E%3Cstop offset='1' stop-color='%23cf8' stop-opacity='1'/%3E%3C/linearGradient%3E%3ClinearGradient id='c' gradientUnits='userSpaceOnUse' x1='0' y1='0' x2='2' y2='2'%3E%3Cstop offset='0' stop-color='%23cf8' stop-opacity='0'/%3E%3Cstop offset='1' stop-color='%23cf8' stop-opacity='1'/%3E%3C/linearGradient%3E%3C/defs%3E%3Crect x='0' y='0' fill='url(%23a)' width='2' height='1'/%3E%3Cg fill-opacity='0.5'%3E%3Cpolygon fill='url(%23b)' points='0 1 0 0 2 0'/%3E%3Cpolygon fill='url(%23c)' points='2 1 2 0 0 0'/%3E%3C/g%3E%3C/svg%3E");
        background-attachment: fixed;
        background-size: cover;
        /* background by SVGBackgrounds.com */
    }
</style>
<body>

<?php include('navbar.php');?>
    <!-- blok besar -->
    <div class="jumbotron" style="text-align: center; margin: 25px; background: cornsilk;">
        <h1>Mahasiswa Bisa!</h1>
        <p class="lead">Informasi Lowongan kerja & Magang untuk mahasiswa-mahasiswa terbaik UHAMKA</p>
    </div>


<!-- blok magang and pekerjaan -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
        <div style="background-color: #FFFACD;padding:20px;margin: -10px 0px 20px 0px; border-radius:10px; text-align : center">
          <h2>Yuk Magang!</h2>
          <p class="text-danger">Mari Magang demi memenuhi syarat kelulusan</p>
          <p>Magang, atau dikenal dengan sebutan internship adalah penempatan kerja dengan perusahaan atau organisasi yang memberikan pengalaman kerja dan keahlian baru, yang dapat berguna untuk karir masa depan. Tujuan dari magang adalah memberikan kesempatan bagi mahasiswa untuk menerapkan apa yang mereka pelajari di ruang kelas ke dunia riil, supaya mereka lebih siap kerja setelah lulus nanti. </p>
          <p><a class="btn btn-primary" href="yumagang.php" role="button">Lihat Lebih Lanjut &raquo;</a></p>
        </div>
        </div>

        <div class="col-lg-6">
        <div style="background-color: #FFFACD ;padding:20px;margin: -10px 0px 20px 0px; border-radius:10px; text-align: center"> 
            <h2>Yuk Kerja!</h2>
                <p class="text-danger">Semua Bisa Kerja</p>
                <p>Kerja merupakan sesuatu yang dikeluarkan oleh seseorang sebagai profesi, sengaja dilakukan untuk mendapatkan penghasilan. Kerja dapat juga di artikan sebagai pengeluaran energi untuk kegiatan yang dibutuhkan oleh seseorang untuk mencapai tujuan tertentu. Menurut Dr. Franz Von Magnis di dalam Anogara (2009 : 11), pekerjaan adalah “kegiatan yang direncanakan”. Sedangkan Hegel di dalam Anogara (2009 : 12) menambahkan bahwa “inti pekerjaan adalah kesadaran manusia”.</p>
                <a class="btn btn-primary" href="yukerja.php" role="button">Lihat Lebih Lanjut &raquo;</a></p>
                </div>
            </div>
        </div>
    </div>

    <?php include('footer.php') ?>
</body>
</html>