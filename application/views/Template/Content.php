<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('template/header') ?>
<body>
  <?php $this->load->view('template/navbar') ?>
  <div class="container-fluid">
    <div class="row">
      <?php $this->load->view('template/sidebar') ?>
      <?php $this->load->view($content) ?>
    </div>
  </div>
  <?php $this->load->view('template/footer') ?>
</body>
</html>