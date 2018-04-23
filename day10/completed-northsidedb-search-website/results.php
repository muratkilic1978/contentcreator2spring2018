<?php
#Page header
$siteTitle = 'Search Result';
$siteName = 'Explore the NorthSide Festival Programme 2018';
$siteDescription = '';

#Include header.php
include('includes/header.php');
?> 

<h1>Search Result(s)</h1>
<?php
  #Get the values searchtype and searchterm from previous page and create short variables
  $searchtype=$_POST['searchtype'];
  $searchterm=trim($_POST['searchterm']);

  #Check and see whether the searchtype and searchterm variables are set
  if (!$searchtype || !$searchterm) {
     echo '<div class="alert alert-danger"><strong>Error occured when searching. Please write something in the searchterm field!</strong></div>';
     echo '<button class="btn btn-primary btn-lg btn-block" onclick="goBack()">Go Back</button>';
     exit;
  }

  if (!get_magic_quotes_gpc()){
    $searchtype = addslashes($searchtype);
    $searchterm = addslashes($searchterm);
  }
  
  #Connecting to the database
  include('includes/connectdb.php');
  
  #Checking if there was an problem connecting the database
  if (mysqli_connect_errno()) {
     echo 'Error: There was an database connection error!';
     exit;
  }
  #Preparing a INNER-Join SQL-Query
  $query = "SELECT artist.artistname AS artistname, artist.country, artiststage.yeaar, artiststage.month, artiststage.day, artiststage.clock, stage.stagename AS stagename FROM artist INNER JOIN artiststage ON artist.id = artiststage.artistid INNER JOIN stage ON artiststage.stageid = stage.id WHERE ".$searchtype." like '%".$searchterm."%'";
  
	 #Checking if the INNER-Join SQL-Query has an error - if it has an error it will prompt for an error message
     if(!$result = mysqli_query($dbc, $query)) { 	
    	die('There was an error running the query: ' . $dbc->error);
    	exit;
	} 
	else 
	{
        #Executing SQL-query
	    $result = mysqli_query($dbc, $query);	  
        #Counting number of records i query
        $num_results = mysqli_num_rows($result); 
    ?>
		<div class='container'>
            <div class='row'>
                <p>Number of matches:<?php echo $num_results ?></p>

			    <table class="table table-striped">
			    <thead>
                    <tr>
                        <th>Nr.</th>
			            <th>Artist name</th>
			            <th>Country</th>
                        <th>Date</th>
			            <th>Time</th>
			            <th>Stage</th>
			        </tr>
			    </thead>
			    <tbody>
              
              <!-- Begining for Loop -->
			  <?php for ($i=0; $i <$num_results; $i++) {
			     $row = $result->fetch_assoc();     
			      echo    '<tr>';
			      echo      '<td>'.($i+1).'</td>';
			      echo      '<td>'. htmlspecialchars(stripslashes($row['artistname'])) .'</td>';
			      echo      '<td>'. stripslashes($row['country']) .'</td>';
			      echo      '<td>'. stripslashes($row['day']).'-'. stripslashes($row['month']).'-'.stripslashes($row['yeaar']) .'</td>';
			      echo      '<td>'. stripslashes($row['clock']) .'</td>';
			      echo      '<td>'. stripslashes($row['stagename']) .'</td>';
			      echo    '</tr>';
			      
			  }
			  ?> <!-- For Loop ending -->
                </tbody>
			    </table>
			    <button class="btn btn-primary btn-lg btn-block" onclick="goBack()">Go Back</button>
			</div>
		</div><!-- CONTAINER END-->
	
<?php  
    #Freeing up MySQL ressources
    mysqli_free_result($result);

  	}
  	
    #Closing database connection
  	mysqli_close($dbc);

#Including footer.php file
include('includes/footer.php'); 
?>

