<body class="sb-nav-fixed">
    <?php $this->load->view("admin/_partials/navbar.php") ?>
        <div id="layoutSidenav">
        <?php $this->load->view("admin/_partials/sidebar.php") ?>
            <div id="layoutSidenav_content">
                <main>

<div class="container-fluid">
  <h4>Detail Pesanan Jasa <div class="btn btn-sm btn-success">No. Invoice : <?php echo $invoice->id ?></h4>
  <table class="table table-bordered table-hover table-striped">
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Price</th>
      <th>SubTotal</th>
    </tr>
    <?php
    $total=0;
    foreach ($pesanan as $psn) :
      $subtotal = $psn->price;
      $total += $subtotal;
     ?>
     <tr>
       <td><?php echo $psn->product_id ?></td>
       <td><?php echo $psn->name ?></td>
       <td><?php echo number_format($psn->price,0,',','.') ?></td>
        <td><?php echo number_format($subtotal,0,',','.') ?></td>

     </tr>
   <?php endforeach; ?>
   <tr>
     <td colspan="3" align-text="right">Grand Total</td>
     <td align-text="right">Rp. <?php echo number_format($total,0,',','.') ?></td>
   </tr>

  </table>
  <a href="<?php echo base_url('admin/Overview/index') ?>" <div class="btn btn-sm btn-primary">Back</div></a>
</div>
</main>
<?php $this->load->view("admin/_partials/footer.php") ?>
            </div>
        </div>
        <?php $this->load->view("admin/_partials/js.php") ?>
    </body>
</html>