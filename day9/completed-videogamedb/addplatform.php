<?php

#Page header
$siteTitle = 'Add platform';
$siteName = 'Add platform';
$siteDescription = 'Please fill out the form below with information about the platform.';

#Include header.php
include('includes/header.php');
?>
   
    <i class="fa fa-plus fa-3x">
    </i>
    <form action="addingplatform.php" method="post">
        <div class="form-group">
            <label for="platformname">Platform name:</label>
            <input type="text" name="platformname" id="platformname" class="form-control" placeholder="PSP">
        </div>
        <div class="btn-toolbar text-center well">
                <input type="submit" value="Add Platform" class="btn btn-primary btn-block">
        </div>
    </form>
    <aside id="asideplatform"></aside>
    
<?php include('includes/footer.php');  ?>
    
    
    
    
    
    
    
    
    
    
    
    