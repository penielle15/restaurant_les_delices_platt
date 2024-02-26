<?php
try {
    $db = new PDO("mysql:host=localhost;dbname=les_delices;","root","");
} catch (Exception $th) {
    //throw $th;
    die($th);
}
