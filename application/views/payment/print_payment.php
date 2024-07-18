<!-- print_view.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Data Pembayaran</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

    <h2>Data Pembayaran</h2>

    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>No. Kamar</th>
                <th>Nama</th>
                <th>Tanggal Bayar</th>
                <th>Jumlah Bayar</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; foreach ($payments as $usr) : ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $usr->no_kamar ?></td>
                <td><?= $usr->nama ?></td>
                <td><?= $usr->tanggal_pembayaran ?></td>
                <td><?= $usr->jumlah_bayar ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <script type="text/javascript">
        window.print();
    </script>

</body>
</html>
