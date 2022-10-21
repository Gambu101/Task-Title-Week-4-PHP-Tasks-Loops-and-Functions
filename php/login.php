<?php
// session_start();
if(isset($_POST['submit'])){
    $email = $_POST["email"];
    $password = $_POST["password"];

loginUser($email, $password);

}

function loginUser($email, $password){
    $fp = fopen("../storage/users.csv","r");
    fgetcsv($fp);
    fclose($fp);
    if($email==$_POST["email"] && $password==$_POST["password"]){
        session_start();
        header("../dashboard.php");
    }else{
    // session_unset()};
    header("./login.php");}

    /*
        Finish this function to check if username and password 
    from file match that which is passed from the form
    */
    
}
// echo "HANDLE THIS PAGE";

