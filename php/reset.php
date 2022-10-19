<?php
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $newpassword = $_POST['password'];

    resetPassword($email, $password);
}

function resetPassword($email, $password){
$handle = fopen('../storage/users.csv','ra+');

while(($data = fgetcsv($handle)) !==false){
    if($data[1] === $email){
        $data[2] === $password;
        // print_r($data);
        // fputcsv($handle, $new_data);

        // $data1 = fgetcsv($handle1);

        $csv = array_map('str_getcsv',file('../storage/users.csv'));
        foreach ($csv as $line) {
        implode(',',$line);
        // print_r($line);
        // array_push(new_data, $line);
        $new_data = [$data[0], $data[1], $password];
        $new_data[]= $line;
        //$handle1 = fopen('../storage/users.csv', 'w');
        // fputcsv($handle1,$new_data);
        // fclose($handle1);
      } 
     
     } exit;
     //print_r($new_data);
     //print_r($csv);

    
  
     } 
 } 
echo "user does not exist";
fclose($handle);

?>



