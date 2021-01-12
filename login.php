<!DOCTYPE html>
<!--

MUHD HAZIQ BIN ABDUL HALIM
19047241

TEST PATIENT
Username - testing
Password - Testing123

-->

<html>
    <head>
        <title>Yishun Hosp. - Login</title>
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

                $("#defaultForm").validate({
                    rules: {
                        username: {
                            required: true
                        },
                        password: {
                            required: true
                        }
                    },
                    messages: {
                        username: {
                            required: "Please enter a username"
                        },
                        password: {
                            required: "Please enter a password"
                        }

                    },
                    submitHandler: function () {
                        return true;
                    }
                });

                $("#defaultForm").submit(function () {
                    //return false;
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
            <li class="breadcrumb-item active">Login</li>
        </ol>
        <div class="container">
            <h2>Login</h2>
            <form id="defaultForm" method="post" action="doLogin.php">
                <div class="form-group">
                    <label for="idUsername">Username</label>
                    <input type="text" class="form-control" id="idUsername" name="username">
                </div>

                <div class="form-group">
                    <label for="idPassword">Password</label>
                    <input type="password" class="form-control" id="idPassword" name="password">
                </div>

                <input type="submit" class="btn btn-primary" value="Login"/>
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