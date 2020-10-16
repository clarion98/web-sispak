<form action="<?php echo $action; ?>" method="post">
            <div class="modal-body">
                <div class="form-group">
                    <label for="varchar">Nama <?php echo form_error('nama') ?></label>
                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama anda" value="<?php echo $nama; ?>" />
                  </div>
                </div>
                <input type="hidden" name="id_konsultasi" value="<?php echo $id_konsultasi; ?>" /> 
                <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
                <a href="<?php echo site_url('konsultasi') ?>" class="btn btn-default">Cancel</a>
              </form>