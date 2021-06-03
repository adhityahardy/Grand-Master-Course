<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h2>Guru</h2>
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
                            <h3 class="card-title">List Data Guru</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#exampleModal">Create Guru</button>
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Id Guru</th>
                                        <th>Nama Guru</th>
                                        <th>No. Hp</th>
                                        <th>Alamat</th>
                                        <th>Username</th>
                                        <th>Password</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if ($list_data) {
                                        $nomor = 1;
                                        foreach ($list_data as $guru) {
                                    ?>
                                            <tr>
                                                <td><?= $nomor++ ?></td>
                                                <td><?= $guru['idGuru'] ?></td>
                                                <td><?= $guru['namaGuru'] ?></td>
                                                <td><?= $guru['noHp'] ?></td>
                                                <td><?= $guru['alamat'] ?></td>
                                                <td><?= $guru['username'] ?></td>
                                                <td><?= $guru['password'] ?></td>
                                                <td>
                                                    <a type="button" id='btn-edit' class="btn btn-success" href="<?= base_url('admin/editGuru?id=' . $guru['idGuru']) ?>" data-toggle="modal" data-target="#exampleModalEdit<?php echo $guru['idGuru']; ?>"><i class=" fas fa-edit"></i></a>
                                                    <!-- Modal Edit -->
                                                    <div class="modal fade" id="exampleModalEdit<?php echo $guru['idGuru']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Edit Guru</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <!-- Form Edit -->
                                                                    <form method="POST" action="<?php echo base_url() . 'Admin/editGuru'; ?>">
                                                                        <div class="form-group">
                                                                            <label for="recipient-name" class="col-form-label">Id Guru:</label>
                                                                            <input type="text" name="idGuru" class="form-control" value="<?= $guru['idGuru'] ?>" readonly>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="message-text" class="col-form-label">Nama:</label>
                                                                            <input type="text" name="namaGuru" class="form-control" value="<?= $guru['namaGuru'] ?>" required>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label>No Hp:</label>
                                                                            <input type="text" name="noHp" class="form-control" value="<?= $guru['noHp'] ?>" required>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label>Alamat:</label>
                                                                            <input type="text" name="alamat" class="form-control" value="<?= $guru['alamat'] ?>" required>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="message-text" class="col-form-label">Username:</label>
                                                                            <input type="text" name="username" class="form-control" value="<?= $guru['username'] ?>" required>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="message-text" class="col-form-label">New Password:</label>
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
                                                    <a type="button" class="btn btn-danger" href="<?= base_url('admin/deleteGuru?id=' . $guru['idGuru']) ?>" onclick="return confirm('Are You Sure?')"><i class="far fa-trash-alt"></i></a>
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
                    <h5 class="modal-title" id="exampleModalLabel">Create Guru</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Form Create -->
                    <form method="post" action="<?php echo base_url() . 'Admin/createGuru'; ?>">
                        <div class="form-group">
                            <label>Nama Guru:</label>
                            <input type="text" name="namaGuru" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>No Hp:</label>
                            <input type="text" name="noHp" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Alamat:</label>
                            <input type="text" name="alamat" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Username:</label>
                            <input type="text" name="username" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Password:</label>
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