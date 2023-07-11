<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="style.css" rel="stylesheet">
    <script src="script.js"></script>
</head>

<body>
    <!--  content  -->
    <div class="content">
        <!-- introtext  -->
        <div class="text" id="introductie">
            <?php
include_once 'openDB.php';
//place comment on page
$sql = "SELECT TextBlock1 FROM introtext";
$result = $conn->query($sql);
// output data of each row
while ($row = $result->fetch()) {
    echo "<h2 style='width:80%;margin-left:10%;'>" . htmlspecialchars($row['TextBlock1']) . "</h2>";
}?>
        </div>
        <!--  projects -->
        <div class="text" id="projecten">
            <h1 id="Projecten">Projecten</h1>
            <!--  grafisch -->
            <h3>grafische formgeving</h3>
            <div id="pics">
                <p> </p>
                <img class="picsimg" src="pictures/Concept of graphical design.png" alt="Concept of graphical design">
            </div>
            <!-- ALA en coding projects  -->
            <h3>ALA-projecten</h3>
            <div id="pics">
                <p>This is the project from the first "project week" it wasnt very succesfull, but i learned a lot.</p>
                <img class="picsimg" src="pictures/Kyriekongpageattempt.png" alt="Kyriekongpageattempt">
            </div>
            <!-- alles niet voor school  -->
            <h3>Homebrew</h3>
            <div id="pics">
                <p>I sometimes have need of custom images, I enjoy the usage of ai generators for this, such as
                    Stable Diffusion.</p>
                <img class="picsimg"
                    src="pictures/nareiK_ancient_warrior_river_b78b3b24-4739-4d11-8f96-71589ad1089c.png"
                    alt="nareiK_ancient_warrior_river_b78b3b24-4739-4d11-8f96-71589ad1089c">
                <img class="picshomebrew" src="pictures/nareiK_aesprite_flower_in_forest.png" alt="flower in forest">
                <img class="picshomebrew" src="pictures/nareiK_devil_in_heaven_crown.png" alt="crown flowers">
                <img class="picshomebrew" src="pictures/nareiK_predator_lurking_in_the_dark.png"
                    alt="predator in the dark">
                <img class="picshomebrew" src="pictures/nareiK_wallpaper_aesprite_tree_top_forest_detailed.png"
                    alt="forest">
            </div>
        </div>
        <!-- comment section  -->
        <h1 id="Comments">Comment section</h1>
        <div class="comment section">
            <?php
include_once 'openDB.php';
//place comment on page
$sql = "SELECT Name, Comment FROM comments";
$result = $conn->query($sql);
// output data of each row
while ($row = $result->fetch()) {
    echo "<div class='commentEntry'><div class='author'>" . htmlspecialchars($row['Name']) . "</div><div class='comment2'>" . htmlspecialchars($row['Comment']) . "</div></div>";
}?>
            <!-- comment form  -->
            <form action="insert.php" method="post">
                <p>
                    <label for="username">User Name:</label>
                    <input type="text" placeholder="User Name" name="user_name" id="user_name" required>
                </p>
                <p>
                    <label for="comment">Comment:</label>
                    <input type="text" placeholder="Comment Here" name="comment" id="comment">
                </p>
                <input id="submit" type="submit" value="Submit">
            </form>
        </div>
        <!-- cv  -->
        <div class="CV">
            <h1 id="CV">CV</h1>
            <a href="cv Kieran Teunissen V2.pdf" download> <img src="pictures/CVKT-V2.png" alt="CVKT"></a><br>
            <a href="cv Kieran Teunissen V2.pdf" download> Download</a>
        </div>
    </div>
    <!--navbar-->
    <div class="sticky" id="navbar">
        <a id="logo" href="index.php"><img src="pictures/Kieran logo-2.png" alt="KT logo4x"></a>
        <a class="links" onclick="projectenScroll()">Projecten</a>
        <a class="links" onclick="commentScroll()">comments</a>
        <a class="links" onclick="cvScroll()">CV</a>
    </div>
    <!--end of content -->

</body>
<?php
include_once 'incs/footer.php';
?>


</html>