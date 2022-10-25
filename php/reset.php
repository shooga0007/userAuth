<?php
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $newpassword = $_POST['password'];

    resetPassword($email, $password);
}

function resetPassword($email, $password){
$file = fopen('../storage/users.csv','r');

while(!feof($file)){
    $line = fgetcsv($file);
    if($line[1] === $email){
        $line[2] === $password;
        fclose($file);
        $file = fopen('../storage/users.csv', 'w');
        fputcsv($file);
        echo "<h3 style="color: blue'>
        password succesflly modified
        <br>
        <a href='../forms/login.html'>login here</a>
        </h3>";
        exit();
        }
     
     } exit
  
   } 
  
echo "<h3 style='color:red'>user does not exist";</h3>";
fclose($file);

}



