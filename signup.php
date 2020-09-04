<?php include 'inc/user.php'; ?>
<?php include 'inc/head.php'; ?>

<?php
	if(isset($_SESSION['username']))
				header('Location: ./');
	$email = $username = $password = '';
	if(isset($_POST['in-submit']) && ($_SERVER['REQUEST_METHOD'] == 'POST')){
		$email = $user->checkInfo($_POST['in-email']);
		$username = $user->checkInfo($_POST['in-username']);
		if($_POST['in-password'] == $_POST['re-password'])
			$password = $user->checkInfo($_POST['in-password']);
	}
?>
	<div class="text-center">
		<div class="size-text-35 pad-10 mar-b-10 color-red color-text-white">
			<b>ĐĂNG KÝ</b>
		</div>
	</div>
			
	<div class="container">
		<div class="center-wrap">

<?php
    if(isset($_POST['in-submit']) && ($_SERVER['REQUEST_METHOD'] == 'POST'))
		if(!$user->sameUser('email', $email))
			echo '<div class="color-light-blue panel-round-l mar-5 pad-10 size-text-20">
					<h3>Ôi bạn ơi !</h3>
                    Địa chỉ email này đã được đăng ký vui lòng kiểm tra lại
                </div>';	
		else
			if(!$user->sameUser('username', $username))
				echo '<div class="color-light-blue panel-round-l mar-5 pad-10 size-text-20">
						<h3>Ôi bạn ơi !</h3>
	                    Tên người dùng này đã tồn tại vui lòng đổi tên khác
	                </div>';
        	else
        		$user->confirmEmail($email, $username, $password);
    else
	echo '<div class="color-light-blue panel-round-l mar-5 pad-10 size-text-20">
                    Vui lòng điền đầy đủ thông tin
                </div>';

?>
			<form method="POST" action="" autocomplete="off">
				<label for="in-email">Địa chỉ email: </label>
				<input type="text" name="in-email" id="in-email" placeholder="Vui lòng nhập email hợp lệ" maxlength="255"/>
				
				<label for="in-username">Tên người dùng: </label>
				<input type="text" name="in-username" id="in-username" placeholder="Vui lòng nhập tên người dùng" maxlength="255"/>

				<label for="in-password">Mật khẩu: </label>
				<input type="password" name="in-password" id="in-password" placeholder="Nhập mật khẩu" maxlength="255"/>

				<label for="re-password">Xác nhận mật khẩu: </label>
				<input type="password" name="re-password" id="re-password" placeholder="Nhập lại mật khẩu" maxlength="255"/>
				
				<label for="in-number">Kiểm tra tự động đăng ký: </label>
				<span class="color-border-red pad-8 color-text-dark-gray" id="out-number">0000</span>
				<input type="text" name="in-number" id="in-number" maxlength="4"/>
				
				<br />
				<input type="submit" id="in-submit" name="in-submit" class="button color-teal panel-round-xxl pad-15" value="Tạo tài khoản" />
			</form>
		</div>
	</div>

	<div class="place-overlay" id="hide">
		<div class="container">
			<div class="center-wrap">
				<div class="panel color-green pad-15">
					<div class="place-top-right" id="fly-off">
						<span class="button color-red">X</span>
					</div>
					<h3 class="color-text-white">Xin lỗi !!!</h3>
					<div id="fly-alert" class="size-text-20 color-text-white">
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<script type="text/javascript" src="inc/ctrl/user-signup.js"></script>
</body>
</html>