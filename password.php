<?php

session_start();
if(isset($_SESSION['page'])) {
    echo $_SESSION['page'];
}

?>