<?php 
include("database/db.php") ;

if (isset($_POST['submit']))
{
          $firstName = $_POST['firstName'];
          $lastName = $_POST['lastName'];
          $email = $_POST['email'];
          $password = $_POST['password'];
          $street = $_POST['street'];
          $city = $_POST['city'];
          $state = $_POST['state'];
          $zip = $_POST['zip'];
          $temporary=$_FILES['imageUpload']['tmp_name'];
          $imageUpload=$_FILES['imageUpload']['name'];
          $extension=pathinfo($imageUpload,PATHINFO_EXTENSION);

          $isEmpty = empty($firstName) ||
                     empty($lastName)  ||
                     empty($email)     ||
                     empty($password)  ||
                     empty($street)    ||
                     empty($city)      ||
                     empty($state)     ||
                     empty($zip); 

          $isExtension = $extension == "jpg" || 
                         $extension == "png" || 
                         $extension == "gif" || 
                         $extension == "jpeg"; 
                         
          $info = "$firstName\n$lastName\n$email\n$password\n$street\n$city\n$state\n$zip";               

    if ($isEmpty)
    {
      $error = "*";
    }
    else
    {
        if ($isExtension)
        {
          if (is_dir("regdInfo/$email"))
          {
            $error = "*";
          }
          else
          {
              if(mysqli_query($connection, "insert into regd(firstName,lastName,email, password,street,city,state,zip,image) values ('$firstName','$lastName','$email', '$password','$street','$city','$state',$zip,'$email.jpg')"))
              {
                  if(move_uploaded_file($temporary,"regdInfo/$email.jpg"))
                  {
                    header("location:index.php");
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
    }
}
?>
