<?php 

session_start();

 ?>

 <html>
 	<head>
 		<title>
 			<?php echo $_SESSION["kadi"]; ?>
 		</title>
 	</head>
 	<body>
 		
 		<div>Hoş Geldin <?php echo $_SESSION["kadi"]; ?><img style="height: 20px;border-radius: 100px;" src="<?php echo $_SESSION["resim"]; ?>" alt=""></div>
 		<div>
 			
			<h2>Access_tokenin = <?php echo $_SESSION["token"]; ?></h2>
			<h2>Refresh_tokenin = <?php echo $_SESSION["refresh"]; ?></h2>
 		</div>

 	</body>
 </html>