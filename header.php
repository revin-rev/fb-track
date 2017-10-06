<?php 
ob_start();
session_start();
$db = new Mysqli("localhost", "fbpowereditor", "india@123", "fbpowereditor");
if($db->connect_errno){
  die('Connect Error: ' . $db->connect_errno);
} 
?>
<html lang="en">
<head>
  <title>FBPower Editor</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="js/custom.js"></script>
  <link rel="stylesheet" href="css/custom.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <script type="text/javascript" src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
</head>
<body>