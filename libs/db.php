<?php
#Server configuration
define("SERVER","localhost");
define("USERNAME","root");
define("PASSWORD","@kuzco555");
define("DB","aiDB");

#Create connection
$connection = mysqli_connect(SERVER, USERNAME, PASSWORD, DB);

#Check connection
if(!$connection){
    die("Connection failed: ". $mysqli_connect_error());
}

echo "Connected to server ";
