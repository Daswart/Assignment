<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Assignement-excersize</title>
  <style>

    img{
      display: block;
    }
    input{
      margin-top: 5px;
      margin-bottom: 5px;
    }

  </style>
</head>
<body>
<?php
if (!empty($_POST)){
    echo "<h2>U bent succesvol ingelogd<h2><hr>";
    echo "Naam: ".$_POST['username']."<br>" ;
    echo "Wachtwoord: ".$_POST['password'] . "<br>";
    echo "<a href=' ".$_SERVER["PHP_SELF"]."'>Opnieuw Inloggen</a>";

}
else{


?>


<h2>Log In</h2>
<hr>
<div id="container">
  <form name="form1" method="post" action= "<?php echo$_SERVER["PHP_SELF"]?>" >
  <img src="" alt="">
  <label for="username">Username</label><br>
  <input type="text" placeholder="Enter username here" id="username" name="username"><br>
      <label for="password">Password</label><br>
    <input type="password" placeholder="Enter password here" id="password" name="password"><br>
      <input type="submit" value="Inloggen">
  </form>
</div>
<?php
} ?>

</body>

</html>