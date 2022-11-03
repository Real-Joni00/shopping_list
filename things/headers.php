<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Accept,Content-Type', 'AccessControl-Allow-Header');
header('Access-Control-Allow-Credentials:true');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header('Content-Type: Application/json');

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    return 0;
}