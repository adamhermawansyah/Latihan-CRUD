<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <h2 class="sub-header"><?= $judul ?></h2>
  <div class="col-md-7">
    <form method="POST" action="<?= site_url('karyawan/ubahdata')  ?>" data-parsley-validate="">
      <div class="panel panel-info">
        <div class="panel-heading"><?= $judul ?></div>
        <div class="panel-body">
          <div class="form-group">
            <label>Nama</label>
            <input type="hidden" name="id" class="form-control" value="<?= $data->id ?>">
            <input type="text" name="nama" class="form-control" value="<?= $data->nama ?>" placeholder="masukkan nama karyawan" required="">
          </div>
          <div class="form-group">
            <label>Jenis Kelamin</label>
            <div class="radio">
              <label>
                <input type="radio" name="jenis_kelamin" id="jenis_kelamin1" value="Pria" required="" <?= $data->jenis_kelamin == "Pria" ? "checked" : "" ?>>
                Pria
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="jenis_kelamin" id="jenis_kelamin2" value="Wanita" <?= $data->jenis_kelamin == "Wanita" ? "checked" : "" ?>>
                Wanita
              </label>
            </div>
          </div>
          <div class="form-group">
            <label>Jabatan</label>
            <select class="form-control" name="jabatan" required="">
              <option value="">Pilih</option>
              <option value="Programmer" <?= $data->jabatan == "Programmer" ? "selected" : "" ?>>Programmer</option>
              <option value="Analisis" <?= $data->jabatan == "Analisis" ? "selected" : "" ?>>Analisis</option>
              <option value="Android Dev" <?= $data->jabatan == "Android Dev" ? "selected" : "" ?>>Android Dev</option>
              <option value="Bisnis Develop" <?= $data->jabatan == "Bisnis Develop" ? "selected" : "" ?>>Bisnis Develop</option>
            </select>
          </div>
          <div class="form-group">
            <label>Nomor Telepon</label>
            <input type="text" name="no_hp" class="form-control" value="<?= $data->no_hp ?>" data-parsley-type="integer" minlength="11" placeholder="085xxx" required="">
          </div>
          <div class="form-group">
            <label>Alamat</label>
            <textarea class="form-control" rows="3" name="alamat" placeholder="masukkan alamat karyawan" required=""><?= $data->alamat ?></textarea>
          </div>
        </div>
        <div class="panel-footer">
          <button type="submit" class="btn btn-default">&nbsp;Ubah</button> 
          <button type="reset" class="btn btn-danger">&nbsp;Batal</button> 
        </div>
      </div>
    </form>  
  </div>
</div>