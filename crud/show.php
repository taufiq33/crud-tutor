<!--
/**
 *
 * FILE 'show.php'
 * Digunakan untuk menampilkan data
 */
-->

<!-- Import konfigurasi dan template header -->
<?php require_once('config.php') ?>
<?php require('header.php') ?>

<h1>Daftar Teman-temanku</h1>

<?php
	/* Apakah ada data $_GET berindeks 'pesan' ? */
    if(isset($_GET['pesan'])) :
		
			/* Jika ada , tampilkan */
        echo "<p class='pesan'>".$_GET['pesan']."</p>";
    endif;
?>

<table class="data" border='1'>
    <tr>
        <th>NO</th>
        <th>NAMA</th>
        <th>ALAMAT</th>
        <th>FOTO</th>
        <th>OPERASI</th>
    </tr>
    <?php
			/* Menyiapkan Query */
        $sql    = "SELECT * FROM $table_name";
				/* Eksekusi */
        $query  = $db->query($sql);
        $no     = 1; // Untuk penomoran otomatis
				/* Konversi data yang ada menjadi Object */
        while( $data = $query->fetch_object() ) :
    ?>
            <tr>
                <td><?php echo $no ?>.</td>
                <td><?php echo $data->nama ?></td>
                <td><?php echo $data->alamat ?></td>
                <td>
										<!-- Menampilkan gambar, bantuan $upload dari file config.php -->
                    <img src="<?php echo $upload.$data->foto ?>" alt="foto_teman">
                </td>
                <td>
								<!-- Link action untuk delete dan edit , bantuan dari $base_url (config.php) -->
                    <a href="<?php echo $base_url.'edit.php?id='.$data->id ?>">Edit</a>
										<!-- Keyword return confirm = untuk tampilkan dialog Konfirmasi pada user -->
                    <a onclick="return confirm('Yakin ingin hapus?')" href="<?php echo $base_url.'delete.php?id='.$data->id ?>">Delete</a>
                </td>
            </tr>
    <?php
						/* Membuat penomoran otomatis */
            $no++;
        endwhile;
    ?>

</table>
<!--Import template footer-->
<?php require("footer.php") ?>