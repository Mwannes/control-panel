<!DOCTYPE html >
<html>
<head>
<title>control</title>
<link rel="stylesheet" href="btss.css">
</head>
<body>
<?php
 $dr= mysqli_connect("localhost","root","","rop_arm");
      if (mysqli_connect_errno()){
printf("Connect failed: %s\n", mysqli_connect_error()); exit();}
      else {
           if (isset($_POST['for'])){
                        $for=$_POST['for'];
$dir = "UPDATE directions SET  direction = '$for'";
$dirc = mysqli_query($dr,$dir);  
 header("Refresh: 0.5;url=direction.php");}
mysqli_close($dr);}?>
<?php
 $dr= mysqli_connect("localhost","root","","rop_arm");
      if (mysqli_connect_errno()){
printf("Connect failed: %s\n", mysqli_connect_error()); exit();}
      else {
           if (isset($_POST['l'])){
                        $l=$_POST['l'];
$dir = "UPDATE directions SET  direction = '$l'";
$dirc = mysqli_query($dr,$dir);  
         header("Refresh: 0.5;url=direction.php");}
mysqli_close($dr);}?>
<?php
 $dr= mysqli_connect("localhost","root","","rop_arm");
      if (mysqli_connect_errno()){
printf("Connect failed: %s\n", mysqli_connect_error()); exit();}
      else {
           if (isset($_POST['s'])){
                        $s=$_POST['s'];
$dir = "UPDATE directions SET  direction = '$s'";
$dirc = mysqli_query($dr,$dir);  
         header("Refresh: 0.5;url=direction.php");}
mysqli_close($dr);}?>
<?php
 $dr= mysqli_connect("localhost","root","","rop_arm");
      if (mysqli_connect_errno()){
printf("Connect failed: %s\n", mysqli_connect_error()); exit();}
      else {
           if (isset($_POST['r'])){
                        $r=$_POST['r'];
$dir = "UPDATE directions SET  direction = '$r'";
$dirc = mysqli_query($dr,$dir);  
      header("Refresh: 0.5;url=direction.php");}
mysqli_close($dr);}?>
<?php
 $dr= mysqli_connect("localhost","root","","rop_arm");
      if (mysqli_connect_errno()){
printf("Connect failed: %s\n", mysqli_connect_error()); exit();}
      else {
           if (isset($_POST['b'])){
                        $b=$_POST['b'];
$dir = "UPDATE directions SET  direction = '$b'";
$dirc = mysqli_query($dr,$dir);  
         header("Refresh: 0.5;url=direction.php");}
mysqli_close($dr);}?>
<div class="container">
<form action= "control.php" method="POST">
  <input type="submit" class="bt1" value="Forward" name="for" id="for"><br><br>
  <input type="submit" class="bt2" value="Left" name="l" id="l">
  <input type="submit" class="bt3" value="Stop" name="s" id="s">
  <input type="submit" class="bt4" value="Right" name="r" id="r"><br><br>
  <input type="submit" class="bt5" value="Backward" name="b" id="b">
</form>
</div>
</body>
</html>