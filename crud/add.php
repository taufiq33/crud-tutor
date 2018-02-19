<!--
/**
 *
 * FILE 'add.php'
 * Digunakan untuk antar muka User untuk menambah data
 */
-->
<!-- Import konfigurasi dan template header -->
<?php require_once('config.php') ?>
<?php require('header.php') ?>

		<!-- Wajib sertakan enctype="multipart/form-data" karena akan berhubungan dengan upload file (tidak hanya teks) -->
    <form action="pros_add.php" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>NAMA</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>ALAMAT</td>
                <td><textarea name="alamat" cols="30" rows="10"></textarea></td>
            </tr>
            <tr>
                <td>FOTO</td>
                <td><input type="file" name="foto"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan" name="submit"></td>
            </tr>
        </table>
    </form>

<!--Import template footer-->
<?php require("footer.php") ?>