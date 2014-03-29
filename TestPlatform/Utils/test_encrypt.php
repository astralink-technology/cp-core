<?php
require ($_SERVER['DOCUMENT_ROOT'] . '/Helpers/encryption_helper.php');

$password = '12341234';
$encryptionHelper = new cp_encryption_helper();
$salt = 'HGhfwjgr0lGa31Ya';
$hash_old=  $encryptionHelper->hash($password, $salt);
$hash_new=  $encryptionHelper->hash($password);
$test = "Not Authenticated";

echo "Password used - " . $password;
echo "<br />";
echo "Salt - " . $salt;
echo "<br />";
echo "Old Hashing - " . $hash_old;
echo "<br />";
echo "New Hashing - " . $hash_new;
echo "<br />";
echo "<br />";
$verification = $encryptionHelper->verify('12341234', '$2y$10$0OUFQ1tIBb5/UfjyijYuuemzgsQnZGKR/pFOGO4uQqAJIknj5FZR6');
if ($verification == true){
    $test = "Authenticated";
}
echo $test;
?>