<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Latihan</title>
</head>
<body>
    <?php 
       include "conn/conn.php";

    ?>
    
    <table border="1">
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><?php echo $nama; ?></td>
        </tr>
        <tr>
            <td>Usia</td>
            <td>:</td>
            <td><?php echo $usia; ?></td>
        </tr>
        <tr>
            <td>Nilai</td>
            <td>:</td>
            <td><?php echo $nilai; ?></td>
        </tr>
        <tr>
            <td>Keterangan</td>
            <td>:</td>
            <td><?php echo $keterangan; ?></td>
        </tr>
    </table>
</body>
</html>