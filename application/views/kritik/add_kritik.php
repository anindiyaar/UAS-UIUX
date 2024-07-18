<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Kritik</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f4f4f9;
            font-family: 'Arial', sans-serif;
        }
        .container {
            padding-top: 50px;
        }
        .form-container {
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }
        .form-container:hover {
            transform: translateY(-5px);
        }
        .form-header {
            background-color: #007bff;
            color: white;
            padding: 10px 0;
            border-radius: 10px 10px 0 0;
            text-align: center;
            margin-bottom: 20px;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
            transition: background-color 0.3s, transform 0.3s;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            transform: translateY(-2px);
        }
        .form-group label {
            font-weight: bold;
        }
        .form-group input,
        .form-group textarea {
            border-radius: 5px;
            border: 1px solid #ddd;
            padding: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="form-container">
                    <div class="form-header">
                        <h2 class="mb-0">Form Kritik</h2>
                    </div>
                    <form action="<?php echo site_url('kritik/add_kritik'); ?>" method="post">
                        <div class="form-group">
                            <label for="nama">Nama:</label>
                            <input type="text" name="nama" id="nama" placeholder="Masukan Nama" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="no_hp">No. Telepon:</label>
                            <input type="tel" name="no_hp" id="no_hp" placeholder="Masukan Nomor Telepon" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="kritik">Kritik:</label>
                            <textarea name="kritik" id="kritik" placeholder="Masukan kritik atau masalah yang dialami/Nomor Kamar" class="form-control" rows="5" required></textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (Optional) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
