<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-success fixed-top">
    
      <a class="navbar-brand" href="/jasa/">
      <img src="<?php echo base_url();?>assets1/vendor/logo2.svg" width="30" height="30" alt="Hired.">
      Hired.
      </a>
      <span class="navbar-text mr-3" style="color:white;">
      Find the perfect freelance services for your needs
</span>

      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
        <li class="nav-item">
        <a class="nav-link" style="margin-top:-8px;color:black;" href="<?php $pesanan = 'Daftar Pesanan : '.$this->cart->total_items(). 'items' ?>"></a>
                    <?php $pesanan = 'Daftar Pesanan : '.$this->cart->total_items(). 'items' ?>
                    <?php echo anchor('Landing_page/detail_pesanan',$pesanan) ?>
                  </li>
                  <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('Hal_jasa/about') ?>">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('Hal_jasa') ?>">Jasa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('registrasi') ?>">Sign In</a>
          </li>
        </ul>
        <?php if($this->session->userdata('username')) { ?>
    <li style="list-style-type:none;"><div style="color:white;">Selamat Datang <?php echo $this->session->userdata('username')?></div></li>
    <li class="ml-4" style="list-style-type:none;">
      <?php echo anchor('auth/logout','Logout') ?></li>
  <?php } else { ?>
    <li style="list-style-type:none;"><?php echo anchor('auth/login','Login') ?></li>
  <?php } ?>
      </div>
   
  </nav>
