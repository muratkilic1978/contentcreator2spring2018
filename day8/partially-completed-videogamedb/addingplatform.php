<?php

#Page header
$siteTitle = 'Add platform';
$siteName = 'Add platform';
$siteDescription = '';

#include header.php
include('includes/header.php');
?>

<?php
    # Connecting to the database
    include('includes/connectdb.php');

    # Get data from submit-form and store it in variables
    $platformname = $_POST['platformname'];

    #Prepare SQL-query for insert-operation
    $query = "INSERT INTO platforms (id, platformname) VALUES(NULL, '$platformname')";

    # EXECUTING SQL-query 
    mysqli_query($dbc, $query) or die('Error querying the database!');
?>

    <div id="divspace" class="panel panel-default">
        <div class="panel-heading panel panel-success">Success...</div>
        <div class="panel-body">
            <h2>You have now added <?php echo $platformname ?> to the platform archive.</h2>
        </div><!--END panel-body -->
        <div class="btn-toolbar text-center well">
            <a href="../completedvideogamedb/index.php"><button class="btn btn-primary btn-block" >Manage videogame</button></a>
        </div><!--END panel-footer-->
    </div><!--END divspace -->

<?php 
    #Closing database-connection
    mysqli_close($dbc);    
    
    #include footer.php   
    include('includes/footer.php'); 
?>
    
    











