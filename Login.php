<?php

function rawData($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }
if ($_SERVER['REQUEST_METHOD'] === "POST") {

    $flag = true;

    

    $userName = rawData($_POST['userName']);
    $password = rawData($_POST['password']);


    if (empty($userName)) {
        echo "<P align='center'>Please write a UserName .</p>";
        
        $flag = false;
    }
    if (empty($password)) {
        echo "<p align='center'>Please write the valid password .</p>";
        $flag = false;
    }
    
     if ($flag===true){

        echo "<p align ='center'> Loggin successfully.</p>";
        echo '<p align = "center">Do not have an account ? Registration <a href="Registration.html">here</a></p>';

     }


}    

?>
