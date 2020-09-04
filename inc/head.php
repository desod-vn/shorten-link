<?php include 'db.php'; ?>
<?php include 'home.php'; ?>
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="dns-prefetch" href="//desod-vn.github.io/">
  <link rel="dns-prefetch" href="//i.imgur.com">

  <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">

  <meta name="description" content="Website rút gọn link miễn phí. Rút ngắn link gg, bitly tốt nhất, nhanh nhất. Free url shortener. Rút gọn đường link để chia sẻ lên mạng xã hội, diễn đàn: bạn bè,..." />
  <meta name="keywords" content="rút gọn link, rút ngắn link, rút gọn, rút ngắn, link, liên kết, rút gọn liên kết, rút ngắn liên kết, rut gon link. rut ngan link, rut gon link gg, rut gon link bitly, url shortener" />
  <!-- Open Graph Tags -->
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://thang.pro" />
  <meta property="og:title" content="Rút gọn link miễn phí - Web rút gọn liên kết - Free URL Shortener" />
  <meta property="og:description" content="Website rút gọn link miễn phí thang.pro. Rút ngắn link gg, bitly tốt nhất, nhanh nhất. Free url shortener. Rút gọn đường link để chia sẻ lên mạng xã hội, diễn đàn: bạn bè,..." />
  <meta property="og:image" content="" />
  <title><?php echo $home->title($_SERVER['SCRIPT_NAME']); ?></title> 
  <link rel="shortcut icon" type="image/png" href="style/link.png">
	<link rel="stylesheet" type="text/css" href="style/longan/style.css">
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script type="text/javascript" src="style/checked.js"></script>
  <link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>

