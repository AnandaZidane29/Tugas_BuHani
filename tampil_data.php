<?php
include('koneksi.php');
$db = new database();
$data_barang = $db->tampil_data();
?>
<!DOCTYPE html>
<html>

<style>
* {
    margin: 0;
    padding: 0;
    font-family: 'Segoe UI'
}

th {
  background-color: #fc9952;
  color: white;
}

table {
    width: 75%;
    border-collapse: collapse;
    margin: auto;
}

table, tr:nth-child(odd) {
    background-color: #ffddcc;
}

table, tr:nth-child(even) {
    background-color: white;
}

table, th {
    border: 1px solid #ddd;
    padding: 16px 8px;
}

</style>
<head>
    <title></title>
</head>

<body>
<a href="tambah_data.php">Tambah Data</a>
    <table>
        <tr>
            <th>No</th>
            <th>Barang</th>
            <th>Stok</th>
            <th>Harga Beli</th>
            <th>Harga Jual</th>
            <th>Action</th>
        </tr>
        <?php
        $no = 1;
        foreach ($data_barang as $row) {
        ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $row['nama_barang']; ?></td>
                <td><?php echo $row['stok']; ?></td>
                <td><?php echo $row['harga_beli']; ?></td>
                <td><?php echo $row['harga_jual']; ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $row['id_barang']; ?>">Update</a>
                    <a href="proses_barang.php?action=delete&id=<?php echo $row['id_barang']; ?>">Delete</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>