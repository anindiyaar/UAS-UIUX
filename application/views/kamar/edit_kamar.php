<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Kamar</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
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
        .form-control {
            border-color: #d1d3e2;
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
        <h1 class="h3 mb-0 text-gray-800">Edit Data Kamar</h1>
    </div>

    <div class="card">
        <div class="card-body">
            <form method="post" action="<?= base_url() ?>kamar/edit/<?= $id_kamar ?>">
                <div class="mb-3">
                    <label for="no_kamar" class="form-label"><strong>No. Kamar</strong></label>
                    <input type="text" name="no_kamar" placeholder="Nomor Kamar" class="form-control" id="no_kamar">
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label"><strong>Penghuni</strong></label>
                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Penghuni">
                </div>
                <div class="mb-3">
                    <label for="fasilitas" class="form-label"><strong>Fasilitas</strong></label>
                    <select class="form-control" id="fasilitas" name="fasilitas" required>
                        <option value="" selected disabled>Pilih Fasilitas</option>
                        <option value="Isian & Kamar Mandi Dalam">Isian & Kamar Mandi Dalam</option>
                        <option value="Isian">Isian</option>
                        <option value="Kosongan & Kamar Mandi Dalam">Kosongan & Kamar Mandi Dalam</option>
                        <option value="Kosongan">Kosongan</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="tgl_masuk" class="form-label"><strong>Tanggal Masuk</strong></label>
                    <input type="date" class="form-control" name="tgl_masuk" id="tgl_masuk">
                </div>
                <div class="mb-3">
                    <label for="tgl_pembayaran" class="form-label"><strong>Tanggal Bayar</strong></label>
                    <input type="date" class="form-control" name="tgl_pembayaran" id="tgl_pembayaran">
                </div>
                <div class="mb-3">
                    <label for="status" class="form-label"><strong>Status</strong></label>
                    <select class="form-control" id="status" name="status" required>
                        <option value="" selected disabled>Pilih Status</option>
                        <option value="Tersedia">Tersedia</option>
                        <option value="Terisi">Terisi</option>
                        <option value="Perbaikan">Perbaikan</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

            <!-- Flash Messages -->
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
