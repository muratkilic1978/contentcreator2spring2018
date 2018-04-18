<?php

#Page header
$siteTitle = 'Add publisher';
$siteName = 'Add publisher';
$siteDescription = '';

include('includes/header.php');
?>

<?php
    # Connecting to the database
    include('includes/connectdb.php');

    # Get data from submit-form and store it in variables
    $publishername = $_POST['publishername'];
    $websitename = $_POST['websitename'];

    #Prepare SQL-query for insert-operation
    $query = "INSERT INTO publishers (id, publishername, website) VALUES(NULL, '$publishername', '$websitename')";

    # EXECUTING SQL-query 
    mysqli_query($dbc, $query) or die('Error querying the database!');

?>

     <div id="divspace" class="panel panel-default">
        <div class="panel-heading panel panel-success">Success...</div>
        <div class="panel-body">
            <h2>You have now added <?php echo $publishername; ?> to the publisher archive.</h2>
        </div><!--END panel-body -->
        <div class="btn-toolbar text-center well">
            <a href="../completedvideogamedb/index.php"><button class="btn btn-primary btn-block" >Manage videogame</button></a>
        </div><!--END panel-footer-->
    </div><!--END divspace -->
<?php 

    #Close database-connection
    mysqli_close($dbc);
?>
   
<script>
    function goBack() {
        window.history.back();
    }
</script>
    
    
<?php include('includes/footer.php'); ?>












