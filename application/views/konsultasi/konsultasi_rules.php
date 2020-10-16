<?php

function answer($kode_masalah){
    if($kode_masalah=='M1'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='konsultasi_input.php?kode_masalah=M1.1'>1 Lantai</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='konsultasi_input.php?kode_masalah=M1.2'>2 Lantai</a>";
    }

    if($kode_masalah=='M1.1'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='konsultasi_input.php?kode_masalah=M1.1.1'>1 Kamar Tidur</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='konsultasi_input.php?kode_masalah=M1.1.2'>2 Kamar Tidur</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='konsultasi_input.php?kode_masalah=M1.1.3'>3 Kamar Tidur</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='konsultasi_input.php?kode_masalah=M1.1.4'>4 Kamar Tidur</a>";
    }

    if($kode_masalah=='M.1.1.1'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='konsultasi_input.php?kode_masalah=M1.1.1.1'>5</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='konsultasi_input.php?kode_masalah=M1.1.1.2'>6</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='konsultasi_input.php?kode_masalah=M1.1.1.3'>8</a>";
    }

    if($kode_masalah=='M1.1.1.1'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode_masalah=S1'>10</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode_masalah=S2'>12</a>";
    }
    if($kode_masalah=='M1.1.1.2'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode_masalah=S3'>10</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode_masalah=S4'>16</a>";
    }
    if($kode_masalah=='M1.1.1.3'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode_masalah=S5'>15</a>";
    }

    if($kode_masalah=='M1.1.2'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='konsultasi_input.php?kode_masalah=M1.1.2.1'>5</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='konsultasi_input.php?kode_masalah=M1.1.2.2'>6</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='konsultasi_input.php?kode_masalah=M1.1.2.3'>7</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='konsultasi_input.php?kode_masalah=M1.1.2.4'>8</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='konsultasi_input.php?kode_masalah=M1.1.2.5'>9</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='konsultasi_input.php?kode_masalah=M1.1.2.6'>10</a>";
    }

    if($kode_masalah=='M1.1.2.1'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode_masalah=S6'>12</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode_masalah=S7'>15</a>";
    }
    if($kode_masalah=='M1.1.2.2'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode_masalah=S8'>10</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode_masalah=S9'>11</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode_masalah=S10'>12</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode_masalah=S11'>15</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode_masalah=S12'>16</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode_masalah=S13'>17</a>";
    }
    if($kode_masalah=='M1.1.2.3'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode_masalah=S14'>11</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode_masalah=S15'>12</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode_masalah=S16'>15</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode_masalah=S17'>17</a>";
    }
    if($kode_masalah=='M1.1.2.4'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode_masalah=S18'>15</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode_masalah=S19'>18</a>";
    }
    if($kode_masalah=='M1.1.2.5'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode_masalah=S20'>15</a>";
    }
    if($kode_masalah=='M1.1.2.6'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode_masalah=S21'>20</a>";
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

function solusi($kode_masalah){    
    if ($kode_masalah=='S1') {
        $rumah = "gambar rumah 1 lantai 1 kamar 5X10";
        kesimpulan($rumah);        
    }
    if ($kode_masalah=='S2') {
        $rumah = "gambar rumah 1 lantai 1 kamar 5X12";
        kesimpulan($rumah);
    }
    if ($kode_masalah=='S3') {
        $rumah = "gambar rumah 1 lantai 1 kamar 6X10";
        kesimpulan($rumah);
    }
    if ($kode_masalah=='S4') {
        $rumah = "gambar rumah 1 lantai 1 kamar 6X16";
        kesimpulan($rumah);
    }
    if ($kode_masalah=='S5') {
        $rumah = "gambar rumah 1 lantai 1 kamar 8X15";
        kesimpulan($rumah);
    }

    if ($kode_masalah=='S6') {
        $rumah = "gambar rumah 1 lantai 2 kamar 5X12";
        kesimpulan($rumah);
    }
    if ($kode_masalah=='S7') {
        $rumah = "gambar rumah 1 lantai 2 kamar 5X15";
        kesimpulan($rumah);
    }
    if ($kode_masalah=='S8') {
        $rumah = "gambar rumah 1 lantai 2 kamar 6X10";
        kesimpulan($rumah);
    }
    if ($kode_masalah=='S9') {
        $rumah = "gambar rumah 1 lantai 2 kamar 6X11";
        kesimpulan($rumah);
    }
    if ($kode_masalah=='S10') {
        $rumah = "gambar rumah 1 lantai 2 kamar 6X12";
        kesimpulan($rumah);
    }
    if ($kode_masalah=='S11') {
        $rumah = "gambar rumah 1 lantai 2 kamar 6X15";
        kesimpulan($rumah);
    }
     if ($kode_masalah=='S12') {
        $rumah = "gambar rumah 1 lantai 2 kamar 6X16";
        kesimpulan($rumah);
    }
    if ($kode_masalah=='S13') {
        $rumah = "gambar rumah 1 lantai 2 kamar 6X17";
        kesimpulan($rumah);
    }
    if ($kode_masalah=='S14') {
        $rumah = "gambar rumah 1 lantai 2 kamar 7X11";
        kesimpulan($rumah);
    }
    if ($kode_masalah=='S15') {
        $rumah = "gambar rumah 1 lantai 2 kamar 7X12";
        kesimpulan($rumah);
    }
    if ($kode_masalah=='S16') {
        $rumah = "gambar rumah 1 lantai 2 kamar 7X15";
        kesimpulan($rumah);        
    }
    if ($kode_masalah=='S17') {
        $rumah = "gambar rumah 1 lantai 2 kamar 7X17";
        kesimpulan($rumah);
    } 
    if ($kode_masalah=='S18') {
        $rumah = "gambar rumah 1 lantai 2 kamar 8X15";
        kesimpulan($rumah);
    }
    if ($kode_masalah=='S19') {
        $rumah = "gambar rumah 1 lantai 2 kamar 8X18";
        kesimpulan($rumah);
    }
    if ($kode_masalah=='S20') {
        $rumah = "gambar rumah 1 lantai 2 kamar 9X15";
        kesimpulan($rumah);
    }
     if ($kode_masalah=='S21') {
        $rumah = "gambar rumah 1 lantai 2 kamar 10X20";
        kesimpulan($rumah);
    }
}

?>