<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Test PHP</title>
</head>
<body>
   <h1><?php echo "Murat Kilic"; ?></h1>
   <h2><?php print "My favourite color is green"; ?></h2>
   
    <?php
        //Single line comment in PHP
        /* Multi-line comments in PHP
        *
        *
        */
        # This is also a single line comment in PHP
        $firstname1 = "Fani";
        $firstname2 = "Mark";
        $firstname3 = "Kamilla";
        $firstname4 = "Christian";
        $Money = 1;
        $money = 10000000;
    ?>
    <h1><?php echo $firstname1; ?></h1>
    <h1><?php echo $firstname2; ?></h1>
    <h1><?php echo $firstname3; ?></h1>
    <h1><?php echo $firstname4; ?></h1>
    
    <h1><?php echo $Money + $money; ?></h1>
    
    
    <h3><?php 
        echo "Position 1: ". $firstname1."<br> Position 2: ".$firstname2."<br>Position 3: ".$firstname3."<br>Position 4: ".$firstname4;  
        ?>
    </h3>
    
    <?php 
    
        $studentnames = array("Fani","Mark","Mikkel","Christian","Kamilla","Paulina","Justina");
    
        /*
        echo $studentnames[0]."<br>";
        echo $studentnames[1]."<br>";
        echo $studentnames[2]."<br>";
        echo $studentnames[3]."<br>";
        echo $studentnames[4]."<br>";
        */
    
    
    foreach ($studentnames as $studentname) {
        echo "<li>$studentname</li>";
        
    }
    
    
    ?>
    
    
    
    
    
    
    
    
    
</body>
</html>