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
    <form action="/user/home" method="post">
      <input type="text" id="username" class="fadeIn second" name="username" placeholder="username">
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