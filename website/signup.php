<?php
echo "php open";
$servername = "sql6.freemysqlhosting.net";
$username = "sql6144082";
$password = "rzFA99rJMe";   

// Create connection
// Check connection
$link = mysql_connect($servername, $username,$password);
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';
$options = [
    'cost' => 11,
    'salt' => mcrypt_create_iv(22, MCRYPT_DEV_URANDOM),
];
//echo  (string)$options[salt];
$salt = (string)$options[salt]; 
$user = [
    'username' => $_POST['username'],
    'password' => hasher(($_POST['password']),$options),
    'salt' => $salt,
    'credit_card_no' => hasher(($_POST['card_no']),$options),
    'exp_date' => hasher(($_POST['exp_date']),$options),
    'cvv' => hasher(($_POST['cvv']),$options),
    'name_card' => $_POST['card_name'],
    'email' => $_POST['email'],
    'phone' => $_POST['phone'],
    ];
//echo password_hash("rasmuslerdorf", PASSWORD_BCRYPT, $options)."\n";
function hasher($password,$options){
    
    return password_hash($password,PASSWORD_BCRYPT,$options);
}
mysql_close($link);

?>