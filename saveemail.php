<?php
if(!empty($_POST['email'])) {
    $email = $_POST['email'];
    $data  = date("d m Y г. время:  H:i:s");  
    $email = $email."; ".$data." МСК  \n";
} else {
    $email = "null ; \n";
}
$file = 'email.txt';
file_put_contents($file, $email, FILE_APPEND | LOCK_EX);

?>