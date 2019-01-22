<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Beranda</title>
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/style.css">
  </head>
  <body style="background: linear-gradient(135deg, #ffffff 0%, #4253f4 100%)">
    <header class="ob">
      <div class="atas">
        <div id="logo">
          <img style="width: 127px;margin-left: 0px;float: left;" src="<?= base_url() ?>assets/beranda.png " alt="">
        </div>
        <nav>
          <ul>
            <li><a href="<?= base_url()?>index.php/welcome/utama"> <img src="<?= base_url() ?>assets/home.png " alt=""> </a></li>
            <li><a href="<?= base_url()?>index.php/welcome/event">  <img src="<?= base_url() ?>assets/calendar.png " alt=""></a></li>
            <li><a href="<?= base_url()?>index.php/welcome/gallery"><img src="<?= base_url() ?>assets/gallery.png " alt=""></a></li>
            <li><a href="<?= base_url()?>index.php/welcome/contact"><img src="<?= base_url() ?>assets/envelope.png " alt=""></a></li>
            <li><a href="<?= base_url()?>index.php/welcome/profil"><img src="<?= base_url() ?>assets/profile.png " alt=""></a></li>
          </ul>
        </nav>

      </div>

    </header>
    <br><br><br>
    <h1 align="center" style="color:black;text-align: left;font-size: 10.3mm;margin-top:
    97px;margin-left: 12px;font-family: sans-serif;">Selamat Datang  <?= $nama_lengkap?> <br> Berperilakulah seperti <?= $jenis_kelamin?> </h1>
<br><br>
    <p style="color: black; font-size: 18px;margin-left: 56px;margin-top: 39px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    <br><br><br><br><br><br><br><br><br><br><br>


  </body>
</html>
