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
                            <p></p>
                            <table id="example2" class="table table-bordered table-hover ">
                                <thead class="table-info">
                                    <tr>
                                        <th>No.</th>
                                        <th>Hari</th>
                                        <th>Jam</th>
                                        <th>Durasi (Jam)</th>
                                        <th>Matpel</th>
                                        <th>Guru</th>
                                        <th>Siswa</th>
                                        <!-- <th>Id Matpel</th>
                                        <th>Id Guru</th> -->
                                        <!-- <th>Id Siswa</th> -->
                                        <th>Status</th>
                                        <th>Pembayaran</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if ($list_data) {
                                        $nomor = 1;
                                        $ada = 0;
                                        foreach ($list_data as $jadwal) {
                                            if ($jadwal['idSiswa'] == $siswa['idSiswa']) {
                                                $ada++; ?>
                                                <tr>
                                                    <td><?= $nomor++ ?></td>
                                                    <!-- <td><?= $jadwal['idJadwal'] ?></td> -->
                                                    <td><?= $jadwal['tanggalJadwal'] ?></td>
                                                    <td><?= $jadwal['jamJadwal'] ?></td>
                                                    <td><?= $jadwal['durasi'] ?></td>
                                                    <td><?= $jadwal['namaMatpel'] ?></td>
                                                    <td><?= $jadwal['namaGuru'] ?></td>
                                                    <td><?= $jadwal['namaSiswa'] ?></td>
                                                    <?php if ($jadwal['accJadwal'] == 0) { ?>
                                                        <td class="font-weight-bold text-warning">Pending</td>
                                                    <?php } else if ($jadwal['accJadwal'] == 1) { ?>
                                                        <td class="font-weight-bold text-success">Accept</td>
                                                    <?php  } else { ?>
                                                        <td class="font-weight-bold text-danger">Reject</td>
                                                    <?php }
                                                    if ($jadwal['accJadwal'] == 2) { ?>
                                                        <td>-</td>
                                                    <?php } else { ?>
                                                        <td><a type="button" id='btn-edit' class="btn btn-success" href="<?= base_url('siswa/invoice?id=' . $jadwal['idJadwal']) ?>" data-toggle="modal" data-target="#exampleModalInvoice<?php echo $jadwal['idJadwal']; ?>">Detail Pembayaran</a>

                                                            <!--MODAL INVOICE-->
                                                            <div class="modal fade" id="exampleModalInvoice<?php echo $jadwal['idJadwal']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-lg" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">INVOICE</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <!-- <div class="container"> -->
                                                                            <div class="card">
                                                                                <div class="card-header">
                                                                                    Invoice :
                                                                                    <strong><?= substr($jadwal['tanggalJadwal'], 0, 2), substr($jadwal['tanggalJadwal'], 3, 2), substr($jadwal['tanggalJadwal'], 6, 4), substr($jadwal['jamJadwal'], 0, 2), substr($jadwal['jamJadwal'], 3, 2), '00', $jadwal['idJadwal']; ?></strong>
                                                                                    <span class="float-right"> <strong>Status Pembayaran:</strong>
                                                                                        <?php if ($jadwal['bayarJadwal'] == 1) { ?>
                                                                                            Accept
                                                                                        <?php } else if ($jadwal['bayarJadwal'] == 0) { ?>
                                                                                            Pending
                                                                                        <?php } else if ($jadwal['accJadwal'] == 2) { ?>
                                                                                            Reject
                                                                                        <?php } ?>
                                                                                    </span>
                                                                                </div>
                                                                                <div class="card-body">
                                                                                    <div>
                                                                                        <b>Nama Siswa : </b><?= $siswa['namaSiswa'] ?>
                                                                                    </div>
                                                                                    <div>
                                                                                        <b>Nama Guru : </b><?= $jadwal['namaGuru'] ?>
                                                                                    </div>
                                                                                    <div>
                                                                                        <b>Tanggal : </b><?= $jadwal['tanggalJadwal'] ?>
                                                                                    </div>
                                                                                </div>
                                                                                <div>
                                                                                    <table class="table table-striped">
                                                                                        <thead>
                                                                                            <tr>
                                                                                                <th class="center">No</th>
                                                                                                <th>Mata Pelajaran</th>
                                                                                                <th>Guru</th>
                                                                                                <th>Jam</th>
                                                                                                <th>Durasi(Jam)</th>
                                                                                                <th class="center">Harga per Jam</th>
                                                                                                <th class="center">Subtotal</th>
                                                                                            </tr>
                                                                                        </thead>
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td class="center">1</td>
                                                                                                <td class="left strong"><?= $jadwal['namaMatpel'] ?></td>
                                                                                                <td class="left"><?= $jadwal['namaGuru'] ?></td>
                                                                                                <td class="right"><?= $jadwal['jamJadwal'] ?></td>
                                                                                                <td class="center"><?= $jadwal['durasi'] ?></td>
                                                                                                <td class="right">Rp 10.000</td>
                                                                                                <td class="right">Rp <?= 10 * $jadwal['durasi'] ?>.000</td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </div>
                                                                                <div class="card-body">
                                                                                    <?php if ($jadwal['bayarJadwal'] == 0) { ?>
                                                                                        <strong class="text-danger">*Silahkan selesaikan pembayaran ke guru masing-masing.</strong>
                                                                                    <?php } ?>

                                                                                </div>
                                                                                <div class="col-lg-4 col-sm-5 ml-auto">
                                                                                    <table class="table table-clear">
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td class="left">
                                                                                                    <strong>Subtotal</strong>
                                                                                                </td>
                                                                                                <td class="right">Rp <?= 10 * $jadwal['durasi'] ?>.000</td>
                                                                                            </tr>

                                                                                            <tr>
                                                                                                <td class="left">
                                                                                                    <strong>Total</strong>
                                                                                                </td>
                                                                                                <td class="right">
                                                                                                    <strong>Rp <?= 10 * $jadwal['durasi'] ?>.000</strong>
                                                                                                </td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </div>
                                                                            </div>
                                                                            <!-- </div> -->
                                                                        </div>
                                                                    </div>
                                                                    <!-- <td class="font-weight-bold text-danger"><?= "Pending" ?></td> -->
                                                                    <!-- <td> -->
                                                                    <!-- <a type="button" class="btn btn-success" href="<?= base_url('admin/editJadwal?id=' . $jadwal['idJadwal']) ?>" data-toggle="modal" data-target="#exampleModalEdit<?php echo $jadwal['idJadwal']; ?>" onclick=""><i class="fas fa-edit"></i></a> -->
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
                                                                                            <label>Guru</label>
                                                                                            <select name="namaGuru" class="custom-select">
                                                                                                <?php foreach ($matpel as $m) :
                                                                                                    if ($m['namaMatpel'] == $jadwal['namaMatpel']) { ?>
                                                                                                        <option value="<?= $m['namaGuru'] ?>"><?= $m['namaGuru'] ?></option>
                                                                                                    <?php } ?>
                                                                                                <?php endforeach; ?>
                                                                                            </select>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label>Siswa</label>
                                                                                            <select id="selectSiswa" name="idSiswa" class="custom-select">

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
                                                                    <!-- <a type="button" class="btn btn-danger" href="<?= base_url('admin/deleteJadwal?id=' . $jadwal['idJadwal']) ?>" onclick="return confirm('Are You Sure?')"><i class="far fa-trash-alt"></i></a> -->
                                                                    <!-- </td> -->
                                                                </div>
                                                            </div>
                                                        <?php } ?>
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
                    <h5 class="modal-title" id="exampleModalLabel">Create Jadwal</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Form Create -->
                    <form method="post" action="<?php echo base_url() . 'Siswa/createJadwal'; ?>">
                        <div class="form-group">
                            <label>Tanggal</label>
                            <div class="input-group date" id="reservationdate" name="hariJadwal" data-target-input="nearest">
                                <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                                <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate" name="tanggalJadwal" required />
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Jam</label>
                            <div class="input-group date" id="timepicker" name="tanggalJadwal" data-target-input="nearest">
                                <div class="input-group-append" data-target="#timepicker" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="far fa-clock"></i></div>
                                </div>
                                <input type="text" class="form-control datetimepicker-input" data-target="#timepicker" name="jamJadwal" required />
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Durasi (Jam)</label>
                            <div class="input-group date" name="durasi" data-target-input="nearest">
                                <!-- <div class="input-group-text"><i class="far fa-clock"></i></div> -->
                                <!-- <input name="durasiJadwal" type="text" class="form-control" required> -->
                                <input type="number" class="form-control" name="durasiJadwal" min="1" max="3">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Matpel</label>
                            <!-- <input type="text" name="Matpel" class="form-control" required> -->
                            <select id="selectMatpel" name="namaMatpel" class="custom-select" onchange="selectMatpelFunc()" required>
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
                            <label>Guru</label>
                            <select id="selectGuru" name="namaGuru" class="custom-select" required>

                                <!--
                                <?php foreach ($guru as $g) : ?>
                                    <option value="<?= $g['idGuru'] ?>"><?= $g['namaGuru'] ?></option>
                                <?php endforeach; ?> -->
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Siswa</label>
                            <!-- <input type="text" name="password" class="form-control" required> -->
                            <input type="text" class="form-control" name="idSiswa" value="<?= $siswa['idSiswa'] ?>" readonly required hidden>
                            <input type="text" class="form-control" name="namaSiswa" value="<?= $siswa['namaSiswa'] ?>" readonly required>
                            <!-- <input id="selectSiswa" name="idSiswa" class="custom-select" readonly> -->
                            <!-- <option value="" selected disabled>Pilih Guru</option> -->
                            <!-- <option value="" selected disabled>Pilih Siswa</option> -->
                            <!-- <option value="<?= $siswa['idSiswa'] ?>" readonly><?= $siswa['namaSiswa'] ?></option> -->
                            <!-- </input> -->
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