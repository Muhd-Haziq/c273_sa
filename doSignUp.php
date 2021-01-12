<!--

MUHD HAZIQ BIN ABDUL HALIM
19047241

-->

<?php
session_start();
include("dbFunctions.php");
$message = "";

$username = $_POST['username'];
$password = $_POST['password'];
$height = $_POST['height'];
$weight = $_POST['weight'];
$dateOfBirth = $_POST['dateOfBirth'];
$activeLevel = $_POST['activeLevel'];

$query = "INSERT INTO patient
          (username,password,dateOfBirth,height,weight,active) 
          VALUES 
          ('$username',sha1('$password'),STR_TO_DATE('$dateOfBirth', '%m/%d/%Y'),'$height', $weight,'$activeLevel')";

$status = mysqli_query($link, $query);

if ($status) {
    
    $message = "<div class='alert alert-success' role='alert'><p>Your new account has been successfully created.
            You are now ready to <a href='index.php'>login</a></p></div>";
}
else {
    $message =  "<div class='alert alert-danger' role='alert'>Sorry,account creation failed. <a href='signUp.php'>Try again</a></div>";
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Yishun Hosp. - Sign Up</title>
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
            <li class="breadcrumb-item active">Sign Up</li>
        </ol>
        <div class="container">
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