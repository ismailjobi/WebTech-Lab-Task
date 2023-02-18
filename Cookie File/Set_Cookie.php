<?php

    if ($_SERVER["REQUEST_METHOD"] === "POST") 
    { 
        
        date_default_timezone_set('Asia/Dhaka'); 

        $scolor = $_POST["scolor"]; 
        $dt = $_POST["dt"];

        

        $date = new DateTime();
        $currenttime= $date->getTimestamp();
        $endtime = strtotime($dt); 
        $expireon =  $endtime - $currenttime; 

        if($expireon > 0)
        {
            setcookie("scolor", $scolor, time() + $expireon);

        }       
        

        header("location:Cookie.php");
    }
?>