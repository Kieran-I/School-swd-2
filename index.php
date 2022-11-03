<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="index.css" rel="stylesheet">
    <title>Mood</title>
</head>
<?php

$nameErr = $emailErr = $mobileErr = $genderErr = $courseErr = " ";
$name = $email = $mobile = $gender = $course = "";

if (isset($_POST["submit"])) {

    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = $_POST["name"];
        echo "Thanks for you submission";
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = $_POST["email"];

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
    } else {
        $gender = $_POST["gender"];

    }
    if (empty($_POST["feedback"])) {
        $feedbackErr = "feedback is required";
    } else {
        $feedback = $_POST["feedback"];

    }
}

?>

<body>
    <p id="hi_center">Hallo <?php echo $name ?></p>
    <div class="container">

        <form method="post" class="needs-validation" enctype="multipart/form-data">

            <div class="form-group">
                <label for="uname">NAME:</label>
                <input type="text" class="form-control" placeholder="Enter username" name="name"
                    value="<?php if (isset($_POST['name'])) {echo $_POST['name'];}?>">
                <span class="error">* <?php echo $nameErr; ?></span>
            </div>

            <div class="form-group">
                <label for="uname">EMAIL:</label>
                <input type="email" class="form-control" placeholder="Enter Email" name="email"
                    value="<?php if (isset($_POST['email'])) {echo $_POST['email'];}?>">
                <span class="error">* <?php echo $emailErr; ?></span>
            </div>


            <div class="form-group">
                <label>Geslacht:</label>
                <input type="radio" name="gender" value="L"
                    <?php if (isset($_POST['gender'])) {if ($_POST['gender'] == "L") {echo 'checked';}}?>> L

                <input type="radio" name="gender" value="H"
                    <?php if (isset($_POST['gender'])) {if ($_POST['gender'] == "H") {echo 'checked';}}?>> H

                <input type="radio" name="gender" value="B"
                    <?php if (isset($_POST['gender'])) {if ($_POST['gender'] == "B") {echo 'checked';}}?>> B

                <input type="radio" name="gender" value="T"
                    <?php if (isset($_POST['gender'])) {if ($_POST['gender'] == "T") {echo 'checked';}}?>> T

                <input type="radio" name="gender" value="M"
                    <?php if (isset($_POST['gender'])) {if ($_POST['gender'] == "M") {echo 'checked';}}?>> M

                <input type="radio" name="gender" value="V"
                    <?php if (isset($_POST['gender'])) {if ($_POST['gender'] == "V") {echo 'checked';}}?>> V

                <p><span class="error"> <?php echo $genderErr; ?></span></p>
            </div>

            <button type="submit" name="submit" class="btn btn-primary p-3 btn-block my-5">Submit</button>
        </form>
    </div>

    <div class="dropdown">
        <p> Wilt u beoordelen </p> <button onclick="myFunction()" class="dropbtn"></button>
        <div id="myDropdown" class="dropdown-content">
            <form method="post" class="needs-validation" enctype="multipart/form-data">
<!-- deze knoppen blijft niet gecheckt ;_; 
ook geen plaatjes, ik hou het liever simpel en kaal-->

                <div class="form-group">

                    <input type="radio" name="feedback" value="realhappy"
                        <?php if (isset($_POST['feedback'])) {if ($_POST['feedback'] == "realhappy") {echo 'checked';}}?>>
                    veryhappy

                    <input type="radio" name="feedback" value="happy"
                        <?php if (isset($_POST['feedback'])) {if ($_POST['feedback'] == "happy") {echo 'checked';}}?>>
                    happy


                    <input type="radio" name="feedback" value="neutral"
                        <?php if (isset($_POST['feedback'])) {if ($_POST['feedback'] == "neutral") {echo 'checked';}}?>>
                    neutral


                    <input type="radio" name="feedback" value="sad"
                        <?php if (isset($_POST['feedback'])) {if ($_POST['feedback'] == "sad") {echo 'checked';}}?>> sad


                    <input type="radio" name="feedback" value="angry"
                        <?php if (isset($_POST['feedback'])) {if ($_POST['feedback'] == "angry") {echo 'checked';}}?>>
                    angry


                </div>

            </form>
        </div>
    </div>
    <?php
    //gejat. niet te veel veranderd, heb ik minder kans op foutjes xP
class gender
{
    public $lastMood = "geen";
    public $mood = "geen";
    public $background = "white";

    public function changeMood($newMood)
    {
        $this->mood = $newMood;
        $this->lastMood = $this->mood;
        if ($newMood == "L") {
            $this->background = "red";
        } elseif ($newMood == "H") {
            $this->background = "orange";
        } elseif ($newMood == "B") {
            $this->background = "yellow";
        } elseif ($newMood == "T") {
            $this->background = "lightgreen";
        } elseif ($newMood == "M") {
            $this->background = "lightblue";
        } elseif ($newMood == "V") {
            $this->background = "pink";
        }
    }
}
$moodClass = new gender();
if (isset($_POST["submit"])) {
    $moodClass->changeMood($_POST["gender"]);
    $moodBackground = $moodClass->background;
    echo "<script>document.body.style.backgroundColor = '$moodBackground';</script>";
}
?>

    <script>
    /* dropdown menu */
    function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
    }
    </script>
</body>

</html>