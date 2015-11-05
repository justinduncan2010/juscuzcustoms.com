<?php
$_SESSION = array();
setcookie( session_name(), '', time()-300);

if(session_destroy()) // Destroying All Sessions
{
header('Location: ' . $_SERVER['HTTP_REFERER']); // Redirecting To logout page
}
?>