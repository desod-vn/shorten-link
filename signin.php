<?php include 'inc/user.php'; ?>
<?php include 'inc/head.php'; ?>
	<div class="text-center">
		<div class="size-text-35 pad-10 mar-b-10 color-red color-text-white">
			<b>ĐĂNG NHẬP</b>
		</div>
	</div>

	<div class="container">
		<div class="center-wrap">
			<?php
			if(isset($_SESSION['username']))
				header('Location: ./');
	$username = $password = '';
	if(isset($_POST['login']) && ($_SERVER['REQUEST_METHOD'] == 'POST')){
		$username = $_POST['lg-username'];
		$password = $_POST['lg-password'];

		$username = $user->checkInfo($username);
		$password = $user->checkInfo($password);
	

		if(($username != '') && ($password != '')){
			$login = $user->login($username, $password);
			if($login)
				header('Location: ./');
			else
				echo '<div class="color-pale-red mar-5 pad-10 size-text-20"><span class="color-text-red">*</span> Tài khoản hoặc mật khẩu không chính xác !</div>';
		}
	}
				
			?>
			<div class="color-light-blue panel-round-l mar-5 pad-10 size-text-20">
                    Mời bạn đăng nhập
                </div>
				<form method="POST" action="" autocomplete="off">
					<label for="lg-username">Tên người dùng: </label>
					<input type="text" name="lg-username" id="lg-username" placeholder="Nhập tên người dùng" />

					<label for="lg-password">Mật khẩu: </label>
					<input type="password" name="lg-password" id="lg-password" placeholder="Nhập mật khẩu" />
					
					<label>
	                    <input type="checkbox" name="lg-remember" id="lg-remember" />
	                    Nhớ tài khoản ?
                    </label>
                    <div id="hide"></div>
					<br />
					<input type="submit" id="login" name="login" class="button color-teal panel-round-xxl pad-15" value="Đăng nhập" />
				</form>
		</div>
	</div>
	<script type="text/javascript" src="inc/ctrl/user-login.js"></script>
</body>
</html>