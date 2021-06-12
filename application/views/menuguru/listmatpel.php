<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h2>Mata Pelajaran</h2>
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
                            <h3 class="card-title">List Data Mata Pelajaran</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#exampleModal">Create Matpel</button>
                            <p>
                            <table id="example2" class="table table-bordered table-hover">
                                <thead class="table-info">
                                    <tr>
                                        <th>No.</th>
                                        <!-- <th>Id Matpel</th> -->
                                        <th>Nama Matpel</th>
                                        <!-- <th>Id Guru</th> -->
                                        <th>Nama Guru</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    /*
                                    $sql = "SELECT * FROM district";
                                    $query = $this->db->query($sql);
                                    if ($query->num_rows() > 0) {
                                        foreach ($query->result() as $row) { ?>
                                            <option value="<?php echo $row->district_id; ?>"><?php echo $row->district_name; ?></option>
                                        <?php }
                                    }*/
                                    if ($list_data) {
                                        $nomor = 1;
                                        foreach ($list_data as $matpel) {
                                    ?>
                                            <tr>
                                                <td><?= $nomor++ ?></td>
                                                <!-- <td><?= $matpel['idMatpel'] ?></td> -->
                                                <td><?= $matpel['namaMatpel'] ?></td>
                                                <!-- <td><?= $matpel['idGuru'] ?></td> -->
                                                <td><?= $matpel['namaGuru'] ?></td>
                                                <td>
                                                    <a type="button" class="btn btn-success" href="<?= base_url('admin/editMatpel?id=' . $matpel['idMatpel']) ?>" data-toggle="modal" data-target="#exampleModalEdit<?php echo $matpel['idMatpel']; ?>"><i class="fas fa-edit"></i></a>
                                                    <!-- Modal Edit -->
                                                    <div class="modal fade" id="exampleModalEdit<?php echo $matpel['idMatpel']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Edit Matpel</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <!-- Form Edit -->
                                                                    <form method="POST" action="<?php echo base_url() . 'Admin/editMatpel'; ?>">
                                                                        <div class="form-group">
                                                                            <label for="recipient-name" class="col-form-label">Id Matpel</label>
                                                                            <input type="text" class="form-control" name="idMatpel" value="<?= $matpel['idMatpel'] ?>" readonly required>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="recipient-name" class="col-form-label">Nama Matpel</label>
                                                                            <input type="text" class="form-control" name="namaMatpel" value="<?= $matpel['namaMatpel'] ?>" required>
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
                                                    <a type="button" class="btn btn-danger" href="<?= base_url('admin/deleteMatpel?id=' . $matpel['idMatpel']) ?>" onclick="return confirm('Are You Sure?')"><i class="far fa-trash-alt"></i></a>
                                                </td>
                                            </tr>
                                        <?php }
                                    } else { ?>
                                        <tr>
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
                    <h5 class="modal-title" id="exampleModalLabel">Create Mata Pelajaran</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Form Create -->
                    <form method="post" action="<?php echo base_url() . 'Guru/createMatpel'; ?>">
                        <input type="text" name="idGuru" class="form-control" required hidden value="<?= $guru['idGuru'] ?>">
                        <input type="text" name="namaGuru" class="form-control" required hidden value="<?= $guru['namaGuru'] ?>">

                        <div class="form-group">
                            <label>Nama Matpel</label>
                            <input type="text" name="namaMatpel" class="form-control" required>
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