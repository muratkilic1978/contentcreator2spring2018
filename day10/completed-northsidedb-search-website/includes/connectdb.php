<?php

# Open connection to MYSQL from PHP
$dbc = mysqli_connect("localhost","root","","testnorthsidedb") or die (mysqli_connect_error());

# Set encoding to match with MySQL
mysqli_set_charset($dbc, 'utf8');



?>
