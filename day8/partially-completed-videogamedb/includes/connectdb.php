<?php

# Connecting MySQL DB from Localhost with user root

$dbc = mysqli_connect("localhost","root","","videogamedbcc1") or die (mysqli_connect_error() );

# Setting encoding to match with PHP script

mysqli_set_charset($dbc, 'utf8');
    
    
    
?>