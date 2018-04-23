<?php
//Page header
$siteTitle = 'Search';
$siteName = 'Explore the NorthSide Festival Programme 2018';
$siteDescription = 'Please fill out the search form below.';

# Including header.php file 
include('includes/header.php');
?>    
    <form action="results.php" method="post">
      <label for="searctype">Choose Search Type:</label>
      <select name="searchtype"  class="form-control">
        <option value="stagename">Stage
        <option value="artistname">Artist
        <option value="country">Country     
      </select>
      <br />
     
      <div class="form-group">
        <label for="searchterm">Enter Search Term:</label>
        <input type="text" name="searchterm" class="form-control" id="search" placeholder="Search text...">
      </div>

      <input type="submit" name="submit" class="btn btn-success btn-lg btn-block" value="Search">
    </form><!-- FORM END-->

<?php
#Including footer.php file
include('includes/footer.php');
?>


