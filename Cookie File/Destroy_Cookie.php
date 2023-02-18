<?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") 
    { 

        setcookie("scolor", "", time() - 0);
        header("location:Cookie.php");
        
    }
?>