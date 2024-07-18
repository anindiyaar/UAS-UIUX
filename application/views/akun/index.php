<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Akun</title>
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
        <h1 class="h3 mb-0 text-gray-800">Data Akun</h1>
    </div>

    <div class="card">
        <div class="card-header">
            <a href="<?= base_url('akun/add_akun') ?>" class="btn btn-primary btn-sm">
                <i class="fas fa-plus"></i> Tambah Data Akun
            </a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <!-- Admin Table -->
            <h5>Akun Admin</h5>
            <table id="adminTable" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Nama</th>
                        <th>No. Telepon</th>
                        <th>Alamat</th>
                        <th>Role</th>
                        <th>Options</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($user)): ?>
                        <?php $i = 1; foreach ($user as $row) : ?>
                            <?php if ($row['role'] == 'administrator'): ?>
                                <tr>
                                    <td><?= $i++ ?></td>
                                    <td><?= htmlspecialchars($row['username'], ENT_QUOTES, 'UTF-8') ?></td>
                                    <td><?= htmlspecialchars($row['password'], ENT_QUOTES, 'UTF-8') ?></td>
                                    <td><?= htmlspecialchars($row['nama'], ENT_QUOTES, 'UTF-8') ?></td>
                                    <td><?= htmlspecialchars($row['no_telepon'], ENT_QUOTES, 'UTF-8') ?></td>
                                    <td><?= htmlspecialchars($row['alamat'], ENT_QUOTES, 'UTF-8') ?></td>
                                    <td><?= htmlspecialchars($row['role'], ENT_QUOTES, 'UTF-8') ?></td>
                                    <td>
                                        <a href="<?= base_url('akun/edit/' . $row['no']) ?>" class="btn btn-warning btn-sm">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="<?= base_url('akun/delete/' . $row['no']) ?>" onclick="return confirm('Are you sure you want to delete this user?')" class="btn btn-danger btn-sm">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="8" class="text-center">No admin accounts found</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>

            <!-- User Table -->
            <h5>Akun User</h5>
            <table id="userTable" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Nama</th>
                        <th>No. Telepon</th>
                        <th>Alamat</th>
                        <th>Role</th>
                        <th>Options</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($user)): ?>
                        <?php $i = 1; foreach ($user as $row) : ?>
                            <?php if ($row['role'] == 'user'): ?>
                                <tr>
                                    <td><?= $i++ ?></td>
                                    <td><?= htmlspecialchars($row['username'], ENT_QUOTES, 'UTF-8') ?></td>
                                    <td><?= htmlspecialchars($row['password'], ENT_QUOTES, 'UTF-8') ?></td>
                                    <td><?= htmlspecialchars($row['nama'], ENT_QUOTES, 'UTF-8') ?></td>
                                    <td><?= htmlspecialchars($row['no_telepon'], ENT_QUOTES, 'UTF-8') ?></td>
                                    <td><?= htmlspecialchars($row['alamat'], ENT_QUOTES, 'UTF-8') ?></td>
                                    <td><?= htmlspecialchars($row['role'], ENT_QUOTES, 'UTF-8') ?></td>
                                    <td>
                                        <a href="<?= base_url('akun/edit/' . $row['no']) ?>" class="btn btn-warning btn-sm">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="<?= base_url('akun/delete/' . $row['no']) ?>" onclick="return confirm('Are you sure you want to delete this user?')" class="btn btn-danger btn-sm">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="8" class="text-center">No user accounts found</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>

            <!-- Flash Messages -->
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
