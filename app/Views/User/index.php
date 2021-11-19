<?= $this->extend('layouts/master.php'); ?>

<?= $this->section('content'); ?>
<div id="content">

    <!-- Topbar -->
    <?= $this->include('layouts/navbar.php') ?>
    <!-- End of Topbar -->

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">User</h1>
        <div class="row">
            <div class="col-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Data User</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="table" class="table table-bordered table-striped" style="width: 100%;">
                                <thead>
                                    <tr>
                                        <th width="80" class="text-center">#</th>
                                        <th>username</th>
                                        <th>password</th>
                                        <th>pegawai_id</th>
                                        <th>level_aktif</th>
                                        <th width="130" class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($data as $i => $d) {
                                    ?>
                                        <tr>
                                            <td class="text-center"><?= $i + 1 ?></td>
                                            <td><?= $d['username'] ?></td>
                                            <td><?= $d['password'] ?></td>
                                            <td><?= $d['pegawai_id'] ?></td>
                                            <td><?= $d['level_aktif'] ?></td>
                                            <td class="text-center">
                                                <a href="" class="btn btn-warning">
                                                    <i class="fas fa-edit"></i>
                                                    Edit
                                                </a>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->

</div>
<?= $this->endSection(); ?>