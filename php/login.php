<?php
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password =$_POST['password'];

   
loginUser($email, $password);

}

function loginUser($email, $password){
    /*
        Finish this function to check if username and password 
    from file match that which is passed from the form
    */
$handle = fopen('../storage/users.csv', 'r');


while (($data = fgetcsv($handle)) !== FALSE) {
    if (data[1] === $email && $data[2] === $password) {
        session_start();
        $_SESSION['username'] = $data['0'];
        header('location../dashboard.php');
        break;
        echo '<p class="success">congratulations, you are logged in!</p>';
    } else {
        echo '<p class="error">username password combination is wrong!</p>';

        header('location: ../forms/login.html');
        fclose($handle);
    }
  }
} 
?>