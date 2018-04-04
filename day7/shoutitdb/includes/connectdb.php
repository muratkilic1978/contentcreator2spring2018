<?
# Connect on localhost for user root
# with password xxxxxxx to database userloginwebsystem 

$con = mysqli_connect("localhost","root","","shoutit")
or die (mysqli_connect_error() );

# Set encoding to match PHP script

mysqli_set_charset($con, 'utf8'); 


#Display MySQL version and host


/*if(mysqli_ping($dbc))
{ echo 'MYSQL Server' .mysqli_get_server_info($dbc). ' <br> on ' . mysqli_get_host_info($dbc); }
*/


?>