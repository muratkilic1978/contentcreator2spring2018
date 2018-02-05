<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Show images from array</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php 
        $pic = array("1.jpg", "2.jpg", "3.jpg", "4.jpg", "5.jpg", "6.jpg", "7.jpg", "8.jpg", "9.jpg", "10.jpg", "11.jpg", "12.jpg");
        shuffle($pic);
    ?>
        <ul>
            <?php for ($i = 0; $i<=2; $i++)
            echo "<li><img id=\"shuffle-image\" src=\"images/$pic[$i]\" ></li>";
            ?>
            
        </ul>
    
</body>
</html>