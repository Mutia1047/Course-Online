<?= $this->extend('sign/layout/header') ?>

<?= $this->section('content') ?>

<title>Register</title>

    <div class="container">
		<div class="row justify-content-center">
			<div class="panel panel-primary">
				<div class="panel-body">
					<form method="POST" action="/page/login" role="form">
						<div class="form-group">
						<div class="row mt-4">
							<h2>Registrasi Akun</h2>
						</div></div>
						<div class="form-group">
							<label class="control-label" for="registerName">Nama Anda</label>
							<input id="registerName" type="teks" maxlength="50" class="form-control">
						</div>
						<div class="form-group">
							<label class="control-label" for="registerEmail">Email</label>
							<input id="registerEmail" type="email" maxlength="50" class="form-control">
						</div>
						<div class="form-group">
							<label class="control-label" for="registerPassword">Password</label>
							<input id="registerPassword" type="password" maxlength="25" class="form-control" placeholder="min 6 karakter" length="40">
						</div>
						<div class="form-group">
							<label class="control-label" for="registerPasswordagain">Konfirmasi Password</label>
							<input id="registerPasswordagain" type="password" maxlength="25" class="form-control">
						</div>
						<div class="form-group">
							<button id="registerSubmit" type="submit" class="btn btn-info btn-block">Buat Akun</button>
						</div>
						
						<p>Dengan membuat akun, Anda menyetujui dengan <a href="#">Terms of Use </a> dan <a href="#">Privacy Policy </a> kami.</p>
						<p>Sudah punya akun? <a href="/page/login">Login</a></p>
					</form>
				</div>
			</div>
		</div>
	</div>

	<?= $this->endSection('content') ?>