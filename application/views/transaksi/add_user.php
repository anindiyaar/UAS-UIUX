<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Transaksi</title>
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
        <h1 class="h3 mb-0 text-gray-800">Tambah Data Transaksi</h1>
    </div>

    <div class="card">
        <div class="card-body">
            <form method="post" action="<?= base_url() ?>transaksi/add">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama User">
                </div>
                <div class="mb-3">
                    <label for="durasi_sewa" class="form-label">Durasi Sewa</label>
                    <input type="text" class="form-control" name="durasi_sewa" id="durasi_sewa" placeholder="Durasi Penyewaan" aria-describedby="durasi_sewa">
                </div>
                <div class="mb-3">
                    <label for="nominal" class="form-label">Nominal</label>
                    <input type="text" class="form-control" name="nominal" id="nominal" placeholder="Nominal Harga">
                </div>
                <div class="mb-3">
                    <label for="jenis_bayar" class="form-label">Jenis Bayar</label>
                    <input type="text" name="jenis_bayar" class="form-control" id="jenis_bayar" placeholder="Cash/Transfer">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <?php if ($this->session->flashdata('success')) { ?>
                <div class="alert alert-success mt-3" role="alert">
                    <?= $this->session->flashdata('success') ?>
                </div>
            <?php } ?>
            <?php if ($this->session->flashdata('error')) { ?>
                <div class="alert alert-danger mt-3" role="alert">
                    <?= $this->session->flashdata('error') ?>
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
