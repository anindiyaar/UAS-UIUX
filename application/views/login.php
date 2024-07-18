<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Login Page</title>

    <!-- Bootstrap core CSS -->
	<link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <!-- Custom styles for Login -->
    <link href="<?php echo base_url('assets/css/login.css'); ?>" rel="stylesheet">
	
  </head>
  <body>
    <form class="form-signin" method="post" action="<?php echo site_url('Login/masuk'); ?>">
	  <div class="text-center mb-4">

	  <svg width="256px" height="144px" viewBox="0 0 256 144" xmlns="http://www.w3.org/2000/svg">
    <!-- Definisikan gradien -->
    <defs>
        <linearGradient id="userGradient" x1="0%" y1="0%" x2="100%" y2="100%">
            <stop offset="0%" style="stop-color:rgb(0,123,255);stop-opacity:1" />
            <stop offset="100%" style="stop-color:rgb(0,82,179);stop-opacity:1" />
        </linearGradient>
        <linearGradient id="formGradient" x1="0%" y1="0%" x2="100%" y2="100%">
            <stop offset="0%" style="stop-color:rgb(255,255,255);stop-opacity:1" />
            <stop offset="100%" style="stop-color:rgb(230,230,230);stop-opacity:1" />
        </linearGradient>
    </defs>

    <!-- Ikon Pengguna -->
    <circle cx="80" cy="64" r="30" fill="url(#userGradient)" />
    <rect x="30" y="84" width="100" height="40" rx="20" ry="20" fill="url(#userGradient)" />

    <!-- Form Login -->
    <rect x="16" y="108" width="224" height="64" rx="20" ry="20" fill="url(#formGradient)" stroke="#ccc" stroke-width="4" />
    <!-- Garis bidang input username -->
    <line x1="48" y1="120" x2="208" y2="120" stroke="#ccc" stroke-width="3" />
    <!-- Garis bidang input password -->
    <line x1="48" y1="132" x2="208" y2="132" stroke="#ccc" stroke-width="3" />
    <!-- Tombol Login -->
    <rect x="72" y="120" width="112" height="32" rx="16" ry="16" fill="url(#userGradient)" />
</svg>

		<h1 class="h2 mb-3 font-weight-normal">Login</h1>
	  </div>

	  <div class="form-label-group">
		<input type="text" id="username" name="username" class="form-control" placeholder="Username" required autofocus>
		<label for="username">Username</label>
	  </div>

	  <div class="form-label-group">
		<input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
		<label for="inputPassword">Password</label>
	  </div>

	  <div class="checkbox mb-3">
		<label>
		  <input type="checkbox" value="remember-me"> Remember me
		</label>
	  </div>
	  <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
	  <p class="mt-5 mb-3 text-muted text-center">&copy; Website Kos Pak'E <?php echo date("Y"); ?></p>
	</form>
  </body>
</html>
