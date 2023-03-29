<?php

session_start(); 
$_SESSION;
?>

<!DOCTYPE html>
<html lang="">
    <head>
        <title>singup</title>

    </head>
    <body>
        <style type="text/css">
            body{
                background-image: url(images.jpg);
            }
#text{
Height:25px;
Border-radius: 5px;
Padding:4px;
}
#button{
Padding:10px;
Width:100px;
Color:pink;
Background-color:green;
}
#box{
    background-color: linen;
    margin:auto;
    width:400px;
    padding:20px;
}


        </style>
        <div id="box">
            <h1>Signup</h1>
        <form action="submit-form.php" method="POST">
  <label for="mac-address">MAC Address:</label>
  <input type="text" id="mac-address" name="mac_address"><br><br>

  <label for="ip-address">IP Address:</label><br><br>
  <input type="text" id="ip-address" name="ip_address"><br><br>

  <label for="name">Name:</label><br><br>
  <input type="text" id="name" name="name"><br><br>

  <label for="id">ID:</label><br><br>
  <input type="text" id="id" name="id"><br><br>

  <input type="submit" value="Submit"><br><br>
  <a href="login.php"> click to login</a><br></br>
        </form>
            
             
        

        </div>
    </body>
</html>