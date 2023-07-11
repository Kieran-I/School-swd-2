
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../style.css" rel="stylesheet">
</head>

<body>

    <h1 id="Comments">Intro text</h1>
           <?php

include_once '../openDB.php';
//place comment on page
$sql = "SELECT TextBlock1 FROM introtext";
$result = $conn->query($sql);
// output data of each row
while ($row = $result->fetch()) {
    echo "<h2>" . htmlspecialchars($row['TextBlock1']) . "</h2>";
}
?>
  <form action="TextBlockInsert.php" method="post">
<p>
    <label for="comment">Introtext</label>
    <input type="text" name="comment" id="comment">
    <!-- <textarea type="text" rows="4" cols="50" id="comment" name="comment" form="cusrform">Enter text here...</textarea> -->
</p>
<input id="submit"type="submit" value="Submit">
</form>
<br><br><br>
    <footer>
        <a href="../index.php">Homepage</a> <br>Contact: Kieran.Teunissen@live.nl
    </footer>
</body>

</html>