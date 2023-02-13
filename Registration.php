<?php
   function rawData($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }

    if ($_SERVER['REQUEST_METHOD'] === "POST") {

        $flag = true;

        $fName = rawData($_POST['fname']);
        $lName = rawData($_POST['lname']);
        $faName = rawData($_POST['faname']);
        $mName = rawData($_POST['mname']);
        $gender = rawData($_POST['gender']);
        $dob = rawData($_POST['dob']);
        $bog = rawData($_POST['bog']);
        
        $email = rawData($_POST['email']);
        $phone = rawData($_POST['phone']);
        $web = rawData($_POST['web']);
        $add = rawData($_POST['add']);

        $userName = rawData($_POST['userName']);
        $password = rawData($_POST['password']);

        if (empty($fName)) {
            echo "<p align='center'>Please fill up the First Name .</p>";
            $flag = false;
        }
        if (empty($lName)) {
            echo "<p align='center'>Please fill up the Last Name.</p>";
            $flag = false;
        }
        if (empty($faName)) {
            echo "<p align='center'>Please fill up the Father Name.</p>";
            $flag = false;
        }
        if (empty($mName)) {
            echo "<p align='center'>Please fill up the Mother Name.</p>";
            $flag = false;
        }
        if (empty($dob)) {
            echo "<p align='center'>Please fill up the Date of Birth.</p>";
            $flag = false;
        }
        if (empty($gender)) {
            echo "<p align='center'>Please fill up the Gender Information.</p>";
            $flag = false;
        }
    

        if (empty($email)) {
            echo "<p align='center'>Please fill up the email properly.</p>";
            $flag = false;
        }
                
        if (empty($phone)) {
            echo "<p align='center'>Please fill up the Mobile Information.</p>";
            $flag = false;
        }

        if (empty($add)) {
            echo "<p align='center'>Please fill up the Address Information.</p>";
            $flag = false;
        }

        if (empty($userName)) {
            echo "<p align='center'>Please select a UserName .</p>";
            $flag = false;
        }
        if (empty($password)) {
            echo "<p align='center'>Please fill up the password properly.</p>";
            $flag = false;	
        }
        

        if($flag===true){
         echo '
         <div align="center">

         <table>
         <th>
             <td>

             </td>
             
             <td>

                 <fieldset>
                     <legend>General Information :</legend>
                     <table align="center">
                         <th>
                             <td align="center">
                                 <label for="fname">First Name :  </label><br><br>
                                                 
                                 <label for="lname">Last Name :  </label><br><br>
                                                 
                                 <label for="faname">Fathers Name :  </label><br><br>
                                                 
                                 <label for="mname">Mothers Name :  </label><br><br>
                                                  
                 
                                 <label for="gender">Gender : </label><br><br>
                                                  
                 
                                 <label for="dob">Date of Birth :  </label><br><br>
                                                 
                 
                                 <label for="bog">Blood Group :  </label>
                                                 
                             </td>
                             <td>

                                 '.$fName.'<br><br>
                                 '.$lName.'<br><br>
                                 '.$faName.'<br><br>
                                 '.$mName.'<br><br>
                                 '.$gender.'<br><br>
                                 '.$dob.'<br><br>
                                 '.$bog.'

                                             
                             </td>
                         </th>
                     </table>
                 </fieldset>
             
                 <fieldset>
                     <legend>Contact Information :</legend>
                     <table align="center">
                         <th>
                             <td>
                                 <label for="email"> Email :</label>
                                 '.$email.'<br><br>
                                 <label for="phone"> Phone/Mobile :</label>
                                 '.$phone.'<br><br>
                                 <label for="web"> Website :</label>
                                 '.$web.'<br><br>
                                 <label for="add"> Address :</label>
                                 '.$add.'
             
                             </td>
                         </th>
                     </table>
                 </fieldset>
             
                 <fieldset>
                     <legend>Account Information</legend>
                     <table align="center">
                         <th>
                             <td align="center">
                                 <label for ="userName">UserName :</label><br><br>
                                 <label for ="password">Password :</label>
                             </td>
                             <td>
                                 '.$userName.'<br><br>
                                 '.$password.'
                             </td>
                         </th>
                     </table>
                 </fieldset>
         
                 <table align="center">
                     <th>
                         <td>
         
                             <button type = "submit">Registration</button>
         
                         </td>
                     </th>
                 </table>

             </td>
             <td>

             </td>
         </th>
     </table>

     

     <p align = "center">Alredy have an account ? Login <a href="Login.html">here</a></p>
         </div>
         ';

        } 

    }
  

?>