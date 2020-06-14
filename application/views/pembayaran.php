<body>


  <!-- Navigation -->
  <?php $this->load->view("user/_partials/navbar.php") ?>
<div class="container-fluid" style="margin-top:80px;">
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
      <div class="alert alert-secondary" role="alert">
        <?php
        $grand_total = 0;
        if ($pesanan = $this->cart->contents())
        {
          foreach ($pesanan as $item)
          {
            $grand_total = $grand_total + $item['subtotal'];
          }
          echo "<h3>Total Pesanan Anda : Rp. ".number_format($grand_total,0,',','.');
       ?>
    </div><br><br><br>
    <h4>Masukkan Alamat Pemasangan dan Jenis Pembayaran</h3>
    <form method="post" action="<?php echo base_url() ?>Landing_page/proses_pesanan" >
        <div class="form_group">
          <label>Nama</label>
          <input type="text" name="nama" placeholder="Nama Anda" class="form-control">
        </div>
        <div class="form_group">
          <label>Alamat</label>
          <input type="text" name="alamat" placeholder="Alamat Anda" class="form-control">
        </div>
        <div class="form_group">
          <label>No. Telepon</label>
          <input type="text" name="nama" placeholder="Nomor Anda" class="form-control">
        </div>
        <div class="form-group">
          <label>Pilih Transfer Bank</label>
          <select class="form-control">
            <option>BNI .....</option>
            <option>BRI .....</option>
            <option>BCA .....</option>
            <option>MANDIRI .....</option>
          </select>
        </div>
        <button type="submit" class="btn btn-sm btn-primary">Ajukan Pesanan</button>
    </form>
    <?php
  }
  else
  {
    echo "<h3>Anda Belum Memiliki Pesanan Jasa";
  }
    ?>
  </div>
    <div class="col-md-5"></div>
    <br>
    <br>
  </div>
</div>
