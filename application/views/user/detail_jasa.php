<body>
<?php $this->load->view("user/_partials/navbar.php") ?>

<div class="container-fluid">
  <div class="card">
      <h5 class="card-header"> Detail Jasa </h5>
  <div class="card-body">
  <?php foreach($jasa as $js) : ?>
    <div class="row">
      <div class="col-md-4">
        <img src="<?php echo base_url().'/upload/product/'.$js->image ?>" class="card-img-top">
      </div>
      <div class="col-md-8">
        <table class="table">
          <tr>
            <td>Nama Jasa</td>
            <td><strong><?php echo $js->name ?></strong></td>
          </tr>
          <tr>
            <td>Description</td>
            <td><strong><?php echo $js->description ?></strong></td>
          </tr>
          <tr>
            <td>Price</td>
            <td><strong><div class="btn btn-sm btn-info">Rp. <?php echo number_format($js->price,0,',','.') ?></div></strong></td>
          </tr>
        </table>
            <?php echo anchor('kategori/wordpress/','<div class="btn btn-sm btn-dark mt-1">Back</div>') ?>
      </div>
</div>
<?php endforeach; ?>
  </div>
</div>
</div>
