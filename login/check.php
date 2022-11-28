?
<?php
 
require_once 'init.php';
 
if (!isLoggedIn())
{
    header('Location: for-login.php');
}
