<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>

    <div class="card mb-3 col-lg-8">
        <div class="row no-gutters">
            <?php foreach ($jadwal as $j) : ?>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><?= $j['idJadwal']; ?></h5>
                        <p class="card-text"><?= $j['hariJadwal']; ?></p>
                        <p class="card-text"><?= $j['jamJadwal']; ?></p>
                        <p class="card-text"><?= $j['idMatpel']; ?></p>
                        <p class="card-text"><?= $j['idGuru']; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>