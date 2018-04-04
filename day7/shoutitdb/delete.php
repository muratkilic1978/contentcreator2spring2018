<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Delete shout-comments</title>
	<link rel="shortcut icon" href="../shoutit/images/faviconmegafon.ico" type="image/x-icon">
    <link rel="icon" href="../shoutit/images/faviconmegafon.ico" type="image/x-icon">
	<link rel="stylesheet" href="../shoutit/css/style.css" type="text/css">
</head>
<body>

	<img src="../shoutit/images/delete.png" width="256" height="auto" alt="delete-image">
	<p>Please select the user from the Shout-box to delete and click Remove.</p>
	<form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?> ">
	<?php include 'includes/connectdb.php'; ?>
	
	<?php 
        
    if (isset($_POST['submit'])) {
          if (!empty($_POST['todelete'])) {
              foreach ($_POST['todelete'] as $delete_id ){
			     $query = "DELETE FROM shouts WHERE id=$delete_id";
			     mysqli_query($con, $query) or die('Error querying database');
		      }
          }
          else {
                echo "<p id='checkboxmsg'>Please Select at least one item to be deleted.</p>";
          }
      }

	?>
	<?php 
		$query = "SELECT * FROM shouts ORDER BY id DESC";
		$shouts = mysqli_query($con, $query);

		while( $row = mysqli_fetch_array($shouts) ){
			echo '<br/><input type="checkbox" value="'.$row['id']. '" name="todelete[]">';

			echo '<strong>' .$row['user']. ': </strong>';

			echo ' ' .$row['message'].' ';

			echo '<span>' .$row['time'].'</span>';

			echo '<br/>';

		}
	mysqli_close($con);
	?>

		<input class="submit-btn" type="submit" name="submit" value="Remove">
	</form>

</body>

</html>