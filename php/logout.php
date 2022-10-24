<?php
function logout(){
    /*
Check if the existing user has a session
if it does
destroy the session and redirect to login page
*/
 //initialize the session
session_start();
if($_SESSION['username']){
//unset all of the session variables
//destroy the session
session_destroy();

//redirect to login page
header('location:../forms/login.html');
} else {
    echo "you are not logged in!";
}
}
logut()

// ech "HANDLE THIS PAGE";

