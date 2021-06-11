<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h2>Jadwal</h2>
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
                            <h3 class="card-title">List Jadwal</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#exampleModal">Create Jadwal</button>
                            <p>
                            <table id="example2" class="table table-bordered table-hover">
                                <thead class="table-info">
                                    <tr>
                                        <th>No. </th>
                                        <th>Id Jadwal</th>
                                        <th>Hari</th>
                                        <th>Jam</th>
                                        <th>Matpel</th>
                                        <!-- <th>Guru</th> -->
                                        <th>Siswa</th>
                                        <!-- <th>Id Matpel</th>
                                        <th>Id Guru</th> -->
                                        <!-- <th>Id Siswa</th> -->
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if ($list_data) {
                                        $nomor = 1;
                                        foreach ($list_data as $jadwal) { ?>
                                            <tr>
                                                <td><?= $nomor++ ?></td>
                                                <td><?= $jadwal['idJadwal'] ?></td>
                                                <td><?= $jadwal['tanggalJadwal'] ?></td>
                                                <td><?= $jadwal['jamJadwal'] ?></td>
                                                <td><?= $jadwal['namaMatpel'] ?></td>
                                                <!-- <td><?= $jadwal['namaGuru'] ?></td> -->
                                                <td><?= $jadwal['namaSiswa'] ?></td>
                                                <td>
                                                    <a type="button" class="btn btn-success" href="<?= base_url('admin/editJadwal?id=' . $jadwal['idJadwal']) ?>" data-toggle="modal" data-target="#exampleModalEdit<?php echo $jadwal['idJadwal']; ?>" onclick=""><i class="fas fa-edit"></i></a>
                                                    <!-- Modal Edit -->
                                                    <div class="modal fade" id="exampleModalEdit<?php echo $jadwal['idJadwal']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Edit Jadwal</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <!-- Form Edit -->
                                                                    <form method="POST" action="<?php echo base_url() . 'Admin/editJadwal'; ?>">
                                                                        <div class="form-group">
                                                                            <label>Id Jadwal</label>
                                                                            <input type="text" class="form-control" name="idJadwal" value="<?= $jadwal['idJadwal'] ?>" readonly required>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label>Tanggal</label>
                                                                            <div class="input-group date" id="reservationdateEdit" name="hariJadwal" data-target-input="nearest">
                                                                                <div class="input-group-append" data-target="#reservationdateEdit" data-toggle="datetimepicker">
                                                                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                                                </div>
                                                                                <input type="text" class="form-control datetimepicker-input" data-target="#reservationdateEdit" name="tanggalJadwal" value="<?= $jadwal['tanggalJadwal'] ?>" required />
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label>Jam</label>
                                                                            <div class="input-group date" id="timepickerEdit" name="tanggalJadwal" data-target-input="nearest">
                                                                                <div class="input-group-append" data-target="#timepickerEdit" data-toggle="datetimepicker">
                                                                                    <div class="input-group-text"><i class="far fa-clock"></i></div>
                                                                                </div>
                                                                                <input type="text" class="form-control datetimepicker-input" data-target="#timepickerEdit" name="jamJadwal" value="<?= $jadwal['jamJadwal'] ?>" required />
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label>Matpel</label>
                                                                            <input type="text" class="form-control" name="namaMatpel" value="<?= $jadwal['namaMatpel'] ?>" readonly required>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label>Siswa</label>
                                                                            <select id="selectSiswa" name="idSiswa" class="custom-select">
                                                                                <?php
                                                                                $new_arr = [];
                                                                                foreach ($siswa as $s) {
                                                                                    if ($s['idSiswa'] == $jadwal['idSiswa']) { ?>
                                                                                        <option value="<?= $s['idSiswa'] ?>" selected><?= $s['namaSiswa'] ?></option>
                                                                                    <?php } else { ?>
                                                                                        <option value="<?= $s['idSiswa'] ?>"><?= $s['namaSiswa'] ?></option>
                                                                                    <?php } ?>
                                                                                <?php } ?>
                                                                            </select>
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
                                                    <a type="button" class="btn btn-danger" href="<?= base_url('admin/deleteJadwal?id=' . $jadwal['idJadwal']) ?>" onclick="return confirm('Are You Sure?')"><i class="far fa-trash-alt"></i></a>
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
                                            <!-- <td>-</td> -->
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
                    <h5 class="modal-title" id="exampleModalLabel">Create Jadwal</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Form Create -->
                    <form method="post" action="<?php echo base_url() . 'Admin/createJadwal'; ?>">
                        <div class="form-group">
                            <label>Tanggal</label>
                            <div class="input-group date" id="reservationdate" name="hariJadwal" data-target-input="nearest">
                                <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                                <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate" name="tanggalJadwal" />

                            </div>
                        </div>
                        <div class="form-group">
                            <label>Jam</label>
                            <div class="input-group date" id="timepicker" name="tanggalJadwal" data-target-input="nearest">
                                <div class="input-group-append" data-target="#timepicker" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="far fa-clock"></i></div>
                                </div>
                                <input type="text" class="form-control datetimepicker-input" data-target="#timepicker" name="jamJadwal" />

                            </div>
                        </div>
                        <div class="form-group">
                            <label>Matpel</label>
                            <!-- <input type="text" name="Matpel" class="form-control" required> -->
                            <select id="selectMatpel" name="namaMatpel" class="custom-select" onchange="selectMatpelFunc()">
                                <option value="" selected disabled>Pilih Matpel</option>
                                <?php $new_arr = [];
                                foreach ($matpel as $m) {
                                    if (!(in_array($m['namaMatpel'], $new_arr))) {
                                        array_push($new_arr, $m['namaMatpel']); ?>
                                        <option value="<?= $m['namaMatpel'] ?>"><?= $m['namaMatpel'] ?></option>
                                    <?php } ?>
                                <?php } ?>

                            </select>
                        </div>
                        <div class="form-group">
                            <label>Siswa</label>
                            <!-- <input type="text" name="password" class="form-control" required> -->
                            <select id="selectSiswa" name="idSiswa" class="custom-select">
                                <!-- <option value="" selected disabled>Pilih Guru</option> -->
                                <option value="" selected disabled>Pilih Siswa</option>
                                <?php foreach ($siswa as $s) : ?>
                                    <option value="<?= $s['idSiswa'] ?>"><?= $s['namaSiswa'] ?></option>
                                <?php endforeach; ?> -->

                            </select>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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