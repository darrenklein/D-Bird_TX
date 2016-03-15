<?php
    session_start();
    session_destroy();
    
    echo "Successfully logged out.</br><a href='log_in.php'>Click here to log in again</a>"
?>