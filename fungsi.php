<?php

function answer($kode){
    if($kode=='M1'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=M1-a'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=S0'>Tidak</a>";
    }

        if($kode=='M1-a'){
            echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=M1-c'>Ya</a>";
            echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=M1-b'>Tidak</a>";
        }

            if($kode=='M1-c'){
                echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=M1-f'>Ya</a>";
                echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=M1-d'>Tidak</a>";
            }

                if($kode=='M1-f'){
                    echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=S2'>Ya</a>";
                    echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=M1-g'>Tidak</a>";
                }

                    if($kode=='M1-g'){
                        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=S3'>Ya</a>";
                        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=S4'>Tidak</a>";
                    }

                if($kode=='M1-d'){
                    echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=S1'>Ya</a>";
                    echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=S5'>Tidak</a>";
                }

            if($kode=='M1-b'){
                echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=M1-h'>Ya</a>";
                echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=S0'>Tidak</a>";
            }

                if($kode=='M1-h'){
                    echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=M1-i'>Ya</a>";
                    echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=M1-k'>Tidak</a>";
                }

                    if($kode=='M1-i'){
                        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=S6'>Ya</a>";
                        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=M1-j'>Tidak</a>";
                    }

                        if($kode=='M1-j'){
                            echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=S7'>Ya</a>";
                            echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=S8'>Tidak</a>";
                        }
                    
                    if($kode=='M1-k'){
                        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=S9'>Ya</a>";
                        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=S10'>Tidak</a>";
                    }
                if($kode=='M1-l'){
                    echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=S0'>Ya</a>";
                    echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=S0'>Tidak</a>";
                }


    
    

}

function kesimpulan($rumah){
    include 'koneksi.php';
    $sql = "SELECT * from kesimpulan WHERE solusi='$rumah' AND status='setuju'";
    $data = mysqli_query($connect,$sql);
    while ($row = mysqli_fetch_assoc($data)) {
        echo '<p>-'.$row['fakta'].'</p>';
    }  
}
function fakta($gambar){
    include 'koneksi.php';
    $sql = "SELECT * from fakta WHERE kode_fakta='$gambar'";
    $data = mysqli_query($connect,$sql);
    while ($row = mysqli_fetch_assoc($data)) {
        echo '<p>-'.$row['isi_fakta'].'</p>';
    }  
}
function gambaran($desain){
    include 'koneksi.php';
    $sql = "SELECT * from desain WHERE kode_desain='$desain'";
    $data = mysqli_query($connect,$sql);
    while ($row = mysqli_fetch_assoc($data)) {
        echo '<p>-'.$row['nama_desain'].'</p>';
        echo  "<img src='image/".$row['kode_desain']."' width='100px' height='100px'/>";
    }
}

function solusi($kode){  
    if ($kode=='S0') {
        $rumah = "Solusi 0";
        kesimpulan($rumah);
        $rumah = "Solusi 0-0";
        kesimpulan($rumah);  
    }  
    if ($kode=='S1') {
        $rumah = "Solusi 1";
        kesimpulan($rumah);  
        $rumah = "Solusi 0-0";
        kesimpulan($rumah);  
    }
    if ($kode=='S2') {
        $rumah = "Solusi 2";
        kesimpulan($rumah);
        $rumah = "Solusi 0-0";
        kesimpulan($rumah); 
    }
    if ($kode=='S3') {
        $rumah = "Solusi 3";
        kesimpulan($rumah);
        $rumah = "Solusi 0-0";
        kesimpulan($rumah); 
    }
    if ($kode=='S4') {
        $rumah = "Solusi 4";
        kesimpulan($rumah);
        $rumah = "Solusi 0-0";
        kesimpulan($rumah); 
    }
    if ($kode=='S5') {
        $rumah = "Solusi 5";
        kesimpulan($rumah);
        $rumah = "Solusi 0-0";
        kesimpulan($rumah); 
    }
    if ($kode=='S6') {
        $rumah = "Solusi 6";
        kesimpulan($rumah);
        $rumah = "Solusi 0-0";
        kesimpulan($rumah); 
    }
    if ($kode=='S7') {
        $rumah = "Solusi 7";
        kesimpulan($rumah);
        $rumah = "Solusi 0-0";
        kesimpulan($rumah); 
    }
    if ($kode=='S8') {
        $rumah = "Solusi 8";
        kesimpulan($rumah);
        $rumah = "Solusi 0-0";
        kesimpulan($rumah); 
    }
    if ($kode=='S9') {
        $rumah = "Solusi 9";
        kesimpulan($rumah);
        $rumah = "Solusi 0-0";
        kesimpulan($rumah); 
    }
    
}

function hasil($kode){
    if ($kode=='S0') {
        $rumah = "Solusi 0";
        kesimpulan($rumah);
        $rumah = "Solusi 0-0";
        kesimpulan($rumah); 
    } 
    if ($kode=='S1') {
        $desain = "D1.jpg";
        gambaran($desain);     
        $desain = "D1-2.jpg";
        gambaran($desain);     
    } 
    if ($kode=='S2') {
        $desain = "D2.jpg";
        gambaran($desain);     
        $desain = "D2-2.jpg";
        gambaran($desain);     
    } 
    if ($kode=='S3') {
        $desain = "D3.jpg";
        gambaran($desain);     
        $desain = "D3-2.jpg";
        gambaran($desain);     
    }
    if ($kode=='S4') {
        $desain = "D4.jpg";
        gambaran($desain);     
    } 
    if ($kode=='S5') {
        $desain = "D5.jpg";
        gambaran($desain); 
        $desain = "D5-2.jpg";
        gambaran($desain);     
    }
    if ($kode=='S6') {
        $desain = "D6.jpg";
        gambaran($desain);   
    } 
    if ($kode=='S7') {
        $desain = "D7.jpg";
        gambaran($desain);   
    }   
    if ($kode=='S8') {
        $desain = "D8.jpg";
        gambaran($desain);     
        $desain = "D8-2.jpg";
        gambaran($desain);     
    }
    if ($kode=='S9') {
        $desain = "D9.jpg";
        gambaran($desain);     
        $desain = "D9-2.jpg";
        gambaran($desain);     
    }
}

?>