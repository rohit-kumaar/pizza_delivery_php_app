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
            if (is_dir("regdInfo/$email"))
            {
                  $fileOpen = fopen("regdInfo/$email/info.txt", "r");
                  session_start(); // session start if you get first name
                  $_SESSION['firstName'] = fgets($fileOpen); // in info folder 1st line username
                  fgets($fileOpen);
                  fgets($fileOpen);
                  $getInfoPassword =  trim(fgets($fileOpen));
                    if ($password == $getInfoPassword)
                    {
                      session_start();
                      $_SESSION['email'] = $email;
                      header("location:account.php");
                    }
                    else
                    {
                        $error = "*";
                    }
                    
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