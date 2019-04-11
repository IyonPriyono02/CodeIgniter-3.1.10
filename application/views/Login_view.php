<div class="container" style="width: 650px">
<form action="<?php echo base_url('login/proses-login') ?>" method="post"> 
      <div class="form-group has-feedback"> 
        <input type="text" class="form-control" placeholder="Username atau Email" name="username" required id="username"> 
        <span class="glyphicon glyphicon-user form-control-feedback"></span> 
      </div> 
      <div class="form-group has-feedback"> 
        <input type="password" class="form-control" placeholder="Password" name="password" required> 
        <span class="glyphicon glyphicon-lock form-control-feedback"></span> 
      </div> 
      <div class="row"> 
        <!– /.col –> 
        <div class="col"> 
          <button type="submit" class="btn btn-primary btn-block btn-flat">Masuk</button> 
        </div>
        <!– /.col –> 
      </div> <br>
<div class="row"> 
        <div class="col"> 
          <a href="<?php echo site_url('Login/index_register') ?>"><button type="button" class="btn btn-primary btn-block btn-flat">Registrasi</button></a>
        </div> 
        </div> 
    </form>
</div>

