<div class="row">
  <div class="col-md-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title" style="padding-top:0; margin-top:0; color:#f00;"> Edit pembelajaran</h3>
          <?php 
            $ambil=$koneksi->query("SELECT * FROM t_pembelajaran WHERE NIS='$_GET[nis]'");
            $pecah=$ambil->fetch_assoc();
           ?>
           <form method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label>NIS</label>
              <input type="number" class="form-control" name="nis"  value="<?php echo $pecah['NIS']; ?>"> 
            </div>
            <div class="form-group">
              <label>Kode Pelajaran</label>
              <input type="text" class="form-control" name="kp" value="<?php echo $pecah['Kode_pel']; ?>">
            </div>
            <div class="form-group">
              <label>NIP</label>
              <input type="text" class="form-control" name="nip" value="<?php echo $pecah['NIP']; ?>">
            </div>
            <div class="form-group">
              <label>Nilai</label>
              <input type="text" class="form-control" name="nilai" value="<?php echo $pecah['Nilai']; ?>">
            </div>
              <button class="btn btn-primary" name="edit"><i class="fa fa-save"></i> Simpan</button>
              <a href="index.php?page=pembelajaran" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Kembali ke pembelajaran</a>
           </form>
            <?php 
              if (isset($_POST['edit'])) 
              {
                # code...
                $koneksi->query("UPDATE t_pembelajaran SET NIS='$_POST[nis]',kode_pel='$_POST[kp]',NIP='$_POST[nip]' ,Nilai='$_POST[nilai]'WHERE NIS='$_GET[nis]'");

                echo "<script>alert('Data pembelajran Telah Diedit');</script>";

              }
             ?>
      </div>
    </div>
  </div>
</div>