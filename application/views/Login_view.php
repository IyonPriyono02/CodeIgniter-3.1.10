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
        <div class="col-xs-4"> 
          <button type="submit" class="btn btn-primary btn-block btn-flat">Login</button> 
        </div> 
        <div class="col-xs-4"> 
          <button type="submit" class="btn btn-primary btn-block btn-flat">Registrasi</button> 
        </div> 
        <!– /.col –> 
      </div> 
    </form>