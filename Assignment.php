<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Assignement-excersize</title>
  <style>
    #container{
      font-family: Verdana, Arial, sans-serif;
    }
    img{
      display: block;
    }
    input{
      margin-top: 5px;
      margin-bottom: 5px;
    }
    label{
      font-weight: bold;

    }
  </style>
</head>
<body>
<h2>Log In</h2>
<hr>
<div id="container">
  <form name="form1" action= "<?php echo$_SERVER["PHP_SELF"]?>">
  <img src="" alt="">
  <label for="username">Username</label><br>
  <input type="text" placeholder="Enter username here" id="username" name="username"><br>
    <label for="password">Password</label><br>
    <input type="password" placeholder="Enter password here" id="password"><br>
      <input type="submit" name="Submit" value="Inloggen">
  </form>
</div>

</body>
</html>