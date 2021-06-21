<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col">
                    <div class="row">
                        <div class="col-sm">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="profile-username text-center"><?= $siswa['namaSiswa']; ?></h3>
                                    <p class="text-muted text-center">Siswa</p>
                                    <ul class="list-group list-group-unbordered mb-3">
                                        <li class="list-group-item">
                                            <b>No Hp</b> <a class="float-right"><?= $siswa['noHp'] ?></a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Alamat</b> <a class="float-right"><?= $siswa['alamat'] ?></a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Email</b> <a class="float-right"><?= $siswa['email'] ?></a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Username</b> <a class="float-right"><?= $siswa['username'] ?></a>
                                        </li>
                                    </ul>
                                    <a type="button" id='btn-edit' class="btn btn-primary" href="<?= base_url('siswa/editprofile?id=' . $siswa['idSiswa']) ?>" data-toggle="modal" data-target="#exampleModalEdit<?php echo $siswa['idSiswa']; ?>">Edit Profile</a>
                                </div>
                            </div>
                        </div>
                        <!-- Modal Edit -->
                        <div class="modal fade" id="exampleModalEdit<?php echo $siswa['idSiswa']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Edit Profile</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" action="<?php echo base_url() . 'siswa/editprofile'; ?>">
                                            <!-- Form Edit -->
                                            <input type="hidden" name="idSiswa" value="<?= $siswa['idSiswa'] ?>">
                                            <div class="form-group">
                                                <label>Nama Siswa:</label>
                                                <input type="text" name="namaSiswa" id="namaSiswaEdit" class="form-control" value="<?= $siswa['namaSiswa'] ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label>No Hp:</label>
                                                <input type="text" name="noHp" class="form-control" value="<?= $siswa['noHp'] ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Alamat:</label>
                                                <input type="text" name="alamat" class="form-control" value="<?= $siswa['alamat'] ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Email:</label>
                                                <input type="text" name="email" class="form-control" value="<?= $siswa['email'] ?>" required validate="required:true">
                                            </div>
                                            <div class="form-group">
                                                <label>Username:</label>
                                                <input type="text" name="username" class="form-control" value="<?= $siswa['username'] ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label> New Password</label>
                                                <input type="password" name="password" class="form-control" required>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="reset" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </form>
                                        <!-- Form Edit -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal Edit -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>