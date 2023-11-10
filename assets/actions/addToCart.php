<?php

require_once '../database/connection.php';

global $connect;

if (isset($_SESSION['USER'])) {
    
}
header('Location: ../../?page=main');
