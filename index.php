<!--

MUHD HAZIQ BIN ABDUL HALIM
19047241

-->

<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Yishun Hosp. - Home</title>
        <link href="css/all.css" rel="stylesheet" type="text/css"/>
        <link href="css/all.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css"/>

        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/Chart.bundle.min.js" type="text/javascript"></script>
        <script src="js/additional-methods.min.js" type="text/javascript"></script>
        <script src="js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/jquery-ui.min.js" type="text/javascript"></script>
        <script src="js/jquery.validate.min.js" type="text/javascript"></script>
        <script src="js/moment.min.js" type="text/javascript"></script>
        <script src="js/jquery.raty.min.js" type="text/javascript"></script>

    </head>
    <body>
        <?php
        include("navbar.php");
        ?>
        
        <?php if (isset($_SESSION['patient_id'])) { ?>
            <div class="d-block p-3 bg-primary text-white text-center font-weight-bold">
                <?php
                echo "Welcome " . $_SESSION['username'] . "!";
                ?>
            </div>
        <?php } ?>
        
        
        <img class="d-block w-100" src="images/organization_logo.jpg" alt="banner">
        <blockquote class="blockquote float-right">
            <p class="mb-0">Provide good quality, affordable and hassle-free healthcare with science, love and wisdom.</p>
        </blockquote>



    </body>
</html>

<!--

MUHD HAZIQ BIN ABDUL HALIM
19047241

-->