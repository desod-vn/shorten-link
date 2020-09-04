<?php include 'inc/head.php'; ?>
<header class="container">
  <div class="space-wrap">
    <div class="call-12">
      <a class="logo" href="./" alt="Trang chủ">
        <font class="first">LUOC</font><font class="second">.GA</font>
      </a>
        <span class="on-right mar-6 size-text-18">        
<?php
if(isset($_SESSION['username'])){
	echo '<a class="button color-hover-dark-gray color-dark-gray" href="/signout.php">
          <b>'.$_SESSION['username'].'</b></a>';
    echo '</span></div>';
    echo '<div class="call-12"><div class="banner">
		RÚT GỌN LIÊN KẾT MIỄN PHÍ - AN TOÀN</div></div><div class="call-12">';
}
else{
	echo '<a class="button color-border-white color-white mar-r-10" href="/signin.php">Đăng nhập</a>
          <a class="button color-border-white" href="/signup.php">Đăng ký</a>';
    echo '</span></div>';
}
?>


<?php


	$date = $descript = $password = $query = '';

if(isset($_SESSION['username']) && isset($_POST['submit'])){
	$url = $_POST['link'];
	$correct = 0;
	$number = strlen($url);
	$author = $_SESSION['username'];
	$vip = $_SESSION['level'];
	$exist = 0;

	function createLink(){
        $query = '';
        for($i = 0;$i<=5;$i++){
			$random = mt_rand(48, 122);
			if(($random <= 64) && ($random >= 58)) 
    			$random += mt_rand(7, 26);
            elseif(($random <= 96) && ($random >= 91)) 
				$random += mt_rand(6, 26);
            
			$query .= chr($random);
        }
        return $query;
    }



	if (($url == '') || ($number <= 4) || (strpos($url, " ") != false) || (strpos($url, ".") == false) || ($url[$number - 1] == ' ') || ($url[$number - 1] == '.') || ($url[0] == ' ') || ($url[0] == '.')){
			echo '<div class="color-red mar-tb-5 pad-15 panel-round-l size-text-20">
				<span class="color-text-blue">*</span> Xin lỗi, nếu bạn đang có ý định tấn công trang web này, xin vui lòng dừng lại.</div>';
			$correct -= $number;
    }
	while($correct < $number){
		if((ord($url[$correct]) == 32) || (ord($url[$correct]) == 34) || (ord($url[$correct]) == 39) || (ord($url[$correct]) == 60) || (ord($url[$correct]) == 62)){
			echo '<div class="color-red mar-tb-5 pad-15 panel-round-l size-text-20">
				<span class="color-text-blue">#</span> Xin lỗi, liên kết của bạn vừa nhập có chứa ký tự không hợp lệ, vui lòng kiểm tra lại liên kết và thử lại một lần nữa !<br />(Ký tự không hợp lệ: \' " < >).
				</div>';
            break;
		}
		$correct++;
	}

	if($correct == $number){

		if(isset($_POST['date']))
			if($_POST['date'] != '')
	        	$date = $_POST['date'];

	   	if(isset($_POST['descript']))
	   		if($_POST['descript'] != '')
	        	$descript = $_POST['descript'];

	    if($vip > 0){
			if(isset($_POST['password']))
				if($_POST['password'] != '')
		    		$password = $_POST['password'];

		   	if(isset($_POST['query'])){
		   		if($_POST['query'] != '')
		        	$query = $_POST['query'];
		   	}else
		    	$query = createLink();
		}
	    do{
		    $old = "SELECT * FROM `short` WHERE query = '$query'";
		    $findOld = mysqli_query($connect, $old);
		    $exist = mysqli_num_rows($findOld);
		    if($exist == 0)
		    	break;
		    else{
		    	if(isset($_POST['query'])){
		    		echo '<div class="color-red mar-tb-5 pad-15 panel-round-l size-text-20">
					<span class="color-text-blue">#</span> Xin lỗi, tên liên kết tùy chỉnh của bạn đã được sử dụng. Bạn vui lòng đặt tên liên kết khác.</div>';
					break;
				}
		    	else
		    		$query = createLink();
		    }
		}while(true);

	    if($exist == 0){
	    	$insert = "INSERT INTO short(link, author, dateEnd, descript, password, query)
	         VALUES ('$url', '$author', '$date', '$descript', '$password', '$query')";
	        mysqli_query($connect,$insert);

	    	header('Location: ./share.php?return='.$query); 
		}
	}
}

if(isset($_SESSION['username']))
	include 'inc/user_exist.php';
else
	include 'inc/user_no_exist.php';
?>
	</div>
</header>
