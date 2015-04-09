<?php

function grs($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
}

function checkLab($id) {
  // Make function to find id
  return;
}

function addUser($email, $password, $name, $class) {
  $password = password_hash(BCRYPT_PASSOWRD, $password);
  $
}

function editUser($option, $newsettings) {

}

function changePassword($email, ) {

}
