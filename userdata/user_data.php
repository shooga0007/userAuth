<?php
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$userdata = [$name, $email, $password];

// $txt =implode(",",userdata);

$handle=fopen('userdata.csv', 'a');
fputcsv($handle, $userdata);
fclose($handle);



print_r($userdata);
?>

echo "# tutorial007" >> README.md