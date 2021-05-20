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
                                    <?php foreach ($list_data as $guru) { ?>
                                        <tr>
                                            <td><?= $guru['idGuru'] ?></td>
                                            <td><?= $guru['namaGuru'] ?></td>
                                            <td><?= $guru['noHp'] ?></td>
                                            <td><?= $guru['alamat'] ?></td>
                                            <td><?= $guru['username'] ?></td>
                                            <td><?= $guru['password'] ?></td>
                                            <td>
                                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalEdit"><i class="fas fa-edit"></i></button>
                                                <a type="button" class="btn btn-danger" href="<?= base_url('admin/delete?id=' . $guru['idGuru']) ?>" onclick="return confirm('Are You Sure?')"><i class="far fa-trash-alt"></i></a>
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
                    <h5 class="modal-title" id="exampleModalLabel">Create Guru</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Form Create -->
                    <form method="post" action="<?php echo base_url() . 'Admin/createGuru'; ?>">
                        <div class="form-group">
                            <label>Nama Guru</label>
                            <input type="text" name="namaGuru" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>No Hp</label>
                            <input type="text" name="nohp" class="form-control">
                        </div>
                        <!-- <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="email" class="form-control">
                        </div> -->
                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" name="alamat" class="form-control">
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
    <!-- Modal Edit -->
    <div class="modal fade" id="exampleModalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Guru</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="<?php echo base_url() . 'Admin/editGuru'; ?>">
                        <!-- Form Edit -->
                        <div class="form-group">
                            <label>Nama Guru</label>
                            <input type="text" name="namaGuru" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>No Hp</label>
                            <input type="text" name="nohp" class="form-control">
                        </div>
                        <!-- <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="email" class="form-control">
                        </div> -->
                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" name="alamat" class="form-control">
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
                    <!-- Form Edit -->
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Edit -->

</div>
<!-- /.content-wrapper -->