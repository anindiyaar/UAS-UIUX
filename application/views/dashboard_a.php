<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Aplikasi Kos</title>
    <!-- Link to Bootstrap CSS for responsive layout -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Link to Font Awesome CDN for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            background-color: #f4f4f9;
            font-family: 'Arial', sans-serif;
        }

        .container-fluid {
            padding: 20px;
        }

        .page-header {
            background-color: #007bff;
            color: white;
            padding: 5px 0;
            text-align: center;
            margin-bottom: 15px;
            border-radius: 0px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            position: relative;
            overflow: hidden;
        }

        .page-header h6 {
            font-size: 2.5rem;
            margin: 0;
            animation: fadeIn 1s ease-in-out;
        }

        .page-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(255,255,255,0.1) 0%, rgba(0,0,0,0.1) 100%);
            pointer-events: none;
            z-index: 0;
        }

        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .card {
            overflow: hidden;
            border-radius: 15px;
            transition: transform 0.3s, box-shadow 0.3s;
            position: relative;
            animation: fadeInDown 1s ease-in-out;
        }

        .card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(255,255,255,0.2) 0%, rgba(0,0,0,0.2) 100%);
            opacity: 0;
            transition: opacity 0.3s;
        }

        .card:hover::before {
            opacity: 1;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .card-img-top {
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
        }

        .card-body {
            text-align: center;
            padding: 20px;
            background-color: #ffffff;
        }

        .card-title {
            font-size: 1.5rem;
            font-weight: bold;
            color: #007bff;
        }

        .card-text {
            font-size: 1rem;
            color: #6c757d;
        }

        .stats {
            display: flex;
            justify-content: space-around;
            margin: 20px 0;
            flex-wrap: wrap;
            animation: fadeIn 1s ease-in-out;
        }

        .stats .stat {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
            margin: 10px;
            flex: 1;
            min-width: 200px;
            position: relative;
            overflow: hidden;
        }

        .stats .stat::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(255,255,255,0.2) 0%, rgba(0,0,0,0.2) 100%);
            opacity: 0;
            transition: opacity 0.3s;
        }

        .stats .stat:hover::before {
            opacity: 1;
        }

        .stats .stat:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .stats .stat h3 {
            margin-bottom: 10px;
            font-size: 2rem;
            color: #007bff;
        }

        .stats .stat p {
            margin: 0;
            font-size: 1rem;
            color: #6c757d;
        }

        .testimonials {
            margin-top: 20px;
        }

        .testimonials h2 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 2rem;
            color: #007bff;
            animation: fadeIn 1s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        .testimonial {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
            margin: 10px;
            flex: 1;
            min-width: 200px;
            position: relative;
            overflow: hidden;
        }

        .testimonial::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(255,255,255,0.2) 0%, rgba(0,0,0,0.2) 100%);
            opacity: 0;
            transition: opacity 0.3s;
        }

        .testimonial:hover::before {
            opacity: 1;
        }

        .testimonial:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .testimonial img {
            border-radius: 50%;
            margin-bottom: 10px;
            width: 100px;
            height: 100px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        .testimonial:hover img {
            transform: scale(1.1);
        }

        .testimonial p {
            margin: 0;
            font-size: 1rem;
            color: #6c757d;
        }

        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 0.9rem;
            color: #6c757d;
        }
    </style>
</head>
<body>
<div class="container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <h4>Selamat datang di Dashboard User</h4>
        </div>

        <!-- Cards -->
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="assets/image/kos1.jpeg" class="card-img-top" alt="Kos Pak'E 1">
                    <div class="card-body">
                        <h5 class="card-title">Kos Pak'E</h5>
                        <p class="card-text">Selamat datang di Dashboard User Kost Putra Pak'E</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="assets/image/kos2.jpeg" class="card-img-top" alt="Kos Pak'E 2">
                    <div class="card-body">
                        <h5 class="card-title">Kos Pak'E</h5>
                        <p class="card-text">Kami menyediakan fasilitas yang nyaman untuk para mahasiswa</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="assets/image/kos3.jpeg" class="card-img-top" alt="Kos Pak'E 3">
                    <div class="card-body">
                        <h5 class="card-title">Kos Pak'E</h5>
                        <p class="card-text">Kos Pak'E | Kos Nyaman dengan harga Terjangkau</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Statistics -->
        <div class="stats">
            <div class="stat">
                <h3><i class="fas fa-users"></i></h3>
                <p>Lingkungan Aman</p>
            </div>
            <div class="stat">
                <h3><i class="fas fa-bed"></i></h3>
                <p>Kamar Nyaman</p>
            </div>
            <div class="stat">
                <h3><i class="fas fa-thumbs-up"></i></h3>
                <p>Harga Terjangkau</p>
            </div>
        </div>

        <!-- Footer -->
        <div class="footer">
            &copy; Website Kos Pak'E 2024
        </div>
    </div>

    <!-- Link to Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
