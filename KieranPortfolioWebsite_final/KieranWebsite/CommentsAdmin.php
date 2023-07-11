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

<?php

//working on this..


// if (!isset($_SESSION['user_id'])) {
//     header('Location: index.php');
//     exit;
// } else {
//     if (isset($_SESSION['admin'])) {
//         if ($_SESSION['admin'] == 99) {
//             header('location: ../Admin/homepage.php');
//         }};
//     include 'navbar.php';
//     include 'searchbar.php';
//     include 'preview.php';
// }
?>
    <h1 id="Comments">Comment section</h1>
    <?php
echo "<table style='border: solid 10px #64577C; border-radius: 15px;width:70%;  overflow-wrap: break-word;
text-align: left;'>";
echo "<tr>
<th>id</th>
<th>User</th>
<th>Comment</th>
<th>Time</th>
</tr>";
class TableRows extends RecursiveIteratorIterator
{
    public function __construct($it)
    {
        parent::__construct($it, self::LEAVES_ONLY);
    }
    public function current()
    {
        return "<td style='width:auto;border:1px solid black; overflow-wrap: break-word; 
        text-align: left;'>" . htmlspecialchars(parent::current()) . "</td>";
    }
    public function beginChildren()
    {
        echo "<tr>";
    }
    public function endChildren()
    {
        echo "</tr>" . "\n";
    }
}
include_once '../openDB.php';
try {
    $stmt = $conn->prepare("SELECT * FROM comments");
    $stmt->execute();
    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach (new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k => $v) {
        echo $v;
        if ($k == 'Id') {
            $id = strip_tags($v);
            $l = 'DeleteAdmin.php?id=' . $id;
            $e = 'EditAdmin.php?id=' . $id;
        }
        if ($k == 'Date') {
            echo "<td><a href='$l'>X</a> <a href='$e'>E</a></td>";
        }
        }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?>
    <br>
    <form action="InsertAdmin.php" method="post">
        <p>
            <label for="username">User Name:</label>
            <input type="text" name="user_name" id="user_name">
        </p>
        <p>
            <label for="comment">Comment:</label>
            <input type="text" name="comment" id="comment">
        </p>
        <input id="submit" type="submit" value="Submit">
    </form>
    <br><br><br>
    <a id="submit" href="IntrotextAdmin.php">add introtext</a> <br>
    <footer>
        <a href="../index.php">Homepage</a> <br>Contact: Kieran.Teunissen@live.nl
    </footer>
</body>

</html>