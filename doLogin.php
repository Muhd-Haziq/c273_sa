<!--

MUHD HAZIQ BIN ABDUL HALIM
19047241

TEST PATIENT
Username - testing
Password - Testing123

-->

<?php
session_start();
include("dbFunctions.php");
$msg = "";


if (isset($_POST['username'])) {
    //retrieve form data
    $username = $_POST['username'];
    $password = $_POST['password'];

    //match the username and password entered with database record
    $query = "SELECT * FROM patient WHERE username='$username' AND password = sha1('$password')";

    $result = mysqli_query($link, $query) or die(mysqli_error($link));

    //if record is found, store id and username into session
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);
        $_SESSION['patient_id'] = $row['patient_id'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['dateOfBirth'] = $row['dateOfBirth'];
        $_SESSION['height'] = $row['height'];
        $_SESSION['weight'] = $row['weight'];
        $_SESSION['active'] = $row['active'];
        $msg = "<div class='alert alert-success' role='alert'>You have logged in successfully <a href='index.php'>Continue</a></div>";
    } else {
        $msg = "<div class='alert alert-danger' role='alert'>Sorry, you must enter a valid username and password to log in. <a href='login.php'>Try again</a></div>";
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Story Teller - Login</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/all.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-3.4.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </head>
    <body>
        <?php
        include("navbar.php");
        ?>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active">Login</li>
        </ol>
        <div class="container">
            <?php
            echo $msg;
            ?>
        </div>
    </body>
</html>

<!--

MUHD HAZIQ BIN ABDUL HALIM
19047241

-->