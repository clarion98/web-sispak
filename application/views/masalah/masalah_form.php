<form action="<?php echo $action; ?>" method="post">
        <div class="form-group">
            <label for="varchar">Kode Masalah <?php echo form_error('kode_masalah') ?></label>
            <input type="text" class="form-control" name="kode_masalah" id="kode_masalah" placeholder="Kode Masalah" value="<?php echo $kode_masalah; ?>" />

            <label for="varchar">Isi Pertanyaan <?php echo form_error('isi_pertanyaan') ?></label>
            <input type="text" class="form-control" name="isi_pertanyaan" id="isi_pertanyaan" placeholder="Isi Pertanyaan" value="<?php echo $isi_pertanyaan; ?>" />
        </div>
        <input type="hidden" name="id_masalah" value="<?php echo $id_masalah; ?>" /> 
        <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
        <a href="<?php echo site_url('masalah') ?>" class="btn btn-default">Cancel</a>
    </form>

    