<?php


?>


<!DOCTYPE html>
<html lang="">
    <head>
        <title>login</title>
        <script>
            function trap() {
                alert("Access Denied");
            }
        </script>
        <style>
            form {
  background-color: #fff;
  transition: background-color 5s ease-in-out;
}
form:hover {
  background-color: #f2f2f2;
}

            body{
                background-image: url(art.jpg);
            }
            
        </style>

    </head>
    <body>
        <style type="text/css">
#text{
Height:25px;
Border-radius: 5px;
Padding:4px;
width: auto;
}
#button{
Padding:10px;
Width:100px;
Color:pink;
Background-color:green;
border-radius: 50px;
}
#button:hover{
    background-color: brown;
    font-weight: bold;
    transition:2s;
}
#box{
    background-color:linen;
    margin:auto;
    width:300px;
    padding:20px;
}


        </style>
        <div id="box">
            <h1>Login</h1>
<form action="submit-form.php" method="POST">
  <label for="mac-address">MAC Address:</label><br><br>
  <input type="text" id="mac-address" name="mac_address"><br><br>

  <label for="ip-address">IP Address:</label><br><br>
  <input type="text" id="ip-address" name="ip_address"><br>

  <label for="name">Name:</label><br><br>
  <input type="text" id="name" name="name"><br><br>

  <label for="id">ID:</label><br><br>
  <input type="text" id="id" name="id"><br><br>

  <input type="submit" value="Submit"><br><br>
  <a href="signup.php"> click to signup</a><br></br>
</form>
        

        </div>
    </body>
</html>