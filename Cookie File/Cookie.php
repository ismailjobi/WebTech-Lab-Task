<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie</title>
</head>
<body
<?php
    if (key_exists("scolor", $_COOKIE))
    { 
        echo 'bgcolor=' . $_COOKIE['scolor'];
    } 
?>>

    <br>

    <h2>Cookie Example</h2> 
    <h5>Time Zone : Asia/Dhaka</h5>
    <br>

    <hr>
    <br>
    <h2>Set Cookie</h2>
    <br>

    <hr>

    <form action="Set_Cookie.php" novalidate method="post">

        <label for="scolor"> Select a Color :</label>
        <input type="color" name="scolor" id="scolor"><br><br>

        <label for="dt">Expire on :</label>
        <input type="datetime-local" name="dt" id="dt"><br><br>

        <button type="submit">Set Cookie</button>



    </form>

    <hr>
    <br>
    <h2>Destory Cookie</h2>
    <br>

    <hr>
<form action="Destroy_Cookie.php" novalidate method="post">
    <button type="submit">Destory Cookie</button>
</form>




    
</body>
</html>