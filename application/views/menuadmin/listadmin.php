<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h2>Admin</h2>
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
                            <h3 class="card-title">List Admin</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#exampleModal">Create Admin</button>
                            <p></p>
                            <table id="example2" class="table table-bordered table-hover">
                                <thead class="table-info">
                                    <tr>
                                        <th>No.</th>
                                        <th>Id Admin</th>
                                        <th>Nama</th>
                                        <th>Username</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $nomor = 1;
                                    foreach ($list_data as $admin) { ?>
                                        <tr>
                                            <td><?= $nomor++ ?></td>
                                            <td><?= $admin['idAdmin'] ?></td>
                                            <td><?= $admin['namaAdmin'] ?></td>
                                            <td><?= $admin['username'] ?></td>
                                            <td>
                                                <a type="button" id='btn-edit' class="btn btn-success" href="<?= base_url('admin/editAdmin?id=' . $admin['idAdmin']) ?>" data-toggle="modal" data-target="#exampleModalEdit<?php echo $admin['idAdmin']; ?>"><i class="fas fa-edit"></i></a>
                                                <!-- Modal Edit -->
                                                <div class="modal fade" id="exampleModalEdit<?php echo $admin['idAdmin']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Edit Admin</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <!-- Form Edit -->
                                                                <form method="POST" action="<?php echo base_url() . 'Admin/editAdmin'; ?>">
                                                                    <div class="form-group">
                                                                        <label for="recipient-name" class="col-form-label">Id Admin:</label>
                                                                        <input type="text" name="idAdmin" class="form-control" value="<?= $admin['idAdmin'] ?>" readonly>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="message-text" class="col-form-label">Nama:</label>
                                                                        <input type="text" name="namaAdmin" class="form-control" value="<?= $admin['namaAdmin'] ?>" required>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="message-text" class="col-form-label">Username:</label>
                                                                        <input type="text" name="username" class="form-control" value="<?= $admin['username'] ?>" required>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="message-text" class="col-form-label">New Password:</label>
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
                                                <a type="button" class="btn btn-danger" href="<?= base_url('admin/deleteAdmin?id=' . $admin['idAdmin']) ?>" onclick="return confirm('Are You Sure?')"><i class="far fa-trash-alt"></i></a>
                                            </td>
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
                    <h5 class="modal-title" id="exampleModalLabel">Create Admin</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Form Create -->
                    <form method="post" action="<?php echo base_url() . 'Admin/createAdmin'; ?>">
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Nama:</label>
                            <input type="text" name="namaAdmin" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Username:</label>
                            <input type="text" name="username" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Password:</label>
                            <input type="password" name="password" class="form-control" required>
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