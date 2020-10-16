<div class="card text-white bg-info mb-3">
          <h5 class="card-header">Pertanyaan</h5>
          <div class="card-body text-center ukuran-30">

            <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data" role="form">

                <?php
                foreach ($konsultasi_data as $konsultasi)
                {
                    
                }
                $kode_masalah='M1';
                session_start();
                echo "<p>Hai, ". $this->session->userdata('nama')."</p>";
                    
                    if(isset($_GET['kode_masalah'])){
                        $kode_masalah=$_GET['kode_masalah'];
                    }

                    $sql = "SELECT * from masalah WHERE kode_masalah='$kode_masalah'";
                    $data = mysqli_query($connect,$sql);
                    $row = mysqli_fetch_assoc($data);     
                ?>
                
                <label for="exampleFormControlInput1"><?php echo $row['isi_pertanyaan']; ?></label>
                
                <br>
                <div class="option">
                    <?php 
                        include "konsultasi_rules.php";
                        answer($kode_masalah);                    
                    ?>
                    
                   
                    
                </div>
                

            </form>

          </div>
        </div>