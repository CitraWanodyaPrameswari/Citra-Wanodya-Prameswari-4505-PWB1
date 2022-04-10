<?php
$str = 'My Password';
$user = 'username';
echo sprintf("The md5 hased password of %s is: %s\n", $str, md5($str.$user));
echo '<br>';
echo sprintf("The sha1 hased password of %s is: %s\n", $str, sha1($str.$user));
echo '<br>';
echo sprintf("The gost hased password of %s is: %s\n", $str, hash('gost', $str.$user));
echo '<br>';

?>