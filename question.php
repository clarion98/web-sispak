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
        color: #1E90FF;
      }
    </style>
  </head>
  <body>
    <?php include ('navbar.php'); ?>
    <div class="container">
        <main class="batas-atas">
            <div class="card text-green bg-info mb-3">
            <h5 class="card-header"><font color="red"><center>Pertanyaan Konsultasi</center></font></h5>
            <div class="card-body text-center ukuran-30">

                <form method="post" action="input-ketampung.php" enctype="multipart/form-data" role="form" >

                    <?php
                    include ('koneksi.php');
                    $kode='M1';
                    session_start();
                    echo "<p>Hai, ".$_SESSION['nama']." (".$_SESSION['umur']." th)</p>";
                        
                        if(isset($_GET['kode'])){
                            $kode=$_GET['kode'];
                        }

                        $sql = "SELECT * from masalah WHERE kode_masalah='$kode'";
                        $data = mysqli_query($connect,$sql);
                        $row = mysqli_fetch_assoc($data);     
                    ?>
                    
                    <label for="exampleFormControlInput1" fg="#1E90FF" ><?php echo $row['isi_pertanyaan']; ?></label>
                    
                    <br>
                    <div class="option">
                        <?php 
                            include "fungsi.php";
                            answer($kode);                    
                        ?>
                        
                    
                        
                    </div>
                    

                </form>

            </div>
            </div>
        </main>
    </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://getbootstrap.com/docs/4.1/dist/js/bootstrap.min.js"></script>
</body>
</html>