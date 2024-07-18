<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Transaksi</title>
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
        <h1 class="h3 mb-0 text-gray-800">Data Transaksi</h1>
    </div>
    
    <div class="card">
        <div class="card-header">
            <a href="<?= base_url('transaksi/add')?>" class="btn btn-primary btn-sm">
                <i class="fas fa-plus"></i> Tambah Data Transaksi
            </a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr class="text-center">
                        <th>No</th>
                        <th>Nama</th>
                        <th>Durasi Sewa</th>
                        <th>Nominal</th>
                        <th>Jenis Bayar</th>
                        <th>Options</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; foreach ($users as $row) : ?>
                        <tr class="text-center">
                            <td><?= $i++ ?></td>
                            <td><?= $row['nama'] ?></td>
                            <td><?= $row['durasi_sewa'] ?></td>
                            <td><?= $row['nominal'] ?></td>
                            <td><?= $row['jenis_bayar'] ?></td>
                            <td>
                                <a href="<?= base_url('transaksi/print')?>" class="btn btn-danger btn-sm">
                                <i class="fas fa-print"></i>
                                </a>
                                <a href="<?= base_url() ?>transaksi/delete/<?= $row['id'] ?>" onclick="return confirm('Are you sure you want to delete this user ?')" class="btn btn-sm btn-danger">
                                <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
            <?php if ($this->session->flashdata('success')) { ?>
                <div class="alert alert-success" role="alert">
                    Successfully Added
                </div>
            <?php } ?>
            <?php if ($this->session->flashdata('error')) { ?>
                <div class="alert alert-danger" role="alert">
                    Failed!
                </div>
            <?php } ?>
        </div>
    </div>
</div>

<!-- Bootstrap and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
