<?php

// file been called by /delete.php?id={id}   $_GET['id']


include_once('openDB.php');

echo "<p><a href='Admin comments.php'>terug naar admin</a></p>";

if (isset($_GET['TextBlock1'])) {
    echo '<h1>Update van text ' . $_GET['TextBlock1'] . '<h1>';
    $text = $_GET['TextBlock1'];
    try {
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("SELECT * FROM introtext WHERE TextBlock1=$text");
        $stmt->execute();

        // set the resulting array to associative
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

        foreach ($stmt->fetchAll() as $k => $v) {
            $textblock = htmlspecialchars($v['TextBlock1']);
            echo "
             <form action=\"TextBlockInsert.php\" method='post'>
              <label for=\"textblock\">text:</label><br>
              <input type=\"text\" id=\"textblock\" name=\"textblock\" value='$textblock'><br>
              <input type=\"submit\" value=\"Wegschrijven\">
              </form> 
            
            <a href='Admin comments.php'>Terug naar index</a>
            ";
        }

    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }

    $conn = null;
}

if ($_POST) {
    try {
        $textblock = $_POST['textblock'];
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "UPDATE introtext
                    SET 

                        textblock= :TextBlock1
		                WHERE TextBlock1=$text";

        // Prepare statement
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":comment", $textblock);
        // execute the query
        $stmt->execute();

        // echo a message to say the UPDATE succeeded
        echo $stmt->rowCount() . " records UPDATED successfully ";header('Location: Admin comments.php');
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }

    $conn = null;
}