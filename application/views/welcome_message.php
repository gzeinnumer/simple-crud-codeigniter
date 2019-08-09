<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
	<h1>Welcome to CodeIgniter! Hy I Am Zein!</h1>

	<div id="body">
		<p>Page ini berisi cuma crud sederhana menggunakan CI. tampil tabel dan crud table, done.</p>

		<p>Silahkan kamu konfigurasi dulu beberafile file, salah satunya:</p>
		<code>application/config/config.php</code>
		<p>ubah bagian berikut</p>
		<code>$config['base_url'] = 'http://localhost/simple-crud-codeigniter/';</code>
		<br>
		<p>Secara default link akan mengikut sertakan index.php pada setiap pemanggilan controllernya. seperti:</p>
		<code>$config['base_url'] = 'http://localhost/simple-crud-codeigniter/index.php/controller';</code>
		<p>Tapi bisa dihilangkan dengan cara mengubah kode berikut pada config.php:</p>
		<code>
			//cari kode berikut<br>
			$config['index_page'] = "index.php"<br> 
			//ganti dengan ini<br>
			$config['index_page'] = ""<br>

		</code>
		<p>Lalu buat file diluar folder aplication dengan nama .htaccess, seperti ini:</p>
		<code>
			Path:<br>
			Your_website_folder/<br>
			application/<br>
			assets/<br>
			system/<br>
			.htaccess <——— this file<br>
			index.php<br>
		</code>
		<p>Jika file sudah dibuat, maka isi dengan code berikut:</p>
		<code>
			<?php echo "< If*Module mod_rewrite.c><br>
			RewriteEngine On<br>
			RewriteCond %{REQUEST_FILENAME} !-f<br>
			RewriteCond %{REQUEST_FILENAME} !-d<br>
			RewriteRule ^(.*)$ index.php/$1 [L] <br>
			< / If*Module> <br>
			hapus spasi dan bintang pada tag ifmodule"
			?>
		</code>
		<p>Terkadang kita perlu konfigurasi ini jika peritnah di atas tidak berjalan. cari bagian berikut di config.php</p>
		<code>
			//cari kode berikut<br>
			$config['uri_protocol'] = "AUTO"<br>
			//ganti dengan ini<br>
			$config['uri_protocol'] = "REQUEST_URI"<br> 
		</code>
		<br>
		<p>Disini zein akan meng-CRUD table user, jadi silahkan buat database dengan nama db_simple_ci_crud, dan masukan query berikut ke database.</p>
		<code>
			SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";<br>
			SET AUTOCOMMIT = 0;<br>
			START TRANSACTION;<br>
			SET time_zone = "+00:00";<br>
			<br>
			CREATE TABLE `users` (`id` int(11) NOT NULL,`username` varchar(255) NOT NULL,`name` varchar(255) NOT NULL,`pass` varchar(255) NOT NULL) ENGINE=InnoDB DEFAULT CHARSET=latin1;<br>
			<br>
			INSERT INTO `users` (`id`, `username`, `name`, `pass`) VALUES (1, 'gzeinnumer', 'Zein', '123456');<br>
			<br>
			ALTER TABLE `users` <br>
			ADD PRIMARY KEY (`id`);<br>
			<br>
			ALTER TABLE `users`<br>
			MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;<br>
			COMMIT;<br>
		</code>
		<p>Jika sudah, silahkan konfigurasi agar CI bisa mengakses database. silahkan buka file yang ada di:</p>
		<code>application/config/databse.php</code>
		
		<p>Ubah bagian ini</p>
		<code>
			$db['default'] = array(<br>
				'dsn'	=> '',<br>
				'hostname' => 'localhost',<br>
				'username' => 'root',<br>
				'password' => '',<br>
				'database' => 'db_simple_ci_crud',<br>
				//...<br>
			);
		</code>
		<p>database sesuaikan dengan name yang kita pakai untuk nama databasenya.</p>
		<br>
		<p>Lalu ubah code di autoload.php dalam folder config:</p>
		<code>
		$autoload['libraries'] = array('database','form_validation','session');<br>
		$autoload['helper'] = array('url');<br>
		</code>
		<br>

		<p>Untuk melihat table, silahkan akses link ini.</p>
		<code>http://localhost/simple-crud-codeigniter/crud/</code>

	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>