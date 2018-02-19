<?php
	/* Cek ketersediaan id pada url */
    if (isset($_GET['id'])) :
        
        /* Menyertakan file konfigurasi */
				require_once('config.php');

        $id  = $_GET['id'];

        /* Ambil data berdasarkan id, konversi ke Object */
				$ambil_data = "SELECT * FROM $table_name WHERE id=$id";
        $data       = $db->query($ambil_data)->fetch_object();
?>

<!-- Import template header -->
<?php require('header.php') ?>

    <form action="pros_edit.php" method="post" enctype="multipart/form-data">
		<!--
				/* 
				 *	simpan atribut id dari data untuk keperluan proses edit
				 *	simpan nama file lama, mengantisipasi jika user mengganti foto
				*/
		-->
        <input type="hidden" name="id" value="<?php echo $data->id ?>">
        <input type="hidden" name="foto_lama" value="<?php echo $data->foto ?>">
        <table>
            <tr>
                <td>NAMA</td>
                <td><input type="text" name="nama" value="<?php echo $data->nama ?>"></td>
            </tr>
            <tr>
                <td>ALAMAT</td>
                <td><textarea name="alamat" cols="30" rows="10"><?php echo $data->alamat ?></textarea></td>
            </tr>
            <tr>
                <td>FOTO</td>
                <td>
                    <img src="<?php echo $upload.$data->foto ?>" alt="foto_user">
                    <input type="file" name="foto">
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan" name="submit"></td>
            </tr>
        </table>
    </form>

<!-- sertakan template footer -->
<?php require('footer.php') ?>

<?php
    endif;