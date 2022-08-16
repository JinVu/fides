<?php
$username = 'dbu89414';
$password = 'Illertissen1!';
$host = 'mysql:host=rdbms.strato.de;dbname=dbs8260756';

try {
    $db = new PDO($host,$username,$password);
    $db->setAttribute(PDO::ATTR_ORACLE_NULLS, PDO::NULL_NATURAL);
}
catch (PDOException $e)
{
    echo $e->getMEssage();
    echo "<script>alert('Verbindung zur Datenbank fehlgeschlagen')</script>";
    die();
}