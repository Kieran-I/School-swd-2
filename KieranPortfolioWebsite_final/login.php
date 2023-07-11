<!DOCTYPE html>
<html>
<head>
    <title>LOGIN</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
        <!--  login form, hij werkt niet  -->
    <form action="KieranWebsite/CommentsAdmin.php" method="post">
        <h2>LOGIN</h2>
        <?php if (isset($_GET['error'])) {?>
        <p class="error"><?php echo $_GET['error']; ?></p>
        <?php }?>
        <label>User Name</label>
        <input type="text" name="uname" placeholder="User Name"><br>
        <label>Password</label>
        <input type="password" name="password" placeholder="Password"><br>
        <button id="loginbutton" type="submit">Login</button>
    </form>
</body>
 <!--  links  -->
<footer>
    <a href="index.php">Homepage</a> <br>
    <a href="indexScroll.php">Scrollpage</a> <br>
    Contact: Kieran.Teunissen@live.nl
</footer>
</html>