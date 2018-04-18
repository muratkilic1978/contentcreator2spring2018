<?php

#Page header
$siteTitle = 'Add videogame';
$siteName = 'Add videogame to collection.';
$siteDescription = 'Please fill out the form below with information about the videogame.';

include('includes/header.php');
?>


<i class="fa fa-plus fa-3x">
    </i>
    <form action="addingvideogame.php" method="post">
        <div class="form-group">
            <label for="titlename">Title:</label>
            <input type="text" name="titlename" id="titlename" class="form-control" placeholder="Fifa 2018">
        </div><!--END titlename field -->
        
        <div class="form-group">
            <label for="descriptionname">Description:</label>
            <textarea name="descriptionname" id="descriptionname" rows="5" class="form-control"></textarea>
        </div><!--END descriptionname field -->
        
        <div class="form-group">
            <label for="pricename">Price:</label>
            <input type="number" name="pricename" id="pricename" class="form-control" min="0" max="999" step="0.5">
        </div><!--END pricename field -->
        
        <?php
        
        # include database connection
        include('includes/connectdb.php');
        
        # Create a SQL-query to the database
        $platformQuery = "SELECT id, platformname FROM platforms order by platformname desc";
        
        # Execute the SQL-query $platformQuery
        $resultPlatformQuery = mysqli_query($dbc, $platformQuery);
        
        # Create a SQL-query to the database
        $publisherQuery = "SELECT id, publishername FROM publishers order by publishername desc";
        
        # Execute the SQL-query $platformQuery
        $resultPublisherQuery = mysqli_query($dbc, $publisherQuery);
        
        ?>
        
        <div class="form-group">
            <label for="platforms">Platform:</label>
            <select name="platformid" id="platformid" class="form-control">
            <!-- Looping through array with platformnames -->
            
            <?php  while($row = mysqli_fetch_array($resultPlatformQuery)): ?>
                <option value="<?php echo $row['id']; ?>"><?php echo $row['platformname']; ?></option>
            <!--END of while-looping -->
            <?php endwhile; ?>
            </select>
        </div><!--END platform field -->
        
        <div class="form-group">
            <label for="publishers">Publisher:</label>
            <select name="publisherid" id="publisherid" class="form-control">
            <!-- Looping through array with publishernames -->
            
            <?php  while($row = mysqli_fetch_array($resultPublisherQuery)): ?>
                <option value="<?php echo $row['id']; ?>"><?php echo $row['publishername']; ?></option>
            <!--END of while-looping -->
            <?php endwhile; ?>
            </select>
        </div><!--END publisher field   -->
        <div class="btn-toolbar text-center well">
            <input type="submit" value="Add Videogame" class="btn btn-primary btn-block">
        </div>
    </form>
    <aside id="asidevideogame"> </aside>
    
    <?php include('includes/footer.php'); ?>
    
   
  
 






