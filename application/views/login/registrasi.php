<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registrasi Training Center</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	
</head>
<body class="form-v8">
	<div class="page-content">
		<div class="form-v8-content">
			<div class="form-right">
				<div class="tab">
					<div class="tab-inner">
						<button class="tablinks" onclick="openCity(event, 'sign-up')" id="defaultOpen">Registrasi</button>
				
				</div>
				<form class="form-detail" action="#" method="post">
					<div class="tabcontent" id="sign-up">
						<div class="form-row">
							<label class="form-row-inner">
								<input type="text" name="full_name" id="full_name" class="input-text" required>
								<span class="label">Nama Lengkap</span>
		  						<span class="border"></span>
							</label>
						</div>
						<div class="form-row">
							<label class="form-row-inner">
								<input type="text" name="your_email" id="your_email" class="input-text" required>
								<span class="label">E-Mail</span>
		  						<span class="border"></span>
							</label>
						</div>
						<div class="form-row">
							<label class="form-row-inner">
								<input type="text" name="instansi" id="instansi" class="input-text" required>
								<span class="label">Instansi</span>
		  						<span class="border"></span>
							</label>
						</div>
						<div class="form-row">
							<label class="form-row-inner">
								<input type="text" name="prodi" id="prodi" class="input-text" required>
								<span class="label">Program Studi</span>
		  						<span class="border"></span>
							</label>
						</div>
						<div class="form-row">
							<label class="form-row-inner">
								<input type="text" name="handphone" id="handphone" class="input-text" required>
								<span class="label">Nomor Telepon</span>
		  						<span class="border"></span>
							</label>
						</div>
						<div class="form-row">
							<label class="form-row-inner">
								<input type="text" name="ttl" id="ttl" class="input-text" required>
								<span class="label">Tanggal Lahir</span>
		  						<span class="border"></span>
							</label>
						</div>
						<div class="form-row">
							<label class="form-row-inner">
								<input type="password" name="password" id="password" class="input-text" required>
								<span class="label">Password</span>
								<span class="border"></span>
							</label>
						</div>
						<div class="form-row">
							<label class="form-row-inner">
								<input type="password" name="comfirm_password" id="comfirm_password" class="input-text" required>
								<span class="label">Comfirm Password</span>
								<span class="border"></span>
							</label>
						</div>
						<div class="form-row">
						<label class="form-row-inner">
						<span class="labels">Pas Foto</span>
						</label>
						<input type="file" name="foto" class="input-file" required>		
								<span class="border"></span>
						</div>
						<div class="form-row-last">
							<input type="submit" name="register" class="register" value="Register">
						</div>
						<p><center>Sudah punya akun? <a href="<?= base_url()?>loginn/login"class="klik">Klik Disini </a>untuk masuk ke akun</center></p>
					</div>
				</form>
				<form class="form-detail" action="#" method="post">
					<div class="tabcontent" id="sign-in">
							<div class="form-row">
							<label class="form-row-inner">
								<input type="number" name="nim" id="nim" class="input-text" required>
								<span class="label">NIM</span>
		  						<span class="border"></span>
							</label>
						</div>
						<div class="form-row">
							<label class="form-row-inner">
								<input type="text" name="full_name_1" id="full_name_1" class="input-text" required>
								<span class="label">Nama Lengkap</span>
		  						<span class="border"></span>
							</label>
						</div>
						<div class="form-row">
							<label class="form-row-inner">
								<input type="text" name="your_email_1" id="your_email_1" class="input-text" required>
								<span class="label">E-Mail</span>
		  						<span class="border"></span>
							</label>
						</div>
						<div class="form-row">
							<label class="form-row-inner">
								<input type="text" name="handphone" id="handphone" class="input-text" required>
								<span class="label">Nomor Telepon</span>
		  						<span class="border"></span>
							</label>
						</div>
						<div class="form-row">
							<label class="form-row-inner">
								<input type="password" name="password_1" id="password_1" class="input-text" required>
								<span class="label">Password</span>
								<span class="border"></span>
							</label>
						</div>
						<div class="form-row">
							<label class="form-row-inner">
								<input type="password" name="comfirm_password_1" id="comfirm_password_1" class="input-text" required>
								<span class="label">Comfirm Password</span>
								<span class="border"></span>
							</label>
						</div>
						<div class="form-row">
							<label class="form-row-inner">
								<input type="file" name="scanktm" class="input-file" required>
								<span class="label">Scan Ktm</span>
								<span class="border"></span>
							</label>
						</div>
						<div class="form-row-last">
							<input type="submit" name="register" class="register" value="Sign In">
						</div>
						<p><center>Sudah punya akun?<a href="<?= base_url()?>loginn/login" class="klik">Klik Disini </a>untuk masuk ke akun</center></p>
					</div>
				</form>
				<form class="form-detail" action="#" method="post">
					<div class="tabcontent" id="sign">
						<div class="form-row">
							<label class="form-row-inner">
								<input type="text" name="full_name_1" id="full_name_1" class="input-text" required>
								<span class="label">Nama Lengkap</span>
		  						<span class="border"></span>
							</label>
						</div>
						<div class="form-row">
							<label class="form-row-inner">
								<input type="text" name="your_email_1" id="your_email_1" class="input-text" required>
								<span class="label">E-Mail</span>
		  						<span class="border"></span>
							</label>
						</div>
						<div class="form-row">
							<label class="form-row-inner">
								<input type="text" name="handphone" id="handphone" class="input-text" required>
								<span class="label">Nomor Telepon</span>
		  						<span class="border"></span>
							</label>
						</div>
						<div class="form-row">
							<label class="form-row-inner">
								<input type="text" name="profesi" id="profesi" class="input-text" required>
								<span class="label">Profesi</span>
		  						<span class="border"></span>
							</label>
						</div>
						<div class="form-row">
							<label class="form-row-inner">
								<input type="password" name="password_1" id="password_1" class="input-text" required>
								<span class="label">Password</span>
								<span class="border"></span
							</label>
						</div>
							<div class="form-row">
							<label class="form-row-inner">
								<input type="password" name="comfirm_password_1" id="comfirm_password_1" class="input-text" required>
								<span class="label">Comfirm Password</span>
								<span class="border"></span>
							</label>
						</div>
						<div class="form-row-last">
							<input type="submit" name="register" class="register" value="Sign In">
						</div>
						<p><center>Sudah punya akun?<a href="<?= base_url()?>loginn/login"  class="klik">Klik Disini </a>untuk masuk ke akun</center></p>
					</div>
				</form>
			</div>
		</div>
	</label>
</div>
	</div>
	<script type="text/javascript">
		function openCity(evt, cityName) {
		    var i, tabcontent, tablinks;
		    tabcontent = document.getElementsByClassName("tabcontent");
		    for (i = 0; i < tabcontent.length; i++) {
		        tabcontent[i].style.display = "none";
		    }
		    tablinks = document.getElementsByClassName("tablinks");
		    for (i = 0; i < tablinks.length; i++) {
		        tablinks[i].className = tablinks[i].className.replace(" active", "");
		    }
		    document.getElementById(cityName).style.display = "block";
		    evt.currentTarget.className += " active";
		}

		// Get the element with id="defaultOpen" and click on it
		document.getElementById("defaultOpen").click();
	</script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>