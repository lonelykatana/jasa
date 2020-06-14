

<body>


  <!-- Navigation -->
  <?php $this->load->view("user/_partials/navbar.php") ?>

  <header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item active" style="background-image: url('assets1/vendor/slide1.jpg')">
          <div class="carousel-caption d-none d-md-block">
            <h3>Need help?</h3>
         
          </div>
        </div>
        <!-- Slide Two - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('assets1/vendor/slide2.jpg')">
          <div class="carousel-caption d-none d-md-block">
            <h3>Look no further</h3>
            
          </div>
        </div>
        <!-- Slide Three - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('assets1/vendor/slide4.jpg')">
          <div class="carousel-caption d-none d-md-block">
            <h3>You're here now</h3>
           
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </header>

  <!-- Page Content -->
  <div class="container" style="margin-top:80px;">
    <h3 class="my-4">Popular professional services</h3>
    <!-- Portfolio Section -->
    <div class="card-deck">
    <div class="card">
    <img class="card-img"   src="<?php echo base_url();?>assets1/vendor/wordpress2.jpg" width="229" height="300" alt="Card image">
    <div class="card-img-overlay">
    <p class="card-text" style="color:white;">Customize your website</p>
    <h5 class="card-title" style="color:white;margin-top:-20px">WordPress</h5>
  </div>
    </div>
    <div class="card">
    <img class="card-img" src="<?php echo base_url();?>assets1/vendor/logodesign.jpg" width="229" height="300" alt="Card image">
    <div class="card-img-overlay">
    <p class="card-text" style="color:white;">Build your brand</p>
    <h5 class="card-title" style="color:white;margin-top:-20px">Logo Design</h5>
  </div>
   </div>
   <div class="card">
    <img class="card-img-top" src="<?php echo base_url();?>assets1/vendor/game.jpg" width="229" height="300" alt="Card image">
    <div class="card-img-overlay">
    <p class="card-text" style="color:white;">Make your own game</p>
    <h5 class="card-title" style="color:white;margin-top:-20px">Game Development</h5>
  </div>
    
  </div>
  <div class="card">
    <img class="card-img-top" src="<?php echo base_url();?>assets1/vendor/web.jpg" width="229" height="300" alt="Card image">
    <div class="card-img-overlay">
    <p class="card-text" style="color:white;">Create your website</p>
    <h5 class="card-title" style="color:white;margin-top:-20px">Web Programming</h5>
  </div>
  </div>
</div>
</div>
    <!-- /.row -->

    <!-- Features Section -->
    <div class="row" style="margin-top:80px;">
      <div class="col-lg-6">
        <h2>Get work done faster, with confidence</h2>
        <ul>
          <li><h6>Payment protection, guaranteed</h6>
        <p>Payment is released to the freelancer once you’re pleased and approve the work you get.</p></li>
        <li><h6>Know the price up front</h6>
        <p>Find any service within minutes and know exactly what you’ll pay. No hourly rates, just a fixed price.</p></li>
        <li><h6>We’re here for you 24/7</h6>
        <p>Reach out to us at any time! We have your back, from answering your questions to resolving issues.</p></li>
        </ul>
        
      </div>
      <div class="col-lg-6">
        <img class="img-fluid rounded" src="<?php echo base_url();?>assets1/vendor/fitur1.jpg" alt="">
      </div>
    </div>
    <!-- /.row -->
     <!-- project -->
     <div class="container" style="margin-top:100px;">
    <h3 class="my-4">Get inspired with projects made by our freelancers</h3>
    <!-- Portfolio Section -->
    <div class="card-deck">
    <div class="card">
    <img class="card-img-top"   src="<?php echo base_url();?>assets1/vendor/projectwordpress.png" width="229" height="300" alt="Card image">
    <div class="card-body">
    <h5 class="card-title">WordPress</h5>
    <p class="card-text">by <i>Erick</i></p>
  </div>
    </div>
    <div class="card">
    <img class="card-img-top"   src="<?php echo base_url();?>assets1/vendor/projectdesktop.png" width="229" height="300" alt="Card image">
    <div class="card-body">
    <h5 class="card-title">Desktop App</h5>
    <p class="card-text">by <i>Mutiha</i></p>
  </div>
   </div>
   <div class="card">
   <img class="card-img-top"   src="<?php echo base_url();?>assets1/vendor/projectmobilegame.png" width="229" height="300" alt="Card image">
    <div class="card-body">
    <h5 class="card-title">Mobile Apps</h5>
    <p class="card-text">by <i>Nauli</i> </p>
  </div> 
  </div>
  <div class="card">
  <img class="card-img-top"   src="<?php echo base_url();?>assets1/vendor/projectlogo.jpg" width="229" height="300" alt="Card image">
    <div class="card-body">
    <h5 class="card-title">Logo Design</h5>
    <p class="card-text">by <i>Gultom</i></p>
  </div>
  </div>
</div>
</div>

<!--fitur 2-->
<div class="row" style="margin-top:100px;">
<div class="col-lg-6">
        <img class="img-fluid rounded" src="<?php echo base_url();?>assets1/vendor/fitur2.gif" alt="">
      </div>
      <div class="col-lg-6">
        <h2>Give your needs the right tools</h2>
        <ul>
          <li><h6>Full transparency</h6>
        <p>A new shared dashboard allows you to track your team's activity, so that everyone is always in sync.</p></li>
        <li><h6>VIP customer support</h6>
        <p>Quick response time and upgraded support solutions will help you to get what you need, when you need it. </p></li>
        <li><h6>Improved billing options</h6>
        <p>One team - one payment method. You can now add a card on file that every team member can use.</p></li>
        </ul>
        
      </div>
      
    </div>
  

    <!-- Call to Action Section -->
      <div class="container" style=" text-align: center;margin-top:80px;margin-bottom:50px;">
        <h5 style="align-text:middle;">Find freelance services for your business today</h5>
        <p>We've got you covered for all your needs</p>
       <a class="btn btn-lg btn-secondary" style="width:150px;text-align:center;" href="<?php echo base_url('Hal_jasa') ?>">Try it now</a>
       </div>
    

  </div>
  <hr>
  <!-- /.container -->
