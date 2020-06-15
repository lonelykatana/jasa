<body>


  <!-- Navigation -->
  <?php $this->load->view("user/_partials/navbar.php") ?>
<div class="container-fluid"  style="margin-top:80px;">

  <h3>Daftar Pesanan</h3>
  <table class="table table-bordered table-stripped table-hover">
    <tr>
      <th>No</th>
      <th>Name </th>
      <th>Price</th>
    </tr>

    <?php
    $no=1;
    foreach ($this->cart->contents() as $items) : ?>
    <tr>
      <td><?php echo $no++ ?></td>
      <td><?php echo $items['name'] ?></td>
      <td>Rp. <?php echo number_format($items['price'], 0,',','.') ?></td>
    </tr>

  <?php endforeach; ?>
  <tr>
    <td colspan="2">Total</td>
    <td align-text="right">Rp. <?php echo number_format($this->cart->total(), 0,',','.') ?></td>
  </tr>
  </table>

  <div align-text="right">
    <a href="<?php echo base_url('Landing_page/hapus_pesanan') ?>">
      <div class="btn btn-sm btn-danger">Hapus Pesanan</div></a>
      <a href="<?php echo base_url('Hal_jasa') ?>">
        <div class="btn btn-sm btn-primary">Lanjut Pemesanan</div></a>
        <a href="<?php echo base_url('Landing_page/pembayaran') ?>">
          <div class="btn btn-sm btn-success">Lakukan Pembayaran Tagihan</div></a>

</div>
</div>
