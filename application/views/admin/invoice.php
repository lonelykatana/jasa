<body class="sb-nav-fixed">
    <?php $this->load->view("admin/_partials/navbar.php") ?>
        <div id="layoutSidenav">
        <?php $this->load->view("admin/_partials/sidebar.php") ?>
            <div id="layoutSidenav_content">
                <main>

<div class="container-fluid">
<h1 class="mt-4">Dashboard</h1>
                        <?php $this->load->view("admin/_partials/breadcrumb.php") ?>
  <h4>Invoice Pemesanan Jasa</h4>
  <table class="table table-bordered table-hover table-striped">
    <tr>
      <th>Id Jasa</th>
      <th>Nama Pemesan</th>
      <th>Alamat</th>
      <th>Tanggal Pemesanan</th>
      <th>Batas Pembayran</th>
      <th>Aksi</th>
    </tr>

    <?php foreach ($invoice as $inv): ?>
      <tr>
        <td><?php echo $inv->id ?></td>
          <td><?php echo $inv->nama ?></td>
            <td><?php echo $inv->alamat ?></td>
              <td><?php echo $inv->tgl_pesan ?></td>
                <td><?php echo $inv->batas_pembayaran ?></td>
                <td><?php echo anchor('admin/detail/'.$inv->id, '<div class="btn btn-sm btn-primary">Details</div>') ?></td>
      </tr>
    <?php endforeach; ?>
  </table>

</div>
</main>
<?php $this->load->view("admin/_partials/footer.php") ?>
            </div>
        </div>
        <?php $this->load->view("admin/_partials/js.php") ?>
    </body>
</html>         