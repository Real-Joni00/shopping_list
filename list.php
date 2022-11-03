<?php
require_once 'things/functions.php';
require_once 'things/headers.php';

try{
    $db = openDB();
    $sql = 'select * from item';
    $query = $db->query($sql);
    $items = $query->fetchAll(PDO::FETCH_ASSOC);
    $list = json_encode($items,JSON_PRETTY_PRINT);
    header('HTTP/1.1 200 OK');
    print $list;
} catch (PDOException $exc) {
    returnError($exc);
}