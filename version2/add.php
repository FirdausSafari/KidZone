<?php

include_once("config.php");

if(isset($_POST['Submit'])){// ejaan submit xde huruf t
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];

    $result = mysqli_query($mysqli, "INSERT INTO barangmainan(nama,harga)" . "VALUES('$nama','$harga')");// semicolon xde

    echo "<script>alert('Tambah maklumat berjaya');"
    . "window.location='index.php'</script>";

}// curly bracket xde
else
{
    ?>
<html>
    <head><?php // head ejaan xde > ?>
        <title>TAMBAH REKOD</title>
    </head>
    <body>
    <center> <h2>TAMBAH REKOD KOLEKSI SIMPANAN</h2>
        <fieldset>
            <form action="add.php" method="post" name="form1">
                <table width="25%" border="0">
                    <tr>
                        <td>Nama Produk</td>
                        <td><input type="text" name="nama"></td>
                    </tr>
                    <tr>
                        <td>Harga</td>
                        <td><input type="text" name="harga"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" name="Submit" value="Add"></td>
                    </tr>
                </table>
            </form>

            <BR><a href="index.php">Kembali ke Laman Utama</a>
        </fieldset>
        </center>
<?php
}// curly bracket xde
?>
    </body>
</html>
