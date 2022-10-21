<?php
function logout(){
    /*
Check if the existing user has a session
if it does
destroy the session and redirect to login page
*/
session_destroy();
}

echo "HANDLE THIS PAGE";
