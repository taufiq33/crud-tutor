<!--
/**
 *
 * FILE TEMPLATE 'header.php'
 * Digunakan untuk menyimpan bagian header
 */
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        *{
            font-family: sans-serif;
        }
        .pesan{
            text-align: center;
            padding: 10px 0;
            font-weight: bold;
        }
        table.data{
            border-collapse: collapse;
            width: 88%;
            margin: 0 auto;
        }
        table.data th{
            padding: 6px;
            background-color: #eee;
        }
        table.data td{
            padding: 2px;
        }
        img{
            height: 60px;
            width: 60px;
        }
        footer{
            text-align: center;
        }
    </style>
    <title>Crud APP</title>
</head>
<body>
<!--
		/**
	   *	Menu navigasi antar halaman
		 *	memanfaatkan settingan pada config.php bagian $base_url
		 *	PENTING !
		 *	WAJIB SERTAKAN FILE 'config.php' SEBELUM file ini
		 */
-->
    <nav>
        <a href="<?php echo $base_url.'add.php' ?>">Tambah data</a>
        <a href="<?php echo $base_url ?>">Lihat data</a>
    </nav>