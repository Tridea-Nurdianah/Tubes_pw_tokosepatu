<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran</title>
</head>
<body>
<form action="" method="POST">
        <fieldset>
        <legend>Pendaftaran</legend>
        <p>
            <label>Jenis_sepatu:</label>
            <input type="text" name="Jenis_sepatu" placeholder="Jenis_sepatu..." />
        </p>

        <P>
        <label>Merk_sepatu:</label>
        <input type="text"  name="Merk_sepatu" placeholder="Jenis_sepatu..." />
        </P>

        <p>
        <label>Harga:</label>
        <input type="text" name="Harga" placeholder="Harga..." />
        </p>

        <p>
        <label>Jml_pesan:</label>
        <input type="text" name="Jml_pesan" placeholder="Jml_pesan..." />
        </p>

        <p>
        <label>Ongkos_kirim:</label>
        <input type="text" name="Ongkos_kirim" placeholder="Ongkos_kirim..." />
        </p>

        <p>
        <label>Total_bayar:</label>
        <input type="text" name="Total_bayar" placeholder="Total_bayar..." />
        </p>
        <p>
        <input type="submit" name="submit" value="Daftar" />
        </p>
        </fieldset>
    </form>
</body>
</html>

<?php
include "koneksi.php";

if (isset($_POST['submit'])) {
    $Jenis_sepatu = $_POST["Jenis_sepatu"];
    $Merk_sepatu = $_POST["Merk_sepatu"]
    $Harga = $_POST["Harga"];
    $Jml_pesan= $_POST["Jml_pesan"];
    $Ongkos_kirim = $_POST["Ongkos_kirim"];
    $Total_bayar = $_POST["Total_bayar"];

    $sql = "INSERT INTO pendaftaran (Jenis_sepatu, Merk_sepatu, Harga, Jml_pesan, Ongkos_kirim, Total_bayar) VALUES ('$Jenis_sepatu', '$Harga', '$Jml_pesan',  '$Ongkos_kirim', ' $Total_bayar')";

    if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
    } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
}

mysqli_close($con);
?>