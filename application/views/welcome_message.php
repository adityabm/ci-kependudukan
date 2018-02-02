<!DOCTYPE html>
<html>
<head>
	<title>Form Pendaftaran</title>
	<style type="text/css">
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
		  -webkit-font-smoothing: antialiased;
		  -moz-osx-font-smoothing: grayscale;      
		}
	</style>
</head>
<body bgcolor="#eee">
	<div class="login-page">
	  <div class="form">
		<h4>Daftar</h4>
		<?php
		if(!empty($this->session->flashdata('message'))){
		?>
		<h4 <?= $this->session->flashdata('status') ? 'style="color:green"' : 'style="color:red"' ?>>
			<?= $this->session->flashdata('message') ?>	
		</h4>
		<?php
		}
		?>
	    <form class="login-form" action="<?=base_url()?>data/proses" method="POST">
	    <center>
	      <table>
	      	<tbody>
	      		<tr>
	      			<td width="50%">User Name</td>
	      			<td><input type="text" name="username" maxlength="25" placeholder="username"></td>
	      		</tr>
	      		<tr>
	      			<td width="50%">Password</td>
	      			<td><input type="password" name="password" maxlength="50" placeholder="Password"></td>
	      		</tr>
	      		<tr>
	      			<td width="50%">Re-type Password</td>
	      			<td><input type="password" name="retype" maxlength="50" placeholder="Retype Password"></td>
	      		</tr>
	      		<tr>
	      			<td width="50%">Email</td>
	      			<td><input type="email" name="email" size="40" placeholder="Email"></td>
	      		</tr>
	      		<tr>
	      			<td width="50%">Nama</td>
	      			<td><input type="text" name="nama" placeholder="Nama Lengkap"></td>
	      		</tr>
	      		<tr>
	      			<td width="50%">NIM</td>
	      			<td><input type="number" name="nim" maxlength="20" placeholder="NIM"></td>
	      		</tr>
	      		<tr>
	      			<td width="50%">Alamat</td>
	      			<td><input type="text" name="alamat" placeholder="Alamat"></td>
	      		</tr>
	      		<tr>
	      			<td width="50%">Kota Asal</td>
	      			<td>
	      				<select name="kota_asal">
	      					<option></option>
	      					<option value="bdg">Bandung</option>
	      					<option value="jkt">Jakarta</option>
	      					<option value="jkt">Surabaya</option>
	      				</select>
	      			</td>
	      		</tr>
	      		<tr>
	      			<td width="50%">Jenis Kelamin</td>
	      			<td>
	      				<label><input type="radio" name="jenis_kelamin" value="1">Pria</label>
	      				<label><input type="radio" name="jenis_kelamin" value="0">Wanita</label>
	      			</td>
	      		</tr>
	      		<tr>
	      			<td width="50%">Hobi</td>
	      			<td>
	      				<label><input type="checkbox" name="hobi[]" value="coding">Coding</label><br>
	      				<label><input type="checkbox" name="hobi[]" value="psan">PSan</label><br>
	      				<label><input type="checkbox" name="hobi[]" value="bilyard">Bilyard</label>
	      			</td>
	      		</tr>
	      		<tr>
	      			<td width="50%">Deskripsi Pribadi</td>
	      			<td><textarea name="deskripsi" cols="30" rows="10" placeholder="Deskripsi"></textarea></td>
	      		</tr>
	      		<tr>
	      			<td colspan="2">
	      				<button type="submit">Kirim</button>
	      				<input type="reset" value="Hapus">
	      			</td>
	      		</tr>
	      	</tbody>
	      </table>
	  </center>
	      <p class="message">Sudah Punya Akun? <a href="<?=base_url()?>data/">Masuk</a></p>
	    </form>
	  </div>
	</div>
</body>
</html>