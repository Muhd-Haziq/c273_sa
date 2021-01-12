<!--

MUHD HAZIQ BIN ABDUL HALIM
19047241

-->

<?php
session_start();
include("dbFunctions.php");
$message = "";

$patient_id = $_SESSION['patient_id'];

$queryAll = "SELECT * FROM exercises 
          WHERE patient_id = '$patient_id'
          ORDER BY id";

// execute query
$resultAll = mysqli_query($link, $queryAll) or
        die("Error in query: $queryAll. " . mysqli_error($link));
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Yishun Hosp. - Exercise Entry</title>
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
            <li class="breadcrumb-item active">My Exercises</li>
        </ol>

        <div class="container">

            <h2>My Exercises</h2>
            <table id="exercseTable" class="table table-hover table-bordered">
                <tr class="header">
                    <th>Entry</th>
                    <th>Exercise</th>
                    <th>Duration (minutes)</th>
                </tr>
                <?php
                $counter = 1;
                while ($row = mysqli_fetch_assoc($resultAll)) {

                    $id = $row['id'];
                    $exercise = $row['exercise'];
                    $duration = $row['duration'];
                    ?>
                    <tr style="
                    <?php
                    if (($exercise == 'Walk' && $duration >= 30) || ($exercise == 'Run' && $duration >= 10) || ($exercise == 'Cycle' && $duration >= 20)) {
                        echo "background: yellow;";
                    } else {
                        echo "background: none;";
                    }
                    ?>
                        ">
                        <td>
                            <?php echo $counter; ?>
                        </td>
                        <td>
                            <?php echo $exercise; ?>
                        </td>
                        <td>
                            <?php echo $duration; ?>
                        </td>
                    </tr>

                    <?php
                    $counter += 1;
                } // end while loop
                ?>    
            </table>
        </div>
    </body>
</html>

<!--

MUHD HAZIQ BIN ABDUL HALIM
19047241

-->