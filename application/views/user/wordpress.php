<body>
<?php $this->load->view("user/_partials/navbar.php") ?>

<div class="container-fluid">
<h3>WordPress</h3>



  <div class="row text-center mt-4">
      <?php foreach ($wordpress as $jasa) : ?>
        <div class="card ml-3 mb-3" style="width: 16rem;">
<img src="<?php echo base_url().'/upload/product/'.$jasa->image ?>" class="card-img-top" alt="...">
<div class="card-body">
  <h5 class="card-title mb-2"><?php echo $jasa->name ?></h5>
  <small><?php echo $jasa->description ?></small><br>
  <span class="badge badge-pill badge-info mb-3"><?php echo number_format($jasa->price, 0,',','.') ?></span><br>
  <?php echo anchor('Landing_page/detail/'.$jasa->product_id,'<div class="btn btn-sm btn-success mt-1">Detail</div>') ?>
</div>
</div>
      <?php endforeach; ?>
  </div>
</div>
