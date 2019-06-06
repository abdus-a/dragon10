<?php
ob_start();
session_start();
require_once 'dbconnect.php';

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}
// select logged in users detail
$res = $conn->query("SELECT * FROM users WHERE id=" . $_SESSION['user']);
$userRow = mysqli_fetch_array($res, MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Hello,<?php echo $userRow['email']; ?></title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css"/>
    <link rel="stylesheet" href="assets/css/index.css" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="asdf.css">
</head>
<body>

<!-- Navigation Bar-->
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Website Name</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">First Link</a></li>
                <li><a href="#">Second Link</a></li>
                <li><a href="#">Third Link</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">
                        <span
                            class="glyphicon glyphicon-user"></span>&nbsp;Logged
                        in: <?php echo $userRow['email']; ?>
                        &nbsp;<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="logout.php?logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div id="ABDIS" styel="">
  <h1><u>Our Leader</u></h1>
  <img id="IMAGE" src="abdus.JPG" width="180" title="AUS10" align="left">   
  <h2 id="aus10"><u>AUS 10 </u></h2>
  <p1 id="aboutAbdus">
    Aus10 is the leader of the group dragaon 10.<br>
    He made this group in 2014 on july 18.
  </p1>
</div>
<div id="logo" styel="padding: 50px; display: inline-block;">
  <h1><u><b>Our Logo</b></u></h1>
  <img src="logo.jpeg" id="logoImg">
  <p id="ourLogo">
    Our logo itself represent the name<br>
    of out group. The logo repersents a<br>
    dragon ready to fight. That's what we<br>
    are team ready to fight
  </p>
</div>

<div id="programing_sec" style="padding: 50px; display: inline-block;">
  <h1><u><b>Our programs</b></u></h1>
  <a href=""><img src="programing.jpg" id="programingImg"></a>
  <p id="ourProgram">
    We have organized a program for people
    who want to learn programing. We have
    many cources like for python,java,etc.
    We even provide a web devlopmen program
  </p>


  
</div>

</div>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

</body>
</html>

