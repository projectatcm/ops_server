<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title><?=isset($title) ? $title : "Admin"?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="css/lines.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<link href="css/custom.css" rel="stylesheet">
<link href="css/custom_style.css" rel='stylesheet' type='text/css' />

<!-- Metis Menu Plugin JavaScript -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<script src="js/custom_script.js"></script>
<!-- Graph JavaScript -->
<script src="js/d3.v3.js"></script>
<script src="js/rickshaw.js"></script>
</head>
<body>
<div class="login-body">
	<div class="jumbotron">
    <div class="container">
      <span class="glyphicon glyphicon-list-alt"></span>
      <h2>Calendar</h2>
      <div class="box">
       <form action="actions/login_action.php" method="post">
         <input type="text" name="username" placeholder="username">
         <input type="password" name="password" placeholder="password">
         <button type="submit" class="btn btn-default full-width"><span class="glyphicon glyphicon-ok"></span></button>
       </form>
     </div>
   </div>
 </div>
</div>

<?php include 'includes/footer.php';?>