<?php
$handle = opendir("users");
mkdir("users/test");
closedir($handle);
?>