<?php
/**
 *
 * FILE KONFIGURASI 'config.php'
 * Digunakan untuk menyimpan objek utama Mysqli dan beberapa konfigurasi lain
 */
		
		/**
	   *	base_url 
		 *	isikan dengan URL lengkap aplikasi akan dijalankan (diakhiri slash "/")
		 *	jika ditaruh di direktori root web server maka isikan : http://localhost/crud/
		 *	sesuaikan dengan keadaan masing-masing..
		 */
		$base_url = "http://localhost/crud/";
		/**
	   *	table_name
		 *	isikan dengan nama tabel yang ada pada database
		 *	default : "teman"
		 *	sesuaikan dengan keadaan masing-masing..
		 */
    $table_name = "teman";
		/**
	   *	upload
		 *	isikan dengan nama direktori tempat foto akan diupload (diakhiri slash "/" )
		 *	pastikan telah ada hak akses penuh ( misal : chmod 777 dsb )
		 *	default : "file/"
		 *	sesuaikan dengan keadaan masing-masing..
		 */
    $upload = "file/";
		/**
	   *	db
		 *	instansiasi dari objek mysqli
		 *	parameter : "hostname", "user MySQL", "password", "nama database"
		 *	sesuaikan dengan keadaan masing-masing..
		 */
    $db = new Mysqli("localhost", "root", "", "latihan");