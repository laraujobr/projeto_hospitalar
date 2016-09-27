<?php

if(!isset($_SESSION['ACTIVE'])) {
    
    session_start();   
    $_SESSION['ACTIVE'] = true;
    
}

?>
