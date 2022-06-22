<?php 

if (isset($_POST['submit-personal-info'])) {
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

    if ($isEmpty) {
      $error = "*";
    } else {
        if ($isExtension) {
          if (is_dir("regdInfo/$email")) {
            $error = "*";
          }else {
            mkdir("regdInfo/$email");
              if(move_uploaded_file($temporary,"regdInfo/$email/$email".".jpg")){
                  file_put_contents("regdInfo/$email/info.txt", $info);
                  header("location:index.php");
              }else {
                $error = "*";
              }
          }
        }else {
           $error = "*";
        }  
    }
                     
          
          

}


?>
