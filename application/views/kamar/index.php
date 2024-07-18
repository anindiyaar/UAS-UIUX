<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pembayaran</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Kamar</h1>
    </div>

    <!-- Room Statistics -->
    <div class="row mb-4">
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Kamar Tersedia</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $tersedia ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-bed fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Kamar Terisi</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $terisi ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user-check fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Kamar Perbaikan</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $perbaikan ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-tools fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <a href="<?= base_url('kamar/add') ?>" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Tambah Data Kamar</a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <!-- Responsive Table -->
            <h5>Isian & Kamar mandi dalam</h5>
            <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr class="text-center">
                            <th>No.</th>
                            <th>No. Kamar</th>
                            <th>Penghuni</th>
                            <th>Tanggal Masuk</th>
                            <th>Tanggal Pembayaran</th>
                            <th>Status</th>
                            <th>Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($kamar)): ?>
                            <?php $i = 1; foreach ($kamar as $row) : ?>
                                <?php if ($row['fasilitas'] == 'Isian & Kamar Mandi Dalam'): ?>
                                    <tr class="text-center">
                                        <td><?= $i++ ?></td>
                                        <td><?= htmlspecialchars($row['no_kamar'], ENT_QUOTES, 'UTF-8') ?></td>
                                        <td><?= htmlspecialchars($row['nama'], ENT_QUOTES, 'UTF-8') ?></td>
                                        <td><?= htmlspecialchars($row['tgl_masuk'], ENT_QUOTES, 'UTF-8') ?></td>
                                        <td><?= htmlspecialchars($row['tgl_pembayaran'], ENT_QUOTES, 'UTF-8') ?></td>
                                        <td><?= htmlspecialchars($row['status'], ENT_QUOTES, 'UTF-8') ?></td>
                                        <td>
                                            <a href="<?= base_url() ?>kamar/edit/<?= $row['id_kamar'] ?>" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                                            <a href="<?= base_url() ?>kamar/delete/<?= $row['id_kamar'] ?>" onclick="return confirm('Are you sure want to delete this payment?')" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <?php endif; ?>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="8" class="text-center"></td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
            </div>

            <!-- Responsive Table -->
            <h5>Isian</h5>
            <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr class="text-center">
                            <th>No.</th>
                            <th>No. Kamar</th>
                            <th>Penghuni</th>
                            <th>Tanggal Masuk</th>
                            <th>Tanggal Pembayaran</th>
                            <th>Status</th>
                            <th>Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($kamar)): ?>
                            <?php $i = 1; foreach ($kamar as $row) : ?>
                                <?php if ($row['fasilitas'] == 'Isian'): ?>
                                    <tr class="text-center">
                                        <td><?= $i++ ?></td>
                                        <td><?= htmlspecialchars($row['no_kamar'], ENT_QUOTES, 'UTF-8') ?></td>
                                        <td><?= htmlspecialchars($row['nama'], ENT_QUOTES, 'UTF-8') ?></td>
                                        <td><?= htmlspecialchars($row['tgl_masuk'], ENT_QUOTES, 'UTF-8') ?></td>
                                        <td><?= htmlspecialchars($row['tgl_pembayaran'], ENT_QUOTES, 'UTF-8') ?></td>
                                        <td><?= htmlspecialchars($row['status'], ENT_QUOTES, 'UTF-8') ?></td>
                                        <td>
                                            <a href="<?= base_url() ?>kamar/edit/<?= $row['id_kamar'] ?>" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                                            <a href="<?= base_url() ?>kamar/delete/<?= $row['id_kamar'] ?>" onclick="return confirm('Are you sure want to delete this payment?')" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <?php endif; ?>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="8" class="text-center"></td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
            </div>

            <!-- Responsive Table -->
            <h5>Kosongan & Kamar mandi dalam</h5>
            <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr class="text-center">
                            <th>No.</th>
                            <th>No. Kamar</th>
                            <th>Penghuni</th>
                            <th>Tanggal Masuk</th>
                            <th>Tanggal Pembayaran</th>
                            <th>Status</th>
                            <th>Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($kamar)): ?>
                            <?php $i = 1; foreach ($kamar as $row) : ?>
                                <?php if ($row['fasilitas'] == 'Kosongan & Kamar Mandi Dalam'): ?>
                                    <tr class="text-center">
                                        <td><?= $i++ ?></td>
                                        <td><?= htmlspecialchars($row['no_kamar'], ENT_QUOTES, 'UTF-8') ?></td>
                                        <td><?= htmlspecialchars($row['nama'], ENT_QUOTES, 'UTF-8') ?></td>
                                        <td><?= htmlspecialchars($row['tgl_masuk'], ENT_QUOTES, 'UTF-8') ?></td>
                                        <td><?= htmlspecialchars($row['tgl_pembayaran'], ENT_QUOTES, 'UTF-8') ?></td>
                                        <td><?= htmlspecialchars($row['status'], ENT_QUOTES, 'UTF-8') ?></td>
                                        <td>
                                            <a href="<?= base_url() ?>kamar/edit/<?= $row['id_kamar'] ?>" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                                            <a href="<?= base_url() ?>kamar/delete/<?= $row['id_kamar'] ?>" onclick="return confirm('Are you sure want to delete this payment?')" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <?php endif; ?>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="8" class="text-center"></td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
            </div>

            <!-- Responsive Table -->
            <h5>Kosongan</h5>
            <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr class="text-center">
                            <th>No.</th>
                            <th>No. Kamar</th>
                            <th>Penghuni</th>
                            <th>Tanggal Masuk</th>
                            <th>Tanggal Pembayaran</th>
                            <th>Status</th>
                            <th>Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($kamar)): ?>
                            <?php $i = 1; foreach ($kamar as $row) : ?>
                                <?php if ($row['fasilitas'] == 'Kosongan'): ?>
                                    <tr class="text-center">
                                        <td><?= $i++ ?></td>
                                        <td><?= htmlspecialchars($row['no_kamar'], ENT_QUOTES, 'UTF-8') ?></td>
                                        <td><?= htmlspecialchars($row['nama'], ENT_QUOTES, 'UTF-8') ?></td>
                                        <td><?= htmlspecialchars($row['tgl_masuk'], ENT_QUOTES, 'UTF-8') ?></td>
                                        <td><?= htmlspecialchars($row['tgl_pembayaran'], ENT_QUOTES, 'UTF-8') ?></td>
                                        <td><?= htmlspecialchars($row['status'], ENT_QUOTES, 'UTF-8') ?></td>
                                        <td>
                                            <a href="<?= base_url() ?>kamar/edit/<?= $row['id_kamar'] ?>" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                                            <a href="<?= base_url() ?>kamar/delete/<?= $row['id_kamar'] ?>" onclick="return confirm('Are you sure want to delete this payment?')" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <?php endif; ?>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="8" class="text-center"></td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
            </div>

            <!-- Flash Messages -->
            <?php if ($this->session->flashdata('success')): ?>
                <div class="alert alert-success" role="alert">
                    Success!
                </div>
            <?php endif; ?>
            <?php if ($this->session->flashdata('deleted')): ?>
                <div class="alert alert-warning" role="alert">
                    Deleted!
                </div>
            <?php endif; ?>
            <?php if ($this->session->flashdata('error')): ?>
                <div class="alert alert-danger" role="alert">
                    Failed!
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
