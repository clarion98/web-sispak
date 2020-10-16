<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Halaman Konsultasi</title>
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="shortcut icon" href="favicon_16.ico"/>
    <link rel="bookmark" href="favicon_16.ico"/>
    <!-- site css -->
    <link rel="stylesheet" href="assets/dist/css/site.min.css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,800,700,400italic,600italic,700italic,800italic,300italic" rel="stylesheet" type="text/css">
    <!-- <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'> -->
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="assets/dist/js/site.min.js"></script>
    <style>
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #303641;
        color: #C1C3C6
      }
    </style>
  </head>
  <body>
	<?php
		include ('navbar.php');
	?>
  <div class="container">
      <form class="form-signin" role="form" action="simpan-session.php" method="post">
        <h3 class="form-signin-heading">Identitas User.</h3>
        <div class="form-group">
          <div class="input-group">
            <div class="input-group-addon">
              <i class="glyphicon glyphicon-user"></i>
            </div>
            <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama Anda" autocomplete="off" autofocus />
          </div>
        </div>

        <div class="form-group">
          <div class="input-group">
            <div class="input-group-addon">
              <i class=" glyphicon glyphicon-briefcase"></i>
            </div>
            <input type="text" class="form-control" name="umur" id="umur" placeholder="Masukkan Umur Anda" autocomplete="off" />
          </div>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="konsul">Mulai Konsultasi</button>
        <br>
        <!-- <p>Belum punya akun, Silahkan Registrasi DI SINI</p>
        <a href="app/registrasi" class="btn btn-lg btn-info btn-block">Daftar</a> -->
      </form>
    </div>
    <div class="clearfix"></div>
    <br><br>
    <!--footer-->
    <!-- <div class="site-footer login-footer">
      <div class="container">
        <div class="copyright clearfix text-center">
          <p><b>Bootflat</b>&nbsp;&nbsp;&nbsp;&nbsp;<a href="getting-started.html">Getting Started</a>&nbsp;&bull;&nbsp;<a href="index.html">Documentation</a>&nbsp;&bull;&nbsp;<a href="https://github.com/Bootflat/Bootflat.UI.Kit.PSD/archive/master.zip">Free PSD</a>&nbsp;&bull;&nbsp;<a href="colors.html">Color Picker</a></p>
          <p>Code licensed under <a href="http://opensource.org/licenses/mit-license.html" target="_blank" rel="external nofollow">MIT License</a>, documentation under <a href="http://creativecommons.org/licenses/by/3.0/" rel="external nofollow">CC BY 3.0</a>.</p>
        </div>
      </div>
    </div> -->
  </body>
</html>
  <!--
    <div class="container">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Identitas User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="simpan-session.php" method="post" enctype="multipart/form-data" role="form">
        <div class="modal-body">
          <div class="form-group">
            <label for="message-text" class="col-form-label">Umur :</label>
            <input type="number" name="umur" class="form-control" placeholder="isikan umur anda" required >
          </div>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nama :</label>
            <input type="text" name="nama" class="form-control" id="input-ame" placeholder="isikan nama anda" required autofocus >
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-info">Lanjut</button>
        </div>
      </form>
    </div>
    <div class="clearfix"></div>
    <br><br>
    <!--footer-->
    <!-- <div class="site-footer login-footer">
      <div class="container">
        <div class="copyright clearfix text-center">
          <p><b>Bootflat</b>&nbsp;&nbsp;&nbsp;&nbsp;<a href="getting-started.html">Getting Started</a>&nbsp;&bull;&nbsp;<a href="index.html">Documentation</a>&nbsp;&bull;&nbsp;<a href="https://github.com/Bootflat/Bootflat.UI.Kit.PSD/archive/master.zip">Free PSD</a>&nbsp;&bull;&nbsp;<a href="colors.html">Color Picker</a></p>
          <p>Code licensed under <a href="http://opensource.org/licenses/mit-license.html" target="_blank" rel="external nofollow">MIT License</a>, documentation under <a href="http://creativecommons.org/licenses/by/3.0/" rel="external nofollow">CC BY 3.0</a>.</p>
        </div>
      </div>
    </div> -->
  </body>
</html>