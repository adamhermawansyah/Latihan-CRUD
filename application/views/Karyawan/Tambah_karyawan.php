<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <h2 class="sub-header"><?= $judul ?></h2>
  <div class="col-md-7">
    <form method="POST" action="<?= site_url('karyawan/simpandata')  ?>" data-parsley-validate="">
      <div class="panel panel-info">
        <div class="panel-heading"><?= $judul ?></div>
        <div class="panel-body">
          <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" placeholder="masukkan nama karyawan" required="">
          </div>
          <div class="form-group">
            <label>Jenis Kelamin</label>
            <div class="radio">
              <label>
                <input type="radio" name="jenis_kelamin" id="jenis_kelamin1" value="Pria" required="">
                Pria
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="jenis_kelamin" id="jenis_kelamin2" value="Wanita">
                Wanita
              </label>
            </div>
          </div>
          <div class="form-group">
            <label>Jabatan</label>
            <select class="form-control" name="jabatan" required="">
              <option value="">Pilih</option>
              <option value="Programmer">Programmer</option>
              <option value="Analisis">Analisis</option>
              <option value="Android Dev">Android Dev</option>
              <option value="Bisnis Develop">Bisnis Develop</option>
            </select>
          </div>
          <div class="form-group">
            <label>Nomor Telepon</label>
            <input type="text" name="no_hp" class="form-control" data-parsley-type="integer" minlength="11" placeholder="085xxx" required="">
          </div>
          <div class="form-group">
            <label>Alamat</label>
            <textarea class="form-control" rows="3" name="alamat" placeholder="masukkan alamat karyawan" required=""></textarea>
          </div>
        </div>
        <div class="panel-footer">
          <button type="submit" class="btn btn-default">&nbsp;Simpan</button> 
          <button type="reset" class="btn btn-danger">&nbsp;Batal</button> 
        </div>
      </div>
    </form>  
  </div>
</div>