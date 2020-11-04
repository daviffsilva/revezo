<?php
if(!isset($_POST['email'])){
    exit();
}

require('../database/DatabaseUtils.php');

$db = new DatabaseUtils();

$db->select('SELECT * FROM usuario WHERE email = ? and senha = ?')