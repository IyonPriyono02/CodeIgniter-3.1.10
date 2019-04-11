<div class="container" style="width: 650px">
    <div class="row mt-3">
        <div class="col">
            <div class="card">
                <div class="card-header text-center">
                    Registrasi
                </div>
                <div class="card-body">
                    <form action="<?php echo site_url('Register_controller') ?>" method="post">
                        <div class="form-group">
                            <label for="nama">Phone Number</label>
                            <input type="text" class="form-control" id="tlp" name="tlp">
                            <small class="form-text text-danger"></small>
                        </div>
                        <div class="form-group">
                            <label for="nim">Email</label>
                            <input type="text" class="form-control" id="email" name="email">
                            <small class="form-text text-danger"></small>
                        </div>
                        <div class="form-group">
                            <label for="text">Password</label>
                            <input type="text" class="form-control" id="password" name="password">
                            <small class="form-text text-danger"></small>
                        </div>
                        <div class="form-group">
                            <label for="nama">Password(confirm)</label>
                            <input type="text" class="form-control" id="password_konfirm" name="password_konfirm">
                            <small class="form-text text-danger"></small>
                        </div>
                        <div class="form-group">
                            <label for="nim">Full Name</label>
                            <input type="text" class="form-control" id="nama" name="nama">
                            <small class="form-text text-danger"></small>
                        </div>
                        <div class="form-group">
                            <label for="text">Identity</label>
                            <input type="text" class="form-control" id="identitas" name="identitas">
                            <small class="form-text text-danger"></small>
                        </div>
                        <div class="form-group">
                            <label for="text">Address</label>
                            <input type="text" class="form-control" id="identitas" name="jln">
                            <small class="form-text text-danger"></small>
                        </div>
                        <div class="form-group">
                            <label for="text">City</label>
                            <input type="text" class="form-control" id="jalan" name="kota">
                            <small class="form-text text-danger"></small>
                        </div>

                        <button type="submit" name="tambah" class="btn btn-primary float-right">Registrasi</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div> 
