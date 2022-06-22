<?php
     if (isset($_POST['login']))
     {
        $email    = $_POST['email'];
        $password = $_POST['password'];

        $isValid  = empty($email) ||
                    empty($password);

        if ($isValid)
        {
            $error = "*";
        } 
        else
        {
            $sel = mysqli_query($connection, "select email, password from regd where email = '$email' and password = '$password'");
            $arr = mysqli_fetch_assoc($sel);
            if($email === $arr['email'] && $password === $arr['password'])
            {
                  header("location:menu-list.php");
            }
            else
            {
                $error = "*";
            }
        }
   }
   else
   {
     $error = "*";
   }
   
?>