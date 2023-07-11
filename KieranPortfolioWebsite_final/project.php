<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="style.css" rel="stylesheet">
    <script src="script.js"></script>
    <script src="javascript.js"></script>
    
</head>

<body>
<?php
    include_once 'incs/navbar.php';
    ?>
    <!--  content  -->
    <div class="content">
        <div class="text" id="projecten">
            <h1 id="Projecten">Projecten</h1>
            <!--   grafisch -->
            <h3>grafische formgeving</h3>
            <div id="pics">
                <p> </p>
                <img class="picsimg" src="pictures/Concept of graphical design.png" alt="Concept of graphical design">
            </div>
            <!--  ALA/coding projecten  -->
            <h3>ALA-projecten</h3>
            <div id="pics">
                <p>This is the project from the first "project week" it wasnt very succesfull, but i learned a lot.</p>
                <img class="picsimg" src="pictures/Kyriekongpageattempt.png" alt="Kyriekongpageattempt">
            </div>
            <div id="pics">
            <p>this is the start of a little game I made for a school project, it was in the end not required.</p>
            <canvas id="game-canvas" width="540" height="540"></canvas>
            
            </div>
            <!--  alles wat niet bij school hoort  -->
            <h3>Homebrew</h3>
            <div id="pics">
                <p>I sometimes have need of custom images, I enjoy the usage of ai generators for this, such as
                    Stable Diffusion.
                <br>klick to view!</p>
                <img class="picsimg" id="bigimg"
                    src="pictures/nareiK_ancient_warrior_river_b78b3b24-4739-4d11-8f96-71589ad1089c.png"
                    alt="nareiK_ancient_warrior_river_b78b3b24-4739-4d11-8f96-71589ad1089c">
                <img class="picshomebrew" id="smallimg1" onclick="smallimg1()" src="pictures/nareiK_aesprite_flower_in_forest.png" alt="flower in forest">
                <img class="picshomebrew" id="smallimg2" onclick="smallimg2()" src="pictures/nareiK_devil_in_heaven_crown.png" alt="crown flowers">
                <img class="picshomebrew" id="smallimg3" onclick="smallimg3()" src="pictures/nareiK_predator_lurking_in_the_dark.png"
                    alt="predator in the dark">
                <img class="picshomebrew" id="smallimg4" onclick="smallimg4()" src="pictures/nareiK_wallpaper_aesprite_tree_top_forest_detailed.png"
                    alt="forest">
            </div>

        </div>

        <!--end of content -->

</body>
<?php
    include_once 'incs/footer.php';
    ?>




</html>