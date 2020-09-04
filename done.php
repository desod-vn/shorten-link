<?php include 'inc/user.php'; ?>
<?php include 'inc/head.php'; ?>
<?php
$email = $username = $password = '';
if(!isset($_SESSION['sure']))
   $_SESSION['sure'] = false;

if($_SESSION['sure']){
   $email = $_SESSION['email'];
   $username = $_SESSION['username'];
   $password = $_SESSION['password'];
   $number = $_SESSION['number'];

}else
   header('Location: ./');
?>
   <div class="text-center">
      <div class="size-text-35 pad-10 mar-b-10 color-red color-text-white">
         <b>XÁC NHẬN</b>
      </div>
   </div>
         
   <div class="container">
      <div class="space-wrap">
         <div class="call-2">
         </div>
         <div class="call-8">
               <?php 
               if(isset($_POST['submit']) && ($_SERVER['REQUEST_METHOD'] == 'POST'))
                  if($_POST['number'] == $number){
                     echo '<div class="color-pale-red mar-5 pad-10 size-text-20">';
                     echo '<div class="size-text-24 mar-5"><span class="color-text-green">#</span> Xác nhận thành công vui lòng chờ đợi tự động chuyển hướng sau 15s hoặc <a href="/login.php">ấn vào đây</a> để chuyển hướng ngay.</div><br/>';
                     echo '<div class="color-light-gray pad-5 mar-tb-5"><b>Email: </b>'. $email.'<br /><b>Tên người dùng: </b>'. $username .'<br />
                           <b>Mật khẩu:</b> '.$password.'</div><br />';
                     echo '- Đây là những thông tin quan trọng dùng để đăng nhập, khôi phục lại mật khẩu hoặc nhận những thông báo mới từ chúng tôi.<br />- Bạn hãy lưu những thông tin này lại và chắc chắn duy nhất mình bạn biết. Không cung cấp bất kỳ thông tin này cho ai khác kể cả admin.<br /><span class="color-text-blue">***</span> Chúc bạn có một trải nghiệm sử dụng tuyệt vời. Cảm ơn bạn !!!</div>';

                        $user->insertData($email, $username, $password);
                        session_destroy();
                     echo '<script type="text/javascript">setTimeout(() => {window.location="/login.php"}, 15000);</script>';
                     echo '</div>';
                  }else{
                     echo '<div class="color-pale-red mar-5 pad-10 size-text-20">';
                     echo '<div class="color-text-red size-text-30 pad-10">Mã bạn nhập không đúng vui lòng nhập lại</div>';
                     echo '<span class="color-text-green">#</span>
                     Nếu không nhận được email xin vui lòng <a href="">nhận lại mã</a> hoặc <a href="/signup.php">trở về trang đăng ký</a> và tiến hành đăng ký lại.';
                     echo '<form method="POST" action="" autocomplete="off">';
                     echo '<label for="number">Nhập mã số gồm 6 số đã được gửi trong email: </label>';
                     echo '<input type="text" name="number" id="number" placeholder="Mã 6 chữ số" maxlength="6" />';
                     echo '<br />';
                     echo '<input type="submit" id="submit" name="submit" class="button color-teal panel-round-xxl pad-15" value="Xác nhận" />';
                     echo '</form>';
                     echo '</div>';
                  }
               else{
                     ?>
                     <div class="color-light-blue panel-round-l mar-5 pad-10 size-text-20">
                     - Chúng tôi đã gửi bạn một email, xin vui lòng kiểm tra địa chỉ email của bạn <b><?php echo $email; ?></b>
                     và nhập mã 6 chữ số vào ô bên dưới để xác minh tài khoản.
                     <br />
                     <br />
                     <span class="color-text-red">***</span>
                     Sau khi xác minh tài khoản bằng địa chỉ email bạn mới có thể sử dụng để đăng nhập.
                     </div>
                     <?php
                     include 'inc/mail.php';
                     echo '<div class="color-pale-red mar-5 pad-10 size-text-20">';
                     echo '<span class="color-text-green">#</span>
                     Nếu không nhận được email xin vui lòng <a href="">nhận lại mã</a> hoặc <a href="/signup.php">trở về trang đăng ký</a> và tiến hành đăng ký lại.';
                     echo '<form method="POST" action="" autocomplete="off">';
                     echo '<label for="number">Nhập mã số gồm 6 số đã được gửi trong email: </label>';
                     echo '<input type="text" name="number" id="number" placeholder="Mã 6 chữ số" maxlength="6" />';
                     echo '<br />';
                     echo '<input type="submit" id="submit" name="submit" class="button color-teal panel-round-xxl pad-15" value="Xác nhận" />';
                     echo '</form>';
                     echo '</div>';
                  }
               ?>
         </div>
         <div class="call-2">
         </div>
      </div>
   </div>
</body>
</html>