<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Shout IT</title>
	<link rel="shortcut icon" href="../shoutit/images/faviconmegafon.ico" type="image/x-icon">
    <link rel="icon" href="../shoutit/images/faviconmegafon.ico" type="image/x-icon">
	<link rel="stylesheet" href="../shoutit/css/style.css" type="text/css">
</head>
<body>
	<section id="container">
		<header>
			<h1>SHOUT IT! Shoutbox</h1>		
		</header>

		<section id="shouts">
			<ul>
			    <?php include 'includes/connectdb.php'; ?>
                <?php 

                $query = "SELECT * FROM shouts ORDER BY id DESC";
                $shouts = mysqli_query($con, $query);

                ?>
				<?php
					while($row = mysqli_fetch_assoc($shouts)) : ?>
						<li class="shout"><span><?php echo $row['time'] ?> - </span><strong><?php echo $row['user'] ?>:</strong> <?php echo $row['message'] ?></li>
				
				<?php endwhile; ?>
				

			</ul>
		</section>
		<section id="input">
			<?php if(isset($_GET['error'])) : ?>
				<div class="error"><?php echo $_GET['error']; ?></div>
			<?php endif; ?>
			<form method="POST" action="process.php">
				<input type="text" name="user" placeholder="Enter Your Name">
				<input type="text" name="message" placeholder="Enter A Message">
				<br>
				<input class="shout-btn" type="submit" name="submit" value="Shout It Out">
			</form>

		</section>

	</section>
</body>
</html>