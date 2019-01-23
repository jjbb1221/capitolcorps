<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<?php
// define variables and set to empty values
$uname = $psw = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $uname = test_input($_POST["AccessID"]);
  $psw = test_input($_POST["Password"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<?php
if $uname = ("daytonhudson","gabenunez","aidansankey") {
<a href="url">https://jjbb1221.github.io/capitolcorps/home.html</a>
?>

</body>
</html>
