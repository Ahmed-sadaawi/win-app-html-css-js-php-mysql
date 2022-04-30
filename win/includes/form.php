<?php

    
    $array=[
        'f_name_error'=>'',
        'l_name_error'=>'',
        'email_error'=>'',
    ];
        
if(isset($_POST['submit'])){
    
    $f_name = $_POST['f_name'];
    $l_name = $_POST['l_name'];
    $email  = $_POST['email' ];

   if(empty($f_name)){
        $array['f_name_error']="لا يمكن ترك هذا الحقل فارغ 😉";
   }
   if (empty($l_name)){
        $array['l_name_error']="لا يمكن ترك هذا الحقل فارغ (•_•) ";
   }
   if (empty($email)){
        $array['email_error']="لا يمكن ترك هذا الحقل فارغ (•_•) ";
   }
   else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $array['email_error']="من فضلك ادخل ايميل صيحيح😒";
   }
   else {  
        $f_name = mysqli_real_escape_string($mysql_connection,$_POST['f_name']);
        $l_name = mysqli_real_escape_string($mysql_connection,$_POST['l_name']);
        $email  = mysqli_real_escape_string($mysql_connection,$_POST['email' ]);
        
        $sql="INSERT INTO `users`(f_name,l_name,email) VALUES('$f_name','$l_name','$email')";
        if(mysqli_query($mysql_connection,$sql)){
            header("Locatoin: index.php");
        }
        else {
            echo "mysqli_query Not success😢";
        }     
    }
}
