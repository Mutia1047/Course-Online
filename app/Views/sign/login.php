<?= $this->extend('sign/layout/header') ?>

<?= $this->section('content') ?>

<title>Login</title>

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    <div class="row mt-4 justify-content-center fadeIn first">
		<h3>Silakan LOGIN</h3>
    </div>

    <!-- Login Form -->
    <?php if (session()->getFlashdata('msg')) : ?>
    <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
    <?php endif; ?>
    <?php if (isset($validation)) : ?>
    <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
    <?php endif; ?>
    <form action="/login/auth" method="post">
      <input type="text" id="email" class="fadeIn second" name="email" placeholder="email" >
      <input type="text" id="password" class="fadeIn third" name="password" placeholder="password">
	    <input type="submit" class="fadeIn fourth" value="Log In">
    </form>

    <!-- Register --> <!-- Mengingatkan Password -->
    <div id="formFooter">
      <a href="/page/register">Register</a><br><br>
      <a href="#">Lupa Password?</a>
    </div>

  </div>
</div>

<?= $this->endSection('content') ?>