<!DOCTYPYE html>
<html>
<head>
<title>Jason Sayre</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link href='http://fonts.googleapis.com/css?family=Merriweather+Sans:400,700,800,300' rel='stylesheet' type='text/css'>
</head>
<body>

<div class="main">
  <?php include 'include/menu.php'; ?>

<?php
$l = $_GET["l"];
if ($l != '')
    include 'include/'.$l.'.php';
else
    include 'include/main.php';
?>



</div>
</body>
</html>