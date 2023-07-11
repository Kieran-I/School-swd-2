<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="style.css" rel="stylesheet">
</head>

<body>
    <?php
include_once 'incs/navbar.php';
?>
    <!--  content  -->
    <div class="content">
        <!--  intro uit database  -->
        <div class="text" id="introductie">
            <?php
include_once 'openDB.php';
//plaats introtext op pagina
$sql = "SELECT TextBlock1 FROM introtext";
$result = $conn->query($sql);
// output data
while ($row = $result->fetch()) {
    echo "<h2 style='width:80%;margin-left:10%;'>" . htmlspecialchars($row['TextBlock1']) . "</h2>";
}?>
            <!--  links via pics  -->
            <div class="homepage">
                <a href="project.php"><img class="homepics" src="pictures/Concept of graphical design.png"
                        alt="Concept of graphical design"></a>
                <a href="comment.php"><img class="homepics" src="pictures/nareiK_devil_in_heaven_crown.png"
                        alt="crown and flowers"></a>
                <a href="cv.php"> <img class="homepics" src="pictures/Kieran Teleporting.png"
                        alt="Kieran Teleporting"></a>
            </div>
        </div>
    </div>
    <!--end of content -->
</body>
<?php
include_once 'incs/footer.php';
?>

</html>