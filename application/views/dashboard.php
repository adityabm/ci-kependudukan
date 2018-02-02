<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<style type="text/css">/*
		table {
		    border-collapse: collapse;
		    width: 100%;
		}

		th, td {
		    text-align: left;
		    padding: 8px;
		}

		tr:nth-child(even){background-color: #f2f2f2}

		th {
		    background-color: #4CAF50;
		    color: white;
		}
		input[type=button], input[type=submit], input[type=reset],button {
		    background-color: #4CAF50;
		    border: none;
		    color: white;
		    padding: 16px 32px;
		    text-decoration: none;
		    margin: 4px 2px;
		    cursor: pointer;
		}
		input[type=text],input[type=password],input[type=email],input[type=number] {
		    width: 100%;
		    padding: 12px 20px;
		    margin: 8px 0;
		    box-sizing: border-box;
		}
		select {
		    width: 100%;
		    padding: 16px 20px;
		    border: none;
		    border-radius: 4px;
		    background-color: white;
		}
		textarea {
		    width: 100%;
		    height: 150px;
		    padding: 12px 20px;
		    box-sizing: border-box;
		    border: 2px solid #ccc;
		    border-radius: 4px;
		    background-color: #f8f8f8;
		    resize: none;
		}*/
		@import url(https://fonts.googleapis.com/css?family=Roboto:300);

		.login-page {
		  width: 80%;
		  padding: 8% 0 0;
		  margin: auto;
		}
		.form {
		  position: relative;
		  z-index: 1;
		  background: #FFFFFF;
		  max-width: 100%;
		  margin: 0 auto 100px;
		  padding: 45px;
		  text-align: center;
		  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
		}
		.form input[type='text'] {
		  font-family: "Roboto", sans-serif;
		  outline: 0;
		  background: #f2f2f2;
		  width: 100%;
		  border: 0;
		  margin: 0 0 15px;
		  padding: 15px;
		  box-sizing: border-box;
		  font-size: 14px;
		}
		.form input[type='password'] {
		  font-family: "Roboto", sans-serif;
		  outline: 0;
		  background: #f2f2f2;
		  width: 100%;
		  border: 0;
		  margin: 0 0 15px;
		  padding: 15px;
		  box-sizing: border-box;
		  font-size: 14px;
		}
		.form input[type='email'] {
		  font-family: "Roboto", sans-serif;
		  outline: 0;
		  background: #f2f2f2;
		  width: 100%;
		  border: 0;
		  margin: 0 0 15px;
		  padding: 15px;
		  box-sizing: border-box;
		  font-size: 14px;
		}
		.form input[type='number'] {
		  font-family: "Roboto", sans-serif;
		  outline: 0;
		  background: #f2f2f2;
		  width: 100%;
		  border: 0;
		  margin: 0 0 15px;
		  padding: 15px;
		  box-sizing: border-box;
		  font-size: 14px;
		}
		.form input[type='date'] {
		  font-family: "Roboto", sans-serif;
		  outline: 0;
		  background: #f2f2f2;
		  width: 100%;
		  border: 0;
		  margin: 0 0 15px;
		  padding: 15px;
		  box-sizing: border-box;
		  font-size: 14px;
		}
		.form select {
		  font-family: "Roboto", sans-serif;
		  outline: 0;
		  background: #f2f2f2;
		  width: 100%;
		  border: 0;
		  margin: 0 0 15px;
		  padding: 15px;
		  box-sizing: border-box;
		  font-size: 14px;
		}
		.form textarea {
		  font-family: "Roboto", sans-serif;
		  outline: 0;
		  background: #f2f2f2;
		  width: 100%;
		  border: 0;
		  margin: 0 0 15px;
		  padding: 15px;
		  box-sizing: border-box;
		  font-size: 14px;
		}
		.form button {
		  font-family: "Roboto", sans-serif;
		  text-transform: uppercase;
		  outline: 0;
		  background: #4CAF50;
		  width: 50%;
		  border: 0;
		  padding: 15px;
		  color: #FFFFFF;
		  font-size: 14px;
		  -webkit-transition: all 0.3 ease;
		  transition: all 0.3 ease;
		  cursor: pointer;
		  float: left;
		}
		.form input[type='reset'] {
		  font-family: "Roboto", sans-serif;
		  text-transform: uppercase;
		  outline: 0;
		  background: #43A047;
		  width: 50%;
		  border: 0;
		  padding: 15px;
		  color: #FFFFFF;
		  font-size: 14px;
		  -webkit-transition: all 0.3 ease;
		  transition: all 0.3 ease;
		  cursor: pointer;
		}
		.form button:hover,.form button:active,.form button:focus {
		  background: #43A047;
		}
		.form .message {
		  margin: 15px 0 0;
		  color: #b3b3b3;
		  font-size: 12px;
		}
		.form .message a {
		  color: #4CAF50;
		  text-decoration: none;
		}
		
		.container {
		  position: relative;
		  z-index: 1;
		  max-width: 300px;
		  margin: 0 auto;
		}
		.container:before, .container:after {
		  content: "";
		  display: block;
		  clear: both;
		}
		.container .info {
		  margin: 50px auto;
		  text-align: center;
		}
		.container .info h1 {
		  margin: 0 0 15px;
		  padding: 0;
		  font-size: 36px;
		  font-weight: 300;
		  color: #1a1a1a;
		}
		.container .info span {
		  color: #4d4d4d;
		  font-size: 12px;
		}
		.container .info span a {
		  color: #000000;
		  text-decoration: none;
		}
		.container .info span .fa {
		  color: #EF3B3A;
		}
		body {
		  background: #76b852; /* fallback for old browsers */
		  background: -webkit-linear-gradient(right, #76b852, #8DC26F);
		  background: -moz-linear-gradient(right, #76b852, #8DC26F);
		  background: -o-linear-gradient(right, #76b852, #8DC26F);
		  background: linear-gradient(to left, #76b852, #8DC26F);
		  font-family: "Roboto", sans-serif;
		  margin: 0px;
		  -webkit-font-smoothing: antialiased;
		  -moz-osx-font-smoothing: grayscale;      
		}
		.header-cont {
		    width:100%;
		    position:fixed;
		    top:0px;
		    z-index: 999999;
		}
		.header {
		    height:50px;
		    background:#F0F0F0;
		    border:1px solid #CCC;
		    width:960px;
		    margin:0px auto;
		}
		#customers {
		    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
		    border-collapse: collapse;
		    width: 100%;
		}

		#customers td, #customers th {
		    border: 1px solid #ddd;
		    padding: 8px;
		}

		#customers tr:nth-child(even){background-color: #f2f2f2;}

		#customers tr:hover {background-color: #ddd;}

		#customers th {
		    padding-top: 12px;
		    padding-bottom: 12px;
		    text-align: left;
		    background-color: #4CAF50;
		    color: white;
		}
	</style>
</head>
<body bgcolor="#eee">
	<div class="header-cont" style="background: white">
	    <div style="float: right;padding: 20px">Selamat Datang, <?=$this->session->userdata('nama')?> <a href="<?=base_url()?>dashboard/logout">Logout</a></div>
	</div>
	<div class="login-page">
	  <div class="form">
	  	<h4>Data Kependudukan</h4>
	  	<?php
	  	if(!empty($this->session->flashdata('message'))){
	  	?>
	  	<h4 <?= $this->session->flashdata('status') ? 'style="color:green"' : 'style="color:red"' ?>>
	  		<?= $this->session->flashdata('message') ?>	
	  	</h4>
	  	<?php
	  	}
	  	?>
	   	<button type="button" style="width: 200px" id="tambah">Tambah Data</button> 
	   	<br>
	   	<br>
	   	<br>
	   	<table id="customers">
	   		<thead>
	   			<tr>
	   				<th>No.</th>
	   				<th>NIK</th>
	   				<th>Nama</th>
	   				<th>Jenis Kelamin</th>
	   				<th>Tempat Tanggal Lahir</th>
	   				<th>Aksi</th>
	   			</tr>
	   		</thead>
	   		<tbody>
	   			<?php
	   			$no = 1;
	   			foreach ($model->result() as $m) {
	   			?>
	   			<tr>
	   				<td><?=$no++?></td>
	   				<td><?=$m->nik?></td>
	   				<td><?=$m->nama?></td>
	   				<td><?=$m->jenis_kelamin == 1 ? 'Laki-Laki' : 'Perempuan'?></td>
	   				<td><?=$m->tempat .', '.$m->tanggal?></td>
	   				<td>
	   					<a href="<?=base_url()?>dashboard/lihat/<?=$m->id?>">Lihat</a> | <a href="<?=base_url()?>dashboard/edit/<?=$m->id?>">Edit</a> | <a href="<?=base_url()?>dashboard/hapus/<?=$m->id?>" onclick="return confirm('Apakah Anda Yakin?')">Hapus</a>
	   				</td>
	   			</tr>
	   			<?php
	   			}
	   			?>
	   		</tbody>
	   	</table>
	  </div>
	</div>
	<script type="text/javascript" src ="<?=base_url();?>asset/jquery-3.2.1.min.js"></script>
	<script type="text/javascript">
		$('#tambah').click(function(){
			var url = '<?=base_url()?>dashboard/input';
			
			window.location.href = url;
		});
	</script>
</body>
</html>