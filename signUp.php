<!DOCTYPE html>
<!--

MUHD HAZIQ BIN ABDUL HALIM
19047241

-->
<html>
    <head>
        <title>Yishun Hosp. - Sign Up</title>
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

                // DOB DATEPICKER
                $("#idDoB").datepicker({maxDate: new Date()});

                // HEIGHT SLIDER
                $("#hSlider").slider({
                    value: 1.00,
                    min: 1,
                    max: 3,
                    step: 0.01,
                    slide: function (event, ui) {
                        $("#idHeight").val(ui.value);
                    }
                });
                $("#idHeight").val($("#hSlider").slider("value"));

                // WEIGHT SLIDER
                $("#wSlider").slider({
                    value: 40,
                    min: 40,
                    max: 200,
                    step: 1,
                    slide: function (event, ui) {
                        $("#idWeight").val(ui.value);
                    }
                });
                $("#idWeight").val($("#wSlider").slider("value"));


                $("#defaultForm").validate({
                    rules: {
                        username: {
                            required: true,
                            pattern: /^[a-zA-Z0-9]{6,}/     // 6 characters, no special
                        },
                        password: {
                            required: true,
                            pattern: /^[A-Z][A-Za-z0-9]{6,}[0-9]$/    // 8 characters, start with uppercase, end with digit. No special
                        },
                        dateOfBirth: {
                            required: true,
                        }
                    },
                    messages: {
                        username: {
                            required: "Please enter a username",
                            pattern: "Username must be at least 6 characters long. No special characters allowed"
                        },
                        password: {
                            required: "Please enter a password",
                            pattern: "Password must be at least 8 characters long, begin with an uppercase letter and end with a digit. No special characters allowed."
                        },
                        dateOfBirth: {
                            required: "Please enter your date of birth",
                        }

                    },
                    submitHandler: function () {
                        return true;
                    }
                });

                

            });
        </script>
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
            <h2>Sign Up</h2>
            <form id="defaultForm" method="post" action="doSignUp.php">
                <div class="form-group">
                    <label for="idUsername">Username</label>
                    <input type="text" class="form-control" id="idUsername" name="username" required>
                </div>

                <div class="form-group">
                    <label for="idPassword">Password</label>
                    <input type="password" class="form-control" id="idPassword" name="password" required>
                </div>

                <div class="form-group">
                    <label for="idHeight">Height (m)</label>
                    <input type="text" class="form-control" id="idHeight" name="height" readonly required>
                    <div id="hSlider"></div>
                </div>

                <div class="form-group">
                    <label for="idWeight">Weight (kg)</label>
                    <input type="text" class="form-control" id="idWeight" name="weight" readonly required>
                    <div id="wSlider"></div>

                </div>

                <div class="form-group">
                    <label for="idDoB">Date of Birth</label>
                    <input type="text" class="form-control" id="idDoB" name="dateOfBirth" required>
                </div>

                <div class="form-group">
                    <label for="idActive">Active Level: </label>
                    <select class="form-control" name="activeLevel" id="idActive">
                        <option value="Sedentary" selected>Sedentary</option>
                        <option value="Moderate">Moderate</option>
                        <option value="Active">Active</option>
                    </select>
                </div>


                <input type="submit" class="btn btn-primary" value="Sign Up"/>
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