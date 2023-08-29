<?php
include("database.php");

$uname = $_POST['uname'];
$pass = $_POST['pass'];

$checkQuery = "SELECT * FROM admin WHERE uname = '$uname' AND pass = '$pass'";
$checkResult = mysqli_query($conn, $checkQuery);

if (mysqli_num_rows($checkResult) > 0) {

    header("Location: cms.html");
    exit();
}
$errorMsg = "Invalid username or password. Please try again.";

mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PataKazi TZ</title>
    <link rel="stylesheet" href="adminlogin.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet" />

</head>
<body>
    <div class="maincontent">
        <img src="images/catslogo.png" alt="" />
        <p>Welcome to Admin Portal</p>

        <form action="adminlogin.php" method="post">
            <input type="text" name="uname" placeholder="Username" />
            <input type="password" name="pass" placeholder="Password" />
            <input type="submit" name="signin" value="Log In" />
            <p style="color: red;"><?php echo $errorMsg; ?></p>
        </form>
    </div>
</body>
</html>
<?php
mysqli_close($conn);
?>