<?php $this->load->view("templates/header"); ?>
<div class="container">
    <div class="row mt-3">
        <div class="col">
            <div class="card">
                <div class="card-header text-center">
                    Registrasi
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nama">Phone Number</label>
                            <input type="text" class="form-control" id="tlp" name="tlp">
                            <small class="form-text text-danger"><?= form_error('tlp') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="nim">Email</label>
                            <input type="text" class="form-control" id="email" name="email">
                            <small class="form-text text-danger"><?= form_error('email') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="text">Password</label>
                            <input type="text" class="form-control" id="password" name="password">
                            <small class="form-text text-danger"><?= form_error('password') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="nama">Password(confirm)</label>
                            <input type="text" class="form-control" id="password_konfirm" name="password_konfirm">
                            <small class="form-text text-danger"><?= form_error('password_konfirm') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="nim">Full Name</label>
                            <input type="text" class="form-control" id="nama" name="nama">
                            <small class="form-text text-danger"><?= form_error('nama') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="text">Identity</label>
                            <input type="text" class="form-control" id="identitas" name="identitas">
                            <small class="form-text text-danger"><?= form_error('email') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="text">Address</label>
                            <input type="text" class="form-control" id="identitas" name="identitas">
                            <small class="form-text text-danger"><?= form_error('email') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="text">City</label>
                            <input type="text" class="form-control" id="jalan" name="jalan">
                            <small class="form-text text-danger"><?= form_error('jalan') ?>.</small>
                        </div>

                        <button type="submit" name="tambah" class="btn btn-primary float-right">Create Account</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div> 
<?php $this->load->view("templates/footer"); ?>