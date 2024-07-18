<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pembayaran</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet" type="text/css">
    <style>
        .card-header {
            background-color: #007bff;
            color: white;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
        .btn-warning {
            background-color: #ffc107;
            border-color: #ffc107;
        }
        .btn-warning:hover {
            background-color: #e0a800;
            border-color: #e0a800;
        }
        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
        }
        .btn-danger:hover {
            background-color: #bd2130;
            border-color: #bd2130;
        }
        .table thead th {
            vertical-align: middle;
            text-align: center;
        }
        .table td {
            vertical-align: middle;
            text-align: center;
        }
        .alert {
            margin-top: 20px;
        }
    </style>
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
                    <input type="text" name="keyword" class="form-control" placeholder="Masukkan ID User">
                </div>
                <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i> Cari</button>
            </form>
        </div>
        <div class="card-header">
            <?php if ($this->session->userdata('role') === 'administrator') : ?>
                <a href="<?= base_url('payment/add') ?>" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Tambah Data Pembayaran</a>
            <?php endif; ?>
        </div>

        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr class="text-center">
                        <th>No.</th>
                        <th>No. Kamar</th>
                        <th>ID User</th>
                        <th>Nama</th>
                        <th>Tanggal Bayar</th>
                        <th>Jumlah Bayar</th>
                        <!--<th>Bukti Pembayaran</th>-->
                        <th>Options</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; foreach ($payments as $row) : ?>
                        <tr class="text-center">
                            <?php if ($this->session->userdata('role') === 'administrator') : ?>
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
                                        <a href="<?= base_url() ?>payment/edit/<?= $row['id'] ?>" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                                        <a href="<?= base_url() ?>payment/delete/<?= $row['id'] ?>" onclick="return confirm('Are you sure want to delete this payment?')" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                                    <?php endif; ?>
                                </td>
                            <?php endif; ?>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
            
            <?php if ($this->session->flashdata('success')): ?>
                <div class="alert alert-success mt-3" role="alert">
                    <?= $this->session->flashdata('success') ?>
                </div>
            <?php endif; ?>
            <?php if ($this->session->flashdata('deleted')): ?>
                <div class="alert alert-warning mt-3" role="alert">
                    <?= $this->session->flashdata('deleted') ?>
                </div>
            <?php endif; ?>
            <?php if ($this->session->flashdata('error')): ?>
                <div class="alert alert-danger mt-3" role="alert">
                    <?= $this->session->flashdata('error') ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<!-- Bootstrap and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
