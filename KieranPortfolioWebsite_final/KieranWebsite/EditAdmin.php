<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../style.css" rel="stylesheet">
    <script src="script.js"></script>
</head>

<body>
    <?php
// file been called by /delete.php?id={id}   $_GET['id']
include_once('../openDB.php');
if (isset($_GET['id'])) {
    echo '<h1>Update van id ' . $_GET['id'] . '<h1>';
    $id = $_GET['id'];
    try {
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("SELECT * FROM comments WHERE Id=$id");
        $stmt->execute();
        // set the resulting array to associative
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        foreach ($stmt->fetchAll() as $k => $v) {
            $user = htmlspecialchars($v['Name']);
            $comment = htmlspecialchars($v['Comment']);
            $time = htmlspecialchars($v['Date']);
            echo "
             <form action=\"EditAdmin.php\" method='post'>
              <label for=\"id\">id:</label><br>
              <input type=\"text\" id=\"id\" name=\"id\" value='$id'><br>
              <label for=\"fuser\">user:</label><br>
              <input type=\"text\" id=\"user\" name=\"user\" value='$user'><br>
              <label for=\"address\">comment:</label><br>
              <input type=\"text\" id=\"comment\" name=\"comment\" value='$comment'><br>
              <label for=\"time\">time:</label><br>
              <input type=\"text\" id=\"time\" name=\"time\" value='$time'><br>
              <input type=\"submit\" value=\"Wegschrijven\">
              </form> 
            <a href='CommentsAdmin.php'>Terug naar Admin</a>";
        }
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
    $conn = null;
}
if ($_POST) {
    try {
        $id = $_POST['id'];
        $user = $_POST['user'];
        $comment = $_POST['comment'];
        $time = $_POST['time'];
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "UPDATE comments
                    SET 
                        Name= :name, 
                        Comment= :comment,
                        Date= :date
                WHERE Id=$id";
        // Prepare statement
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":name", $user);
        $stmt->bindParam(":comment", $comment);
        $stmt->bindParam(":date", $time);
        // execute the query
        $stmt->execute();
        // echo a message to say the UPDATE succeeded
        echo $stmt->rowCount() . " records UPDATED successfully ";header('Location: CommentsAdmin.php');
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
    $conn = null;
}
?>
</body>
<footer> <a href="CommentsAdmin.php">Admin</a> <br>
    Contact: Kieran.Teunissen@live.nl
</footer>


</html>