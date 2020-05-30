<?php 

    $movieName = $_GET["movieName"];
    $actorName = $_GET["actorName"];
    $movieDate = $_GET["movieDate"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        <b>
            Information about <?php echo"$movieName" ?>: 
        </b>
    </p>
    <p>
            <b>
            <?php echo"$actorName" ;?>
            </b>
                starred in the movie 
            <b>
            <?php echo"$movieName" ;?>
            </b>
                 which was released in year 
            <b>
            <?php echo"$movieDate" ;?>
            </b>
    </p>
    
</body>
</html>