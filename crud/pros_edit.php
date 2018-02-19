<!--
/**
 *
 * FILE 'pros_edit.php'
 * Digunakan untuk menangani proses edit dari user
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
				
				/* atribut hidden */
        $id         = $_POST['id'];
        $foto_lama  = $_POST['foto_lama'];
				
				/* defaultnya FALSE, akan jadi TRUE jika User mengupload gambar baru */
        $edit_foto  = FALSE;

        /* Apakah User mengupload gambar Baru ? */
				if ( empty($_FILES['foto']['name']) ) :

            /* Jika tidak : */
						$sql = "UPDATE $table_name SET nama='$nama', alamat='$alamat' WHERE id=$id";
        else :

            /* Jika ya : */
						$edit_foto  = TRUE;
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
								/* Jika Pemindahan Berhasil : */
                $sql = "UPDATE $table_name SET nama='$nama', alamat='$alamat', foto='$encoded_name' WHERE id=$id";
            endif;
        endif;

        if ( $db->query($sql) ) :

            /* Apakah User mengubah fotonya ?? */
						if ($edit_foto) :
								
								/* Jika ya : 
											Hapus foto lama
								*/
                unlink($upload.$foto_lama);
            endif;

            header('Location: show.php?pesan=edit_berhasil');
        else :
            header('Location: show.php?pesan=edit_gagal');
        endif;

    endif;