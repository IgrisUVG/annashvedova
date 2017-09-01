<!DOCTYPE html>
<html>
	<head>
		<!--meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>ТВОРЧЕСКАЯ ЛАБОРАТОРИЯ</title>
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/jquery.cookie.js"></script>
		<script type="text/javascript" src="js/menu.js"></script>
		<link rel="icon" href="images/as32.png" type="image/png">
		<link href="css/style.css" rel="stylesheet" type="text/css">
		<link href="css/menu.css" rel="stylesheet" type="text/css">
		<link href="form.css" rel="stylesheet" type="text/css">
		<link type='text/css' href='css/contact.css' rel='stylesheet' media='screen' /-->
		<?php
			require('data/head.php');
		?>
	</head>
	<body>
		<!-- Google Tag Manager -->
		<noscript>
			<iframe
				src="//www.googletagmanager.com/ns.html?id=GTM-M7S4WT"
				height="0"
				width="0"
				style="display:none;visibility:hidden">
			</iframe>
		</noscript>
		<script type='text/javascript'>
			(function(w,d,s,l,i){
				w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});
				var f=d.getElementsByTagName(s)[0], j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';
				j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
			}
			)
			(window,document,'script','dataLayer','GTM-M7S4WT');
		</script>
		<!-- End Google Tag Manager -->
		<div class = "header">
			<div class = "logo">
				<a href="http://annashvedova.ru/">
					<img src="/images/ash.png" width="150" alt="">
				</a>
			</div>
			<div class = "name">
				<a href="http://annashvedova.ru/">
					<img src="/images/HEAD_RU_LINE_1.svg" alt="">
				</a>
			</div>
		</div><!--Конец шапки-->
		<div class = "left">
			<?php
				require('data/menuL.php');
			?> 			
		</div><!--Конец левого бара-->
		<div class = "right">
			<?php
				require('data/menuR.php');
			?> 			
		</div><!--Конец правого бара-->
		<div class = "contents">
			<?php include 'application/views/'.$content_view; ?>
		</div><!--Конец контента-->
		<div class = "footer">
			<?php
				require('data/footer.php');
			?>			
		</div><!--Конец футера-->
		<script type='text/javascript' src='/js/jquery.simplemodal.js'></script>
		<script type='text/javascript' src='/js/contact.js'></script>
	</body>
</html>