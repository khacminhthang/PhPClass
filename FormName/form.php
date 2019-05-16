<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Form</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <h1>Form HTML</h1>
    <br>
    <form>
    Name:<br>
  <input type="text" name="name">
  <br>
    Age: <br>
  <input type="number" name="age">
  <br>
  Message : <br>
  <input type="text" name="message">
  <br>
  <input type="submit" value="Submit">
</form>
<?php
    echo "Xin chao :  $_REQUEST[name]";
    echo "<br>";
    echo "Age :  $_REQUEST[age]";
    echo "<br>";
    echo "Message :  $_REQUEST[message]";
?>
    
</body>
</html>