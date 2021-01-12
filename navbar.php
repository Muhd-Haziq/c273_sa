<!--

MUHD HAZIQ BIN ABDUL HALIM
19047241

-->
<style>
    .dropdown:hover>.dropdown-menu {
        display: block;
    }

</style>

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php"><strong>Yishun Community Hospital <i class="fa fa-hospital-alt" aria-hidden="true"></i></strong></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">   
            <?php if (isset($_SESSION['patient_id'])) { ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Exercises
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="exerciseEntry.php">Enter New Exercise</a>

                        <div class="dropdown-divider"></div>

                        <a class="dropdown-item" href="myExercise.php">My Exercises</a>
                    </div>
                </li>

                <li class="nav-item"> 
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
            <?php } else { ?>
                <li class="nav-item">
                    <a class="nav-link" href="signUp.php">Sign Up</a>     
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                </li>
            <?php } ?>
        </ul>

    </div>
</nav>

<!--

MUHD HAZIQ BIN ABDUL HALIM
19047241

-->