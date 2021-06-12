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
                            <!-- <button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#exampleModal">Create Jadwal</button> -->
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
                                        <th>Status</th>
                                        <th>Action</th>
                                        <th>Pembayaran</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if ($list_data) {
                                        $ada = 0;
                                        $nomor = 1;
                                        foreach ($list_data as $jadwal) {
                                            if ($jadwal['idGuru'] == $guru['idGuru']) {
                                                $ada++; ?>
                                                <tr>
                                                    <td><?= $nomor++ ?></td>
                                                    <td><?= $jadwal['idJadwal'] ?></td>
                                                    <td><?= $jadwal['tanggalJadwal'] ?></td>
                                                    <td><?= $jadwal['jamJadwal'] ?></td>
                                                    <td><?= $jadwal['namaMatpel'] ?></td>
                                                    <!-- <td><?= $jadwal['namaGuru'] ?></td> -->
                                                    <td><?= $jadwal['namaSiswa'] ?></td>
                                                    <?php if ($jadwal['accJadwal'] == 0) { ?>
                                                        <td class="font-weight-bold text-warning">Pending</td>
                                                    <?php } else if ($jadwal['accJadwal'] == 1) { ?>
                                                        <td class="font-weight-bold text-success">Accept</td>
                                                    <?php  } else if ($jadwal['accJadwal'] == 2) { ?>
                                                        <td class="font-weight-bold text-danger">Reject</td>
                                                    <?php } ?>
                                                    <td>
                                                        <?php if ($jadwal['accJadwal'] == 0) { ?>
                                                            <form action="<?php echo base_url() . 'Guru/statusJadwal'; ?>" method="POST">
                                                                <input type="text" class="form-control" name="idJadwal" value="<?= $jadwal['idJadwal'] ?>" readonly required hidden>
                                                                <button type="submit" name="changeStatusJadwal" value="1" class="btn btn-info">Accept</button>
                                                                <button type="submit" name="changeStatusJadwal" value="2" class="btn btn-danger">Reject</button>
                                                            </form>
                                                        <?php } else { ?>
                                                            -
                                                        <?php } ?>
                                                    </td>
                                                    <td><button type="button" class="btn btn-info">Sudah Bayar</button>

                                                </tr>
                                            <?php }
                                        }
                                        if ($ada == 0) {
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
                                        <?php
                                        }
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