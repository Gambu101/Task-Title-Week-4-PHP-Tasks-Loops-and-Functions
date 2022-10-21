<?php
if(isset($_POST['submit'])){
    $email =$_POST["email"]; //complete this;
    $newpassword =$_POST["password"]; //complete this;

    resetPassword($email, $password);
}

function resetPassword($email, $password){
   $f= fopen("../storage/users.csv","w");
   if($email==$_POST["email"]){//open file and check if the username exist inside
    fwrite($f, filesize($password));//if it does, replace the password
   }
    else{
    echo "User does not exist";
    }
    fclose($f);
}
echo "Password Updated";
