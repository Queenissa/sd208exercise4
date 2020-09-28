<?php
session_start();

$fname = $lname = $email = $address = " ";
$errors = array('fname'=>'','lname' => '','email' => '', 'address'=>'');
$regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';



if (isset($_POST['register'])){
    
    if(empty($_POST['address'])){
        $errors['address'] = "Address is empty";

    } else{
        $address = $_POST['address']; 
    }


    
    if(empty($_POST['email'])){
         $errors['email']= "Email address is empty*";
    }  else{
         if ((preg_match($regex, $_POST['email']))){
                $email = $_POST['email'];
    }        else{
                $errors['email']= "Email must be valid*";
    }
    }
 


    if(empty($_POST['fname'])){
         $errors['fname']= "First name is empty*";
    }  else {
          if (((strlen(trim($_POST['fname'])))  >= 2 and strlen(trim($_POST['fname']))  < 25)){
                $fname = $_POST['fname'];
    }        else{
                $errors['fname']= 'First name must be at least 2 and not exceed 25 characters*';

    }   
    }


    if(empty($_POST['lname'])){
        $errors['lname']= "Last name is empty*";
   }  else {
         if (((strlen(trim($_POST['lname'])))  >= 2 and strlen(trim($_POST['lname']))  < 25)){
               $lname = $_POST['lname'];
   }        else{
               $errors['lname']= 'Last name must be at least 2 and not exceed 25 characters*';

   }    
   }



    if(!array_filter($errors)){
        $_SESSION['input'] = array($fname, $lname, $email, $address);
        header('location: output.php');
    } 
      
    }
    



    




?>

