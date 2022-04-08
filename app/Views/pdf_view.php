<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate PDF CodeIgniter 4 - qadrLabs</title>

</head>

<body onload="window.print()">
    <h2>Data Mahasiswa </h2>
    <table border=1 width=80% cellpadding=2 cellspacing=0 style="margin-top: 5px; text-align:center">
        <thead>
                <tr style="font-weight:bold">
                    <td>ID Perjalanan</td>
                    <td>Nama</td>
                    <td>Lokasi</td>
                    <td>Tanggal</td>
                    <td>Waktu</td>
                    <td>Catatan</td>
                </tr>
        </thead>
        <tbody>
                  <?php $i = 1; ?>
                  <?php foreach ($tb_perjalanan as $row) : ?>
                    <tr>
                      <td><?= $i; ?></td>
                      <td><?= $row['id_user'] ?></td>
                      <td><?= $row['lokasi'] ?></td>
                      <td><?= $row['tanggal'] ?></td>
                      <td><?= $row['waktu'] ?></td>
                      <td><?= $row['ket'] ?></td>
                    </tr>
                    <?php $i++; ?>
                  <?php endforeach; ?>
        </tbody>
    </table>
    <p>Jumlah data : <?= $jumlahcp ?></p>

</body>

</html>