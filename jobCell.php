<?php
function jobCell($rows,$well){
    echo '<a href="job.php?JobId=' .$rows['JobId'] . '"><div class="container-fluid well">';
    echo '<div class="col-md-8">';
    echo $rows['JobName'];
    echo '</div>';

    echo '<div class="col-md-4">';
        echo $rows['JobStatus'];
    echo '</div>';

    echo '<div class="col-md-11 col-md-offset-1">';
    echo $rows['JobDescription'];
    echo '</div>';
    echo '</div></a>';

    // This is for the empty line after the job
    echo '<a href=""><div class="row-fluid">';
    echo '<div class="col-md-4">';
    echo '&nbsp';
    echo '</div>';
    echo '<div class="col-md-8">';
    echo '&nbsp';
    echo '</div>';
    echo '</div></a>';

    // echo '<a href=""><div class="container-fluid well">';
    // echo '<div class="col-md-8">';
    // echo $rows['JobName'];
    // echo '</div>';
    //
    // echo '<div class="col-md-4">';
    //     echo $rows['JobStatus'];
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
}
?>
