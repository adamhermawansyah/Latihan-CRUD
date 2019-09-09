<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <h2 class="sub-header"><?= $judul ?></h2>
  <div>
    <a href="<?= site_url('karyawan/tambah') ?>" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i>&nbsp; Tambah</a><hr>
  </div>
  <?= $this->session->flashdata('messages'); ?>
  <div class="panel panel-info">
    <div class="panel-heading"><?= $judul ?></div>
    <div class="panel-body">
      <div class="table-responsive">
        <table id="dataTables-examples" class="table table-striped table-bordered table-hover table-condensed">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Jenis Kelamin</th>
              <th>Jabatan</th>
              <th>Nomor Telepon</th>
              <th>Alamat</th>
              <th>Opsi</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
             foreach ($data as $key) { ?>
              <tr>
                <td><?= $no++ ?></td>
                <td><?= $key->nama ?></td>
                <td><?= $key->jenis_kelamin ?></td>
                <td><?= $key->jabatan ?></td>
                <td><?= $key->no_hp ?></td>
                <td><?= $key->alamat ?></td>
                <td>
                  <a onclick="return confirm('Anda yakin ingin edit?');" href="<?= site_url('karyawan/ubah/'.$key->id) ?>" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-edit"></i>&nbsp; Ubah</a>
                  <a onclick="return confirm('Anda yakin ingin hapus?');" href="<?= site_url('karyawan/hapuskaryawan/'.$key->id) ?>" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i>&nbsp; Hapus</a>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>