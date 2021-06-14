<!-- Body Login -->

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href=""><b>Grand Master Course</b></a>
        </div>
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Login</p>
                <!-- mengambil flashdata message dari controller -->
                <?= $this->session->flashdata('message'); ?>
                <form action="<?= base_url('auth') ?>" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Username" id="username" name="username" value="<?= set_value('username'); ?>">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <!-- alert yang akan muncul ketika form error,salah password,dll -->
                    <small class="text-danger "><?= form_error('username') ?></small>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Password" id="password" name="password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div><small class="text-danger "><?= form_error('password') ?></small>
                    <div class="row">
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                        </div>
                    </div>
                </form>


                <!-- register button  -->
                <p class="mb-0">
                    <a href="<?= base_url('auth/registration'); ?>" class="text-center">Register New User</a>
                </p>
            </div>
        </div>
        <!-- button back untuk ke menu home -->
        <div>
            <p class="mb-1">
                <span class="fas fa-angle-left"></span>
                <a href="<?= base_url('landing'); ?>">back</a>
            </p>
        </div>
    </div>
    <!-- /.login-box -->