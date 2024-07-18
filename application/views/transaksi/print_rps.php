<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Print Kwitansi</title>
</head>
<body>
    
          <table>
          <?php $no = 1;
                    foreach($user as $usr) : ?>

<tr>
    <td style="padding-bottom: 10px;">Kwitansi Pembayaran Kos Pak'E</td>
</tr>
<tr>
    <td>Nama</td>
    <td>:</td>
    <td><?= $usr->nama ?></td>
</tr>
<tr>
    <td>Durasi Sewa</td>
    <td>:</td>
    <td><?= $usr->durasi_sewa ?></td>
</tr>
<tr>
    <td>Nominal</td>
    <td>:</td>
    <td><?= $usr->nominal ?></td>
</tr>
<tr>
    <td>Jenis</td>
    <td>:</td>
    <td><?= $usr->jenis_bayar ?></td>
</tr>
<tr>
    <td style="padding-top: 30px;">Ttd Pemilik Kos</td>
</tr>
<tr>
    <td style="padding-top: 50px;">( . . . . . . . . . . . )</td>
</tr>
                    
          <?php endforeach ?>
          </table>

          <script type="text/javascript">
                    window.print();
                    </script>
</body>
</html>