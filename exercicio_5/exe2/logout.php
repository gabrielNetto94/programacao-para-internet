<?php

    session_start();
    echo "<h2>Até logo ".$_COOKIE['username']."!<h2>";
    session_destroy();
    header("Refresh:2; url=auth.html");
?>