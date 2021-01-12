<!--

MUHD HAZIQ BIN ABDUL HALIM
19047241

-->

<?php
session_start();
$message = "";
if (isset($_SESSION['patient_id'])) {
    $message = "<div class='alert alert-success' role='alert'>You have successfully logged out <a href='index.php'>Continue</a></div>";
    $_SESSION = array();
    session_destroy();
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/all.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-3.5.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
        <title>Story Teller - Logout</title>
    </head>
    <body>
        <?php
        include("navbar.php");
        ?>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active">Logout</li>
        </ol>
        <div class="container">
            <h3>Logout</h3>

            <?php
            echo $message;
            ?>
        </div>
    </body>
</html>

<!--

MUHD HAZIQ BIN ABDUL HALIM
19047241

-->