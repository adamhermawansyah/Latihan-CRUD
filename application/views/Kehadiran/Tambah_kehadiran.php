<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <h2 class="sub-header"><?= $judul ?></h2>
  <div class="col-md-7">
    <form method="POST" action="<?= site_url('kehadiran/simpandata')  ?>" data-parsley-validate="">
      <div class="panel panel-info">
        <div class="panel-heading"><?= $judul ?></div>
        <div class="panel-body">
          <div class="form-group">
            <label>Nama Karyawan</label>
            <select class="form-control" name="id_karyawan" required="">
              <option value="">Pilih</option>
              <?php foreach ($data_karyawan as $key) { ?>
                <option value="<?= $key->id ?>"><?= $key->nama ?></option>
              <?php } ?>
            </select>
          </div>
          <div class="form-group">
            <label>Hari</label>
            <select class="form-control" name="hari" required="">
              <option value="">Pilih</option>
              <option value="Senin">Senin</option>
              <option value="Selasa">Selasa</option>
              <option value="Rabu">Rabu</option>
              <option value="Kamis">Kamis</option>
              <option value="Jum'at">Jum'at</option>
              <option value="Sabtu">Sabtu</option>
            </select>
          </div>
          <div class="form-inline">
            <div class="form-group">
              <label>Tanggal</label>
              <select class="form-control" name="tanggal" required="">
                <option value="">Pilih</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
                <option value="31">31</option>
              </select>
            </div>
            <div class="form-group">
              <select class="form-control" name="bulan" required="">
                <option value="">Pilih</option>
                <option value="Januari">Januari</option>
                <option value="Februari">Februari</option>
                <option value="Maret">Maret</option>
                <option value="April">April</option>
                <option value="Mei">Mei</option>
                <option value="Juni">Juni</option>
                <option value="Juli">Juli</option>
                <option value="Agustus">Agustus</option>
                <option value="September">September</option>
                <option value="Oktober">Oktober</option>
                <option value="November">November</option>
                <option value="Desember">Desember</option>
              </select>
            </div>
            <div class="form-group">
              <select class="form-control" name="tahun" required="">
                <option value="">Pilih</option>
                <option value="2018">2018</option>
                <option value="2019">2019</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label>Jam Datang</label>
            <div class="form-group">
              <select class="form-control" name="jam_datang" required="">
                <option value="">Pilih</option>
                <option value="07:00:00">07:00</option>
                <option value="07:30:00">07:30</option>
                <option value="08:00:00">08:00</option>
                <option value="08:30:00">08:30</option>
                <option value="09:00:00">09:00</option>
                <option value="09:30:00">09:30</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label>Jam Datang</label>
            <div class="form-group">
              <select class="form-control" name="jam_pulang" required="">
                <option value="">Pilih</option>
                <option value="16:00:00">16:00</option>
                <option value="16:30:00">16:30</option>
                <option value="17:00:00">17:00</option>
                <option value="17:30:00">17:30</option>
                <option value="18:00:00">18:00</option>
                <option value="18:30:00">18:30</option>
              </select>
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