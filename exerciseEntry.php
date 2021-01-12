<!DOCTYPE html>
<!--

MUHD HAZIQ BIN ABDUL HALIM
19047241

-->

<?php
session_start();
?>

<html>
    <head>
        <title>Yishun Hosp. - Enter New Exercise</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/all.css" rel="stylesheet" type="text/css"/>
        <link href="css/all.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
        
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/Chart.bundle.min.js" type="text/javascript"></script>
        <script src="js/jquery.validate.min.js" type="text/javascript"></script>
        <script src="js/additional-methods.min.js" type="text/javascript"></script>
        <script src="js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/jquery-ui.min.js" type="text/javascript"></script>
        <script src="js/moment.min.js" type="text/javascript"></script>
        <script src="js/jquery.raty.min.js" type="text/javascript"></script>

        <style>
            form .error {
                color: #ff0000;
            }
        </style>
        <script>
            $(document).ready(function () {
                
                // DURATION SLIDER
                $("#durationSlider").slider({
                    value: 5,
                    min: 5,
                    max: 120,
                    step: 1,
                    slide: function (event, ui) {
                        $("#idDuration").val(ui.value);
                    }
                });
                $("#idDuration").val($("#durationSlider").slider("value"));
            });
        </script>
    </head>
    <body>
        <?php
        include("navbar.php");
        ?>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active">Enter New Exercise</li>
        </ol>
        <div class="container">
            <h2>Enter New Exercise</h2>
            <form id="defaultForm" method="post" action="doExercise.php">
                
                <div class="form-group">
                    <label for="idExercise">Exercise Type: </label>
                    <select class="form-control" name="exercise" id="idExercise">
                        <option value="Walk" selected>Walk</option>
                        <option value="Run">Run</option>
                        <option value="Cycle">Cycle</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="idDuration">Duration (minutes)</label>
                    <input type="text" class="form-control" id="idDuration" name="duration" readonly required>
                    <div id="durationSlider"></div>
                </div>

                <input type="submit" class="btn btn-primary" value="Submit"/>
            </form>
            <br/>
            <p id="results"></p>
        </div>
    </body>
</html>

<!--

MUHD HAZIQ BIN ABDUL HALIM
19047241

-->