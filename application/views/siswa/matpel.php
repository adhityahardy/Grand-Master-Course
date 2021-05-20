        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>

        </div>
        <!-- /.container-fluid -->
        <div class="row mt-5">
            <div class="col">
                <?php if (empty($matpel)) : ?>
                    <div class="alert alert-danger" role="alert">
                        Data tidak ditemukan
                    </div>
                <?php endif; ?>
                <?= $this->session->flashdata('message'); ?>

                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Data Mata Pelajaran</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>ID Mata Pelajaran</th>
                                        <th>Nama Mata Pelajaran</th>
                                        <th>ID Guru</th>
                                        <th>Nama Guru</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr><?php foreach ($matpel as $m) : ?>
                                            <td class="text-center"><?= $m['idMatpel']; ?></td>
                                            <td class="text-center"><?= $m['namaMatpel']; ?></td>
                                            <td class="text-center"><?= $m['idGuru']; ?></td>
                                            <td class="text-center"><?= $s['namaGuru']; ?></td>
                                    </tr>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- End of Main Content -->