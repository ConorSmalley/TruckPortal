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
    <?php include 'navbar.php'; ?>
    <div class="containter-fluid">
        <div class="col-md-4" id="jobList">
            <h1>Unassigned Job's</h1>
            <?php

            // Create the query - here we grab everything from the table
            $stmt = $db->query('SELECT * FROM tbl_Job WHERE tbl_Job.JobAssignedTo = ""');

            while($rows = $stmt->fetch()){
                jobCell($rows);
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
