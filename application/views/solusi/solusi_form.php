<form action="<?php echo $action; ?>" method="post">
        <div class="form-group">
            <label for="varchar">Kode Solusi <?php echo form_error('kode_solusi') ?></label>
            <input type="text" class="form-control" name="kode_solusi" id="kode_solusi" placeholder="Kode Solusi" value="<?php echo $kode_solusi; ?>" />

            <label for="varchar">Isi Solusi <?php echo form_error('isi_solusi') ?></label>
            <input type="text" class="form-control" name="isi_solusi" id="isi_solusi" placeholder="Isi Solusi" value="<?php echo $isi_solusi; ?>" />
        </div>
        <input type="hidden" name="id_solusi" value="<?php echo $id_solusi; ?>" /> 
        <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
        <a href="<?php echo site_url('solusi') ?>" class="btn btn-default">Cancel</a>
    </form>