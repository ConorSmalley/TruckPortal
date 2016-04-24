<?php
require 'db.php';
include 'jobCell.php';
session_start();
if(isset($_SESSION["Username"])){
}else{
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
    <link rel="stylesheet" href="setup.css"
    <title></title>
</head>
<body>
    <nav class="navbar navbar-default navbar-fixed-top navbar-inverse">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- <a class="navbar-brand" href="#">Brand</a> -->
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <!-- <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li> -->
                    <!-- <li><a href="#">Link</a></li> -->
                    <!-- <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">One more separated link</a></li>
                </ul>
            </li> -->
        </ul>
        <!-- <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
        <input type="text" class="form-control" placeholder="Search">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
</form> -->
<ul class="nav navbar-nav navbar-right">
    <li><form class="navbar-form navbar-left" method="POST" action="login.php">
        <button type="submit" class="btn btn-default" name="logoutButton">Logout</button>
    </form></li>
    <!-- <li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
    <ul class="dropdown-menu">
    <li><a href="#">Action</a></li>
    <li><a href="#">Another action</a></li>
    <li><a href="#">Something else here</a></li>
    <li role="separator" class="divider"></li>
    <li><a href="#">Separated link</a></li>
</ul>
</li> -->
</ul>
</div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav>
<div class="containter-fluid">
    <div class="col-md-4" id="jobList">
        <h1>Unassigned Job's</h1>
        <?php

        // Create the query - here we grab everything from the table
        $stmt = $db->query('SELECT * FROM tbl_Job WHERE tbl_Job.JobAssignedTo = ""');

        while($rows = $stmt->fetch()){
            jobCell($rows);
            // echo '<a href=""><div class="container-fluid well">';
            // echo '<div class="col-md-8">';
            // echo $rows['JobName'];
            // echo '</div>';
            //
            // echo '<div class="col-md-4">';
            // // if ($rows['JobStatus'] == 0) {
            // // }else{
            //     echo $rows['JobStatus'];
            // // }
            // echo '</div>';
            //
            // echo '<div class="col-md-11 col-md-offset-1">';
            // echo $rows['JobDescription'];
            // echo '</div>';
            // echo '</div></a>';
            //
            // // This is for the empty line after the job
            // echo '<a href=""><div class="row-fluid">';
            // echo '<div class="col-md-4">';
            // echo '&nbsp';
            // echo '</div>';
            // echo '<div class="col-md-8">';
            // echo '&nbsp';
            // echo '</div>';
            // echo '</div></a>';
        };
        ?>
    </div>
    <div class="col-md-4" id="jobList">
        <h1>My Job's</h1>
        <?php

        // Create the query - here we grab everything from the table
        $stmt = $db->query('SELECT * FROM tbl_Job INNER JOIN tbl_User ON tbl_Job.JobAssignedTo = tbl_User.UserId WHERE tbl_User.UserId = 1');

        while($rows = $stmt->fetch()){
            jobCell($rows);
            // echo '<a href=""><div class="container-fluid well">';
            // echo '<div class="col-md-8">';
            // echo $rows['JobName'];
            // echo '</div>';
            //
            // echo '<div class="col-md-4">';
            // // if ($rows['JobStatus'] == 0) {
            // // }else{
            //     echo $rows['JobStatus'];
            // // }
            // echo '</div>';
            //
            // echo '<div class="col-md-11 col-md-offset-1">';
            // echo $rows['JobDescription'];
            // echo '</div>';
            // echo '</div></a>';
            //
            //
            //
            //
            // // This is for the empty line after the job
            // echo '<a href=""><div class="row-fluid">';
            // echo '<div class="col-md-4">';
            // echo '&nbsp';
            // echo '</div>';
            // echo '<div class="col-md-8">';
            // echo '&nbsp';
            // echo '</div>';
            // echo '</div></a>';
        };
        ?>
    </div>
</div>
<!-- Latest compiled and minified JavaScript -->
<script src="jquery-2.2.3.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://cdn.firebase.com/js/client/2.4.2/firebase.js"></script>
</body>
</html>