<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Akun</title>
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
        .form-label {
            font-weight: bold;
        }
    </style>
</head>
<body>
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Data Akun</h1>
    </div>

    <div class="card">
        <div class="card-body">
            <form method="post" action="<?= base_url() ?>akun/edit/<?=$no?>">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" name="username" class="form-control" id="username" placeholder="Masukkan username">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Masukkan password">
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan nama">
                </div>
                <div class="mb-3">
                    <label for="no_telepon" class="form-label">No. Telepon</label>
                    <input type="text" class="form-control" name="no_telepon" id="no_telepon" placeholder="Masukkan nomor telepon">
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Masukkan alamat">
                </div>
                <div class="mb-3">
                    <label for="role" class="form-label">Role</label>
                    <select class="form-control" id="role" name="role" required>
                        <option value="" selected>Pilih Role</option>
                        <option value="administrator">Administrator</option>
                        <option value="user">User</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
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
