<?php
echo "php open";
$options = [
    'cost' => 11,
    'salt' => mcrypt_create_iv(22, MCRYPT_DEV_URANDOM),
];
//echo  (string)$options[salt];
$salt = (string)$options[salt]; 
$user = [
    'username' => $_Post['username'],
    'password' => hasher(($_Post['password']),$options),
    'salt' => $salt,
    'credit_card_no' => hasher(($_Post['card_no']),$options),
    'exp_date' => hasher(($_Post['exp_date']),$options),
    'cvv' => hasher(($_Post['cvv']),$options),
    'name_card' => $_Post['card_name'],
    'email' => $_Post['email'],
    'phone' => $_POST['phone'],
    ];

//echo password_hash("rasmuslerdorf", PASSWORD_BCRYPT, $options)."\n";
function hasher($password,$options){
    
    return password_hash($password,PASSWORD_BCRYPT,$options);
}
?>