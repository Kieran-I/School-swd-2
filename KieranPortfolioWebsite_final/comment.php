<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="style.css" rel="stylesheet">
</head>

<body>    <?php
    include_once 'incs/navbar.php';
    ?>
    <!--  content  -->
    <div class="content">
        <h1 id="Comments">Comment section</h1>
        <div class="comment section">
            <?php
include_once 'openDB.php';
//plaats comment op pagina
$sql = "SELECT Name, Comment FROM comments";
$result = $conn->query($sql);
// output data
while ($row = $result->fetch()) {
    echo "<div class='commentEntry'><div class='author'>" . htmlspecialchars($row['Name']) .
     "</div><div class='comment2'>" . htmlspecialchars($row['Comment']) . "</div></div>";
}?>
            <!--  insert comment form  -->
            <form action="insert2.php" method="post">
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
    </div>
    <!--end of content -->

</body>
<?php
    include_once 'incs/footer.php';
    ?>




</html>