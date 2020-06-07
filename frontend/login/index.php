<!DOCTYPE html>
<html>
<head>
	<title>Login - BPH HIMSI UNSRI</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="../landing/assets/images/icon.png">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&display=swap" rel="stylesheet">
</head>
<body>
	<div class="cont">
		<div class="form sign-in">
			<form action="proses_login.php" method="POST">
				<h2>Login</h2>
				<label>
					<span>NIM</span>
					<input type="text" name="nim" required autocomplete="off">
				</label>
				<label>
					<span>Password</span>
					<input type="password" name="password" required>
				</label>
				<button class="submit" id="submit" type="submit">Login</button>
			</form>
			<p class="forgot-pass">Kembali ke Landing Page?</p>
			<div class="social-media">
				<ul>
					<li><img src="images/facebook.png"></li>
					<li><img src="images/instagram.png"></li>
				</ul>
			</div>

		</div>
		<div class="sub-cont">
			<div class="img">
				<div class="img-text m-up">
					<h2>Forgot pass?</h2>
					<p>Please contact us to reset your password</p>
				</div>
				<div class="img-text m-in">
					<h2>One of us?</h2>
					<p>If you already has an account, just Login, We've missed you!</p>
				</div>
				<div class="img-btn">
					<span class="m-up">Contact US</span>
					<span class="m-in">LOGIN</span>
				</div>
			</div>
			<div class="form sign-up">
				<h2>Contact Us</h2>
				<label>
					<span>Name</span>
					<input type="text" name="nama">
				</label>
				<label>
					<span>Email</span>
					<input type="email" name="email">
				</label>
				<label>
					<span>Pesan</span>
					<input type="text" name="pesan">
				</label>
				<button type="submit" class="submit">Submit</button>
			</div>
		</div>

	</div>

<script type="text/javascript" src="script.js"></script>
</body>
</html>