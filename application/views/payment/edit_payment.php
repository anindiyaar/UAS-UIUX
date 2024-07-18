<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pembayaran</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url('assets/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet" type="text/css">
    <style>
        body {
            background-color: #f8f9fc;
        }
        .card {
            margin-top: 20px;
            border: 1px solid #d1d3e2;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .card-header {
            background-color: #007bff;
            color: white;
            border-bottom: none;
        }
        .card-body {
            padding: 20px;
        }
        .form-label {
            font-weight: bold;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
        .form-control {
            border: 1px solid #d1d3e2;
        }
        .form-control:focus {
            border-color: #007bff;
            box-shadow: none;
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
        <h1 class="h3 mb-0 text-gray-800">Edit Pembayaran</h1>
    </div>

    <div class="card">
        <div class="card-body">
            <form method="post" action="<?= base_url() ?>payment/edit/<?= $id ?>">
                <div class="mb-3">
                    <label for="no_kamar" class="form-label">No. Kamar</label>
                    <input type="text" name="no_kamar" placeholder="Nomor Kamar" class="form-control" id="no_kamar">
                </div>
                <div class="mb-3">
                    <label for="id_user" class="form-label">ID User</label>
                    <input type="text" name="id_user" placeholder="ID User" class="form-control" id="id_user">
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Penghuni">
                </div>
                <div class="mb-3">
                    <label for="tanggal_pembayaran" class="form-label">Tanggal Bayar</label>
                    <input type="date" class="form-control" name="tanggal_pembayaran" id="tanggal_pembayaran">
                </div>
                <div class="mb-3">
                    <label for="jumlah_bayar" class="form-label">Jumlah Bayar</label>
                    <input type="text" name="jumlah_bayar" placeholder="Rp." class="form-control" id="jumlah_bayar">
                </div>
                <div class="mb-3">
                    <label for="bukti_pembayaran" class="form-label">Bukti Transaksi</label>
                    <input type="file" class="form-control" name="bukti_pembayaran" id="bukti_pembayaran">
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
            <?php if ($this->session->flashdata('success')): ?>
                <div class="alert alert-success mt-3" role="alert">
                    <?= $this->session->flashdata('success') ?>
                </div>
            <?php endif; ?>
            <?php if ($this->session->flashdata('error')): ?>
                <div class="alert alert-danger mt-3" role="alert">
                    Failed!
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
