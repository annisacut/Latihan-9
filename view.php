<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width, initial-scale=1">
    <title>BUKU</title>
</head>
<body>

<div class="container">
    <h3>Data Buku</h3>
       <br>
       <table border="1">
          <tr>
                <th>NO</th>
                <th>JUDUL</th>
                <th>PENGARANG</th>
                <th>PENERBIT</th>
                <th>TAHUN</th>
            </tr>
<tbody>
<?php
    $query = mysqli_query($db, "SELECT * FROM buku");

    while($tabel_latihan9 = mysqli_fetch_array($query)){
        ?>

        <tr>
            <td><?php echo $book['no']?></td>
            <td><?php echo $book['judul']?></td>
            <td><?php echo $book['pengarang']?></td>
            <td><?php echo $book['penerbit']?></td>
            <td><?php echo $book['tahun']?></td>

        </tr>
    <?php
    }
    ?>
</tbody>
</table>
</div>
</body>
</html>