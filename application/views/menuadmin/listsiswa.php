<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h2>Siswa</h2>
                </div>

            </div>
        </div>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">List Data Siswa</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#exampleModal">Create Siswa</button>
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Id Siswa</th>
                                        <th>Nama Siswa</th>
                                        <th>No. Hp</th>
                                        <th>Alamat</th>
                                        <th>Email</th>
                                        <th>Username</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if ($list_data) {
                                        $nomor = 1;
                                        foreach ($list_data as $siswa) {
                                    ?>
                                            <tr>
                                                <td><?= $nomor++ ?></td>
                                                <td><?= $siswa['idSiswa'] ?></td>
                                                <td><?= $siswa['namaSiswa'] ?></td>
                                                <td><?= $siswa['noHp'] ?></td>
                                                <td><?= $siswa['alamat'] ?></td>
                                                <td><?= $siswa['email'] ?></td>
                                                <td><?= $siswa['username'] ?></td>
                                                <td>
                                                    <a type="button" id='btn-edit' class="btn btn-success" href="<?= base_url('admin/editSiswa?id=' . $siswa['idSiswa']) ?>" data-toggle="modal" data-target="#exampleModalEdit<?php echo $siswa['idSiswa']; ?>"><i class=" fas fa-edit"></i></a>
                                                    <!-- Modal Edit -->
                                                    <div class="modal fade" id="exampleModalEdit<?php echo $siswa['idSiswa']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Edit Siswa</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form method="post" action="<?php echo base_url() . 'Admin/editSiswa'; ?>">
                                                                        <!-- Form Edit -->
                                                                        <div class="form-group">
                                                                            <label>Id Siswa</label>
                                                                            <input type="text" name="idSiswa" id="namaSiswaEdit" class="form-control" value="<?= $siswa['idSiswa'] ?>" readonly>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label>Nama Siswa</label>
                                                                            <input type="text" name="namaSiswa" id="namaSiswaEdit" class="form-control" value="<?= $siswa['namaSiswa'] ?>" required>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label>No Hp</label>
                                                                            <input type="text" name="noHp" class="form-control" value="<?= $siswa['noHp'] ?>" required>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label>Alamat</label>
                                                                            <input type="text" name="alamat" class="form-control" value="<?= $siswa['alamat'] ?>" required>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label>Email</label>
                                                                            <input type="text" name="email" class="form-control" value="<?= $siswa['email'] ?>" required validate="required:true">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label>Username</label>
                                                                            <input type="text" name="username" class="form-control" value="<?= $siswa['username'] ?>" required>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label> New Password</label>
                                                                            <input type="text" name="password" class="form-control" required>
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
                                                    <a type="button" class="btn btn-danger" href="<?= base_url('admin/deleteSiswa?id=' . $siswa['idSiswa']) ?>" onclick="return confirm('Are You Sure?')"><i class="far fa-trash-alt"></i></a>
                                                </td>
                                            </tr>
                                        <?php }
                                    } else {
                                        ?>
                                        <tr>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>

                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- Modal Create -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Create Siswa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Form Create -->
                    <form method="post" action="<?php echo base_url() . 'Admin/createSiswa'; ?>">
                        <div class="form-group">
                            <label>Nama Siswa</label>
                            <input type="text" name="namaSiswa" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>No Hp</label>
                            <input type="text" name="nohp" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" name="alamat" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="email" class="form-control" required validate="required:true">
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="text" name="password" class="form-control" required>
                        </div>
                        <div class="modal-footer">
                            <button type="reset" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                    <!-- Form Create -->
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Create -->


</div>
<!-- /.content-wrapper -->