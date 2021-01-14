<?= $this->extend('sign/layout/header') ?>

<?= $this->section('content') ?>

<title>Register</title>

    <div class="container">
		<div class="row justify-content-center">
			<div class="panel panel-primary">
				<div class="panel-body">
					<form method="POST" action="/register/simpan" role="form">
						<div class="form-group">
						<div class="row mt-4">
							<h2>Registrasi Akun</h2>
						</div></div>
						<?php if (isset($validation)) : ?>
                        <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
                   		<?php endif; ?>
						<div class="form-group">
							<label class="control-label" for="registerName">Nama Anda</label>
							<input name="nama" id="nama" type="nama" maxlength="50" class="form-control">
						</div>
						<div class="form-group">
							<label class="control-label" for="registerEmail">Email</label>
							<input name="email" id="email" type="email" maxlength="50" class="form-control">
						</div>
						<div class="form-group">
							<label class="control-label" for="registerPassword">Password</label>
							<input name="password" id="password" type="password" maxlength="25" class="form-control" placeholder="Min 5 karakter" length="40">
						</div>
						<div class="form-group">
							<label class="control-label" for="registerPasswordagain">Konfirmasi Password</label>
							<input name="confirm_password" id="confirm_password" type="confirm_password" maxlength="25" class="form-control">
						</div>
						<div class="form-group">
							<button id="submit" type="submit" class="btn btn-info btn-block">Buat Akun</button>
						</div>
						
						<p>Dengan membuat akun, Anda menyetujui dengan <a href="#">Terms of Use </a> dan <a href="#">Privacy Policy </a> kami.</p>
						<p>Sudah punya akun? <a href="/page/login">Login</a></p>
					</form>
				</div>
			</div>
		</div>
	</div>

	<?= $this->endSection('content') ?>