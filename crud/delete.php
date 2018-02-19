<!--
/**
 *
 * FILE 'delete.php'
 * Digunakan untuk menangani action delete dari user
 */
-->
<?php
		/* Cek ketersediaan id pada url */
    if (isset($_GET['id'])) :
		
        /* Menyertakan file konfigurasi */
        require_once('config.php');

        $id  = $_GET['id'];

				/* Ambil data berdasarkan id , lalu ambil data nama foto */
        $ambil_data = "SELECT foto FROM $table_name WHERE id=$id";
        $file       = $db->query($ambil_data)->fetch_object();
				/* query hapus data */
        $sql        = "DELETE FROM $table_name WHERE id=$id";

        if ( $db->query($sql) ) :
						/* 
						 *	menghapus file gambar pada direktori upload
						 *	misal nama file = img78.png
						 *	menjadi unlink("file/img78.png")
						*/
            unlink($upload.$file->foto);
						
						/* Redirect dengan pesan hapus_berhasil */
            header('Location: show.php?pesan=hapus_berhasil');
        else :
						/* Jika gagal */
            header('Location: show.php?pesan=hapus_gagal');
        endif;

    endif;