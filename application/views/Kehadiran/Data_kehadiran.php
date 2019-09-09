<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <h2 class="sub-header"><?= $judul ?></h2>
  <div>
    <a href="<?= site_url('kehadiran/tambah') ?>" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i>&nbsp; Tambah</a><hr>
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
              <th>Hari, Tanggal</th>
              <th>Jam Datang</th>
              <th>Jam Pulang</th>
              <th>Jam Kerja</th>
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
                <td><?= $key->hari .', '. $key->tanggal ?></td>
                <td><?= $key->jam_datang ?></td>
                <td><?= $key->jam_pulang ?></td>
                <td><?= $key->jam_kerja ?></td>
                <td>
                  <a onclick="return confirm('Anda yakin ingin edit?');" href="<?= site_url('kehadiran/ubah/'.$key->id) ?>" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-edit"></i>&nbsp; Ubah</a>
                  <a onclick="return confirm('Anda yakin ingin hapus?');" href="<?= site_url('kehadiran/hapuskehadiran/'.$key->id) ?>" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i>&nbsp; Hapus</a>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>