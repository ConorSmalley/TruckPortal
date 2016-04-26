<?php
require 'db.php';
include 'jobCell.php';
session_start();
if(isset($_SESSION["Username"])){
}else{
    header("Location: login.php");
}

if(isset($_POST['addJob']))
{
    echo 'Hello World';
    // echo $_POST['jobName'];
    $stmt = $db->prepare("INSERT INTO tbl_Job(JobName, JobDescription) VALUES (:name, :description)");
    $stmt->bindParam(':name', $_POST['jobName']);
    $stmt->bindParam(':description', $_POST['jobDescription']);
    if ($stmt->execute()) {
        echo '1 row has been inserted';
    }
    // $statement = $db->prepare("INSERT INTO 'tbl_Job' ('JobName', 'JobDescription') VALUES (". $_POST['jobName'] . ",". $_POST['jobDescription'].") ");

    // $statement->execute();
}/*
INSERT INTO `TruckPortal`.`tbl_Job` (`JobId`, `JobName`, `JobDescription`, `JobStatus`, `JobAssignedTo`) VALUES (NULL, 'test', 'test', NULL, NULL)
*/
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
        <div class="col-md-6 col-md-offset-3 well" >
            <form method="POST">
                <div class="form-group">
                    <label for="jobName">Job Name</label>
                    <input type="text" class="form-control" id="jobName" name="jobName"placeholder="Job Name">
                </div>
                <div class="form-group">
                    <label for="Job Description">Job Description</label>
                    <input type="text" class="form-control" id="jobDescription" name="jobDescription"placeholder="Job Description">
                </div>
                <button type="submit" class="btn btn-default" name="addJob">Submit</button>
            </form>


        </div>

    </div>
    <!-- Latest compiled and minified JavaScript -->
    <script src="jquery-2.2.3.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdn.firebase.com/js/client/2.4.2/firebase.js"></script>
</body>
</html>
