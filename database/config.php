<?php
//database configurations
define("DB_HOST","localhost"); 
define("DB_UNAME","root");
//define("DB_PASS","");
define("DB_DNAME","secondo");
$conn=mysqli_connect(DB_HOST,DB_UNAME,DB_PASS,DB_DNAME);


echo "<h1 style=\"background-color:DodgerBlue;\">".DB_HOST."</h1>";

?>



/*
define("DB_HOST","localhost"); 
define("DB_UNAME","YOUR_DATABASE_USER_NAME");
define("DB_PASS","YOUR_DATABASE_PASSWORD");
define("DB_DNAME","YOUR_DATABASE_NAME");

*/