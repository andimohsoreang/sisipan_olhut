<?php

    session_start();
    session_destroy();
    session_unset();
    $_SESSION[]=NULL;    
?>
    <script>

        document.location.href='login.php';

    </script>

    <?php
?>