<?php
if(isset($_POST['submit'])){
    $username = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

registerUser($username, $email, $password);

}

function registerUser($username, $email, $password){
    //save data into the file
    $handle = fopen('../storage/users.csv', 'a');
    fputcsv($handle, $userdata);
    fclose($handle);
    echo "user succesfully registered";
}