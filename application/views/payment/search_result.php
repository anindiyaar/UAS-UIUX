<!-- application/views/search_results.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Pembayaran</h1>
    </div>
    <div class="card">
          <div class="card-body">
            <form action="<?= base_url('payment/search') ?>" method="GET" class="form-inline">
                <div class="form-group mr-2">
                    <input type="text" name="keyword" class="form-control" placeholder="Masukkan Username">
                </div>
                <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i> Cari</button>
            </form>
        </div>
        <div class="card-header">
        <?php if ($this->session->userdata('role') === 'administrator') : ?>
            <a href="<?= base_url('payment/add') ?>" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Pembayaran</a>
            <?php endif; ?>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr class="text-center">
                        <th>No.</th>
                        <th>No. Kamar</th>
                        <th>Id User</th>
                        <th>Username</th>
                        <th>Tanggal Bayar</th>
                        <th>Jumlah Bayar</th>
                        <!--<th>Bukti Pembayaran</th>-->
                        <?php if ($this->session->userdata('role') === 'administrator') : ?>
                        <th>Options</th>
                        <?php endif; ?>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; foreach ($payments as $row) : ?>
                        <tr class="text-center">
                            <td><?= $i++ ?></td>
                            <td><?= $row['no_kamar'] ?></td>
                            <td><?= $row['id_user'] ?></td>
                            <td><?= $row['nama'] ?></td>
                            <td><?= $row['tanggal_pembayaran'] ?></td>
                            <td><?= ($row['jumlah_bayar'] !== null) ? $row['jumlah_bayar'] : 'N/A' ?></td>
                            <!--<td>-->
                            <!--    <?php if (!empty($row['bukti_pembayaran'])): ?>-->
                            <!--        <img src="<?= base_url('path/to/uploads/' . $row['bukti_pembayaran']) ?>" alt="Bukti Pembayaran" class="img-fluid" style="max-width: 100px; height: auto;">-->
                            <!--    <?php else: ?>-->
                            <!--        Tidak Ada Bukti-->
                            <!--    <?php endif; ?>-->
                            <!--</td>-->
                            <td>
                            <?php if ($this->session->userdata('role') === 'administrator') : ?>
                                <a href="<?= base_url('payment/print') ?>" class="btn btn-info btn-sm"><i class="fas fa-print"></i> Print</a>
                                <a href="<?= base_url() ?>payment/edit/<?= $row['id'] ?>" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                                <a href="<?= base_url() ?>payment/delete/<?= $row['id'] ?>" onclick="return confirm('Are you sure want to delete this payment?')" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                            <?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
            <?php if ($this->session->flashdata('success')): ?>
                <!-- Success message -->
            <?php endif; ?>
            <?php if ($this->session->flashdata('deleted')): ?>
                <!-- Deleted message -->
            <?php endif; ?>
            <?php if ($this->session->flashdata('error')): ?>
                <div class="alert alert-danger" role="alert">
                    Failed!
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
</body>
</html>
