<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">masalah Read</h2>
        <table class="table">
        <tr><td>Kode Masalah</td><td><?php echo $kode_masalah; ?></td></tr>
	    <tr><td>Isi Pertanyaan</td><td><?php echo $isi_pertanyaan; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('masalah') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>