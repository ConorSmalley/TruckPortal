<?php
echo '    <nav class="navbar navbar-default navbar-fixed-top navbar-inverse">';
echo '<div class="container-fluid">';
echo '<!-- Brand and toggle get grouped for better mobile display -->';
echo '<div class="navbar-header">';
echo '<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"><span class="sr-only">Toggle navigation</span>';
echo '<span class="icon-bar"></span>';
echo '<span class="icon-bar"></span>';
echo '<span class="icon-bar"></span>';
echo '</button>';
echo '<a class="navbar-brand" href="../TruckPortal/">Brand</a>';
echo '</div>';
echo '';
echo '<!-- Collect the nav links, forms, and other content for toggling -->';
echo '<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">';
echo '<ul class="nav navbar-nav">';

echo '<li><form class="navbar-form navbar-left" method="POST" action="index.php">';
if ($_SERVER['REQUEST_URI'] == "/TruckPortal/index.php" || $_SERVER['REQUEST_URI'] == "/TruckPortal/"){
    echo '<button type="submit" class="btn btn-primary" disabled="disabled">Home</button>';
}else{
    echo '<button type="submit" class="btn btn-primary">Home</button>';
}
echo '</form></li>';

echo '<li><form class="navbar-form navbar-left" method="POST" action="addJob.php">';
if (strpos($_SERVER['REQUEST_URI'], "addJob.php") !== false){
    echo '<button type="submit" class="btn btn-primary" disabled="disabled">Add Job</button>';
}else{
    echo '<button type="submit" class="btn btn-primary">Add Job</button>';
}
echo '</form></li>';

echo '<li><form class="navbar-form navbar-left" method="POST" action="allJobs.php">';
if (strpos($_SERVER['REQUEST_URI'], "allJobs.php") !== false){
    echo '<button type="submit" class="btn btn-primary" disabled="disabled">List Every Job</button>';
}else{
    echo '<button type="submit" class="btn btn-primary">List Every Job</button>';
}
echo '</form></li>';
echo '<!-- <li class="dropdown">';
echo '<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a><ul class="dropdown-menu">';
echo '<li><a href="#">Action</a></li>';
echo '<li><a href="#">Another action</a></li>';
echo '<li><a href="#">Something else here</a></li>';
echo '<li role="separator" class="divider"></li>';
echo '<li><a href="#">Separated link</a></li>';
echo '<li role="separator" class="divider"></li>';
echo '<li><a href="#">One more separated link</a></li>';
echo '</ul>';
echo '</li> -->';
echo '</ul>';
echo '<!-- <form class="navbar-form navbar-left" role="search">';
echo '<div class="form-group">';
echo '<input type="text" class="form-control" placeholder="Search">';
echo '</div>';
echo '<button type="submit" class="btn btn-default">Submit</button>';
echo '</form> -->';
echo '<ul class="nav navbar-nav navbar-right">';
echo '<li><form class="navbar-form navbar-left" method="POST" action="login.php">';
echo '<button type="submit" class="btn btn-danger" name="logoutButton">Logout</button>';
echo '</form></li>';
echo '<!-- <li class="dropdown">';
echo '<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a><ul class="dropdown-menu">';
echo '<li><a href="#">Action</a></li>';
echo '<li><a href="#">Another action</a></li>';
echo '<li><a href="#">Something else here</a></li>';
echo '<li role="separator" class="divider"></li>';
echo '<li><a href="#">Separated link</a></li>';
echo '</ul>';
echo '</li> -->';
echo '</ul>';
echo '</div><!-- /.navbar-collapse -->';
echo '</div><!-- /.container-fluid -->';
echo '</nav>';
// echo $_SERVER['REQUEST_URI'];
?>
