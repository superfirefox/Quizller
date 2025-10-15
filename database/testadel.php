<?php
/*************************************************************************
* This is to test PHP MySQL Connection
*
* www.TestingDocs.com
*************************************************************************/
$MySQLDb = new mysqli("localhost", "root", "", "secondo");
if($MySQLDb->connect_errno)
{
 echo $MySQLDb>connect_error;
}
else
{
 echo "MySQL connection succeeded.";
 echo "la connessione al server funziona è quel programma di merda che fa schifo";
}
?>