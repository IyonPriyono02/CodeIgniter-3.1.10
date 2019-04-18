<main>
<nav class="navbar navbar-expand-lg navbar-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo site_url('home') ?>">Beranda <span class="sr-only">(current)</span></a>
      </li>
       <li class="nav-item">
        <a class="nav-link disabled" href="#">Layanan</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Pre Order</a>
      </li>
       <?php if(isset($this->session->userdata['logged_in'])){?>
      <li class="nav-item">
       

        <a class="nav-link" href=""><?= $this->session->userdata['logged_in'] ?></a>
      </li>
       <li class="nav-item">
       

        <a class="nav-link" href="<?php echo site_url('Login/do_logout') ?>">logout</a>
      </li>
       <li class="nav-item">
      <?php }else{ ?>
        <a class="nav-link" href="<?php echo site_url('Login/index') ?>">Login</a>

      <?php } ?>
      </li>
      
     
    </ul>
  </div>
</nav>

</main>

