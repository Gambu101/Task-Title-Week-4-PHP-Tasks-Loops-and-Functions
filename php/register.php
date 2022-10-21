<?php
if(isset($_POST['submit'])){
    $username = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

registerUser($username, $email, $password);

}

function registerUser($username, $email, $password){
    //save data into the file
    $userdata= [$username,$email,$password];
    $file = fopen("../storage/users.csv","a");
    fputcsv($file, $userdata);
    fclose($file);
    // echo "OKAY";
}
echo "User Successfully registered";


