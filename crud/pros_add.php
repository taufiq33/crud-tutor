<!--
/**
 *
 * FILE 'pros_add.php'
 * Digunakan untuk memproses tambah data
 */
-->
<?php
	/* Cek ketersediaan data user */
    if ( isset($_POST['submit']) ) :

        /* Menyertakan file konfigurasi */
				require_once('config.php');

        /* Sedot data, simpan dalam variabel */
				$nama       = $_POST['nama'];
        $alamat     = $_POST['alamat'];
        $temporary  = $_FILES['foto']['tmp_name'];
        $nama_foto  = $_FILES['foto']['name'];

        /* 
				 *	MELAKUKAN PERUBAHAN NAMA
				 *	Untuk mencegah duplikasi nama
				 *	misal nama file = img78.png
				 *	menjadi 2018-12-12_9-2-2img78.jpg
				*/
				$encoded_name   = date('Y-m-d_H-i-s').urlencode($nama_foto);

        /* Pindah file hasil upload */
				if ( move_uploaded_file($temporary, $upload.$encoded_name) ) :
            $sql    = "INSERT INTO $table_name (nama, alamat, foto) VALUES ('$nama', '$alamat', '$encoded_name')";
            $query  = $db->query($sql);

            if ($query) :
                header('Location: show.php?pesan=add_berhasil');
            else :
                header('Location: show.php?pesan=add_gagal');
            endif;

        endif;

    endif;