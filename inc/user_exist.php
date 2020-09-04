
	<div id="link-form">
		<form style="text-align: left;" action="" method="post">
			<input type="text" id="link-in" placeholder="Dán link vào đây" name="link" autocomplete="off">
	        <input type="submit" id="link-press" name="submit" value="RÚT GỌN">
        	<br />
		        
        <div id="link-more" class="button panel-round-xxl color-red color-hover-red mar-10">Tùy chọn</div>
        		
        <div class="wrap" id="link-hide">
       		<div class="call-3">
        		<div class="panel color-border-gray pad-10">
					<div class="strong">Hết hạn liên kết</div>
					<div class="size-text-14 mar-tb-10 color-text-gray">
						Giới hạn ngày hết hạn để vô hiệu hóa liên kết của bạn sau ngày này.
					</div>
    				<input type="date" class="link-over" id="over-date" name="date" max="9999-12-31" autocomplete="off" />
    			</div>
    		</div>
    		<div class="call-3">
	        	<div class="panel color-border-gray pad-10">
    				<div class="strong">Mô tả liên kết</div>
    				<div class="size-text-14 mar-tb-10 color-text-gray">
    					Thêm mô tả giúp cho từng liên kết của bạn có thông tin rõ ràng hơn.
    				</div>
    				<input type="text" class="link-over" id="over-descript" name="descript" autocomplete="off" />
    			</div>
	        </div>
<?php 
	if(($_SESSION['level']) > 0)
		include 'inc/vip_exist.php';
	else
		include 'inc/vip_no_exist.php';
?>
        </div>
    	</form>
    </div>
</div>
