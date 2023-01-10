<?php
define('PUN_ROOT', dirname(__FILE__).'/');
require PUN_ROOT.'include/common.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $userId = $_POST['id'];
    $url = $_POST['url'];
    if ($userId > 1){
        $sql = "INSERT INTO page_visits (user_id,url) VALUES ('$userId','$url')";
        $db->query($sql);
    }
}