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
		tr > td {
			padding: 10px;
			border-bottom:1pt solid #aeaeae;		
		}
	</style>
</head>
<body bgcolor="#eee">
	<div class="header-cont" style="background: white">
	    <div style="float: right;padding: 20px">Selamat Datang, <?=$this->session->userdata('nama')?> <a href="<?=base_url()?>dashboard/logout">Logout</a></div>
	</div>
	<div class="login-page">
	  <div class="form">
	  	<h4>Edit Data Kependudukan</h4>
	  	<?php
	  	if(!empty($this->session->flashdata('message'))){
	  	?>
	  	<h4 <?= $this->session->flashdata('status') ? 'style="color:green"' : 'style="color:red"' ?>>
	  		<?= $this->session->flashdata('message') ?>	
	  	</h4>
	  	<?php
	  	}
	  	?>
	    <form class="login-form" action="<?=base_url()?>dashboard/prosesEdit" enctype="multipart/form-data" method="POST">
	    <input type="hidden" name="id" value="<?=$model->id?>">
	    <center>
	      <table style="width: 700px" cellspacing="0">
	      	<tbody>
	      		<tr>
	      			<td width="50%">NIK</td>
	      			<td><input type="text" name="nik" maxlength="16" placeholder="NIK" required="" onkeypress='return event.charCode >= 48 && event.charCode <= 57' value="<?=$model->nik?>"></td>
	      		</tr>
	      		<tr>
	      			<td width="50%">Nama Lengkap</td>
	      			<td><input type="text" name="nama" placeholder="Nama Lengkap" required="" value="<?=$model->nama?>"></td>
	      		</tr>
	      		<tr>
	      			<td width="50%">Tempat Lahir</td>
	      			<td><input type="text" name="tempat" placeholder="Tempat Lahir" required="" value="<?=$model->tempat?>"></td>
	      		</tr>
	      		<tr>
	      			<td width="50%">Tanggal Lahir</td>
	      			<td><input type="date" name="tanggal" placeholder="Tanggal Lahir" required="" value="<?=$model->tanggal?>"></td>
	      		</tr>
	      		<tr>
	      			<td width="50%">Jenis Kelamin</td>
	      			<td>
	      				<label><input type="radio" name="jenis_kelamin" value="1" required="" <?=$model->jenis_kelamin == 1 ? 'checked=""' : ''?> >Pria</label>
	      				<label><input type="radio" name="jenis_kelamin" value="0" required="" <?=$model->jenis_kelamin == 0 ? 'checked=""' : ''?> >Wanita</label>
	      			</td>
	      		</tr>
	      		<tr>
	      			<td width="50%">Gol. Darah</td>
	      			<td>
	      				<label><input type="radio" name="gol_darah" value="a" required="" <?=$model->gol_darah == 'a' ? 'checked=""' : ''?> >A</label>
	      				<label><input type="radio" name="gol_darah" value="b" required="" <?=$model->gol_darah == 'b' ? 'checked=""' : ''?> >B</label>
	      				<label><input type="radio" name="gol_darah" value="o" required="" <?=$model->gol_darah == 'o' ? 'checked=""' : ''?> >O</label>
	      				<label><input type="radio" name="gol_darah" value="ab" required="" <?=$model->gol_darah == 'ab' ? 'checked=""' : ''?> >AB</label>
	      			</td>
	      		</tr>
	      		<tr>
	      			<td width="50%">Provinsi</td>
	      			<td>
	      				<select name="provinsi" id="prov" required="">
	      					<option>-- Pilih Provinsi --</option>
	      					<?php
	      					foreach ($prov->result() as $p) {
	      						if($p->kode == $model->provinsi){ ?>
	      							<option value="<?=$p->kode?>" selected=''><?=$p->nama?></option>
	      						<?php
	      						}else{
	      							echo "<option value='".$p->kode."'>".$p->nama."</option>";
	      						}
	      					}

	      					?>
	      				</select>
	      			</td>
	      		</tr>
	      		<tr>
	      			<td width="50%">Kabupaten / Kota</td>
	      			<td>
	      				<select name="kabupaten" id="kab" required="">
	      					<?php
	      					foreach ($kab->result() as $kb) {
	      						if($kb->kode == $model->kabupaten){ ?>
	      							<option value="<?=$kb->kode?>" selected=''><?=$kb->nama?></option>
	      						<?php
	      						}else{
	      							echo "<option value='".$kb->kode."'>".$kb->nama."</option>";
	      						}
	      					}

	      					?>
	      				</select>
	      			</td>
	      		</tr>
	      		<tr>
	      			<td width="50%">Kecamatan</td>
	      			<td>
	      				<select name="kecamatan" id="kec" required="">
	      					<?php
	      					foreach ($kec->result() as $kc) {
	      						if($kc->kode == $model->kecamatan){ ?>
	      							<option value="<?=$kc->kode?>" selected=''><?=$kc->nama?></option>
	      						<?php
	      						}else{
	      							echo "<option value='".$kc->kode."'>".$kc->nama."</option>";
	      						}
	      					}

	      					?>
	      				</select>
	      			</td>
	      		</tr>
	      		<tr>
	      			<td width="50%">Kelurahan</td>
	      			<td>
	      				<select name="kelurahan" id="kel" required="">
	      					<?php
	      					foreach ($kel->result() as $kl) {
	      						if($kl->kode == $model->kelurahan){ ?>
	      							<option value="<?=$kl->kode?>" selected=''><?=$kl->nama?></option>
	      						<?php
	      						}else{
	      							echo "<option value='".$kl->kode."'>".$kl->nama."</option>";
	      						}
	      					}

	      					?>
	      				</select>
	      			</td>
	      		</tr>
	      		<tr>
	      			<td width="50%">Alamat</td>
	      			<td>
	      				<textarea name="textarea" style="resize: vertical;" required=""><?=$model->alamat?></textarea>
	      			</td>
	      		</tr>
	      		<tr>
	      			<td width="50%">Agama</td>
	      			<td>
	      				<select name="agama" required="">
	      					<option>-- PILIH AGAMA --</option>
	      					<option value="1" <?=$model->agama == 1 ? 'selected=""' : '' ?> >Islam</option>
	      					<option value="2" <?=$model->agama == 2 ? 'selected=""' : '' ?> >Katolik</option>
	      					<option value="3" <?=$model->agama == 3 ? 'selected=""' : '' ?> >Kristen Protestan</option>
	      					<option value="4" <?=$model->agama == 4 ? 'selected=""' : '' ?> >Hindu</option>
	      					<option value="5" <?=$model->agama == 5 ? 'selected=""' : '' ?> >Budha</option>
	      					<option value="6" <?=$model->agama == 6 ? 'selected=""' : '' ?> >Kong Hu Cu</option>
	      				</select>
	      			</td>
	      		</tr>
	      		<tr>
	      			<td width="50%">Pekerjaan</td>
	      			<td>
	      				<select name="pekerjaan" required="">
	      					<option>-- Pilih Pekerjaan --</option>
	      					<?php
	      					foreach ($pekerjaan->result() as $pk) { ?>
	      						<option value="<?=$pk->id?>" <?=$pk->id == $model->pekerjaan ? 'selected=""' : ''?> ><?=$pk->nama?></option>
	      						<?php
	      					}
	      					?>
	      				</select>
	      			</td>
	      		</tr>
	      		<tr>
	      			<td width="50%">Kewarganegaraan</td>
	      			<td>
	      				<label><input type="checkbox" name="kwg" value="1" required="" checked=""> WNI</label>
	      			</td>
	      		</tr>
	      		<tr>
	      			<td width="50%">Foto</td>
	      			<td>
	      				<input type="file" name="foto" accept="image/*">
	      			</td>
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
	    </form>
	  </div>
	</div>
	<script type="text/javascript" src ="<?=base_url();?>asset/jquery-3.2.1.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
		});

		$('#prov').on('change',function(){
			var kode = $(this).val();

			$.get('<?=base_url();?>dashboard/getKab',{kode:kode},function(data){
				var datas = JSON.parse(data);
				var html = '<option>-- PILIH KABUPATEN/KOTA --</option>';
				for (var i = 0; i < datas.length; i++) {
					html += '<option value="'+datas[i].kode+'">'+datas[i].nama+'</option>';
				}
				$('#kab').html(html);
			});
		});

		$(document).on('change','#kab',function(){
			var kode = $(this).val();

			$.get('<?=base_url();?>dashboard/getKec',{kode:kode},function(data){
				var datas = JSON.parse(data);
				var html = '<option>-- PILIH KECAMATAN --</option>';
				for (var i = 0; i < datas.length; i++) {
					html += '<option value="'+datas[i].kode+'">'+datas[i].nama+'</option>';
				}
				$('#kec').html(html);
			});
		});

		$(document).on('change','#kec',function(){
			var kode = $(this).val();

			$.get('<?=base_url();?>dashboard/getKel',{kode:kode},function(data){
				var datas = JSON.parse(data);
				var html = '<option>-- PILIH KELURAHAN --</option>';
				for (var i = 0; i < datas.length; i++) {
					html += '<option value="'+datas[i].kode+'">'+datas[i].nama+'</option>';
				}
				$('#kel').html(html);
			});
		});
	</script>
</body>
</html>