<?php

# Open connection to MYSQL from PHP
$con = mysqli_connect("localhost","root","","testnorthsidedb") or die (mysqli_connect_error());

# Set encoding to match with MySQL
mysqli_set_charset($con, 'utf8');



?>
