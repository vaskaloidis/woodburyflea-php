<?php
$admin = true;
$page = 'admin';
include('head.php');
include($dir . 'lib/contactAdmin.php');

$sql = $_POST['sql'];
$content = $_POST['content'];
$section = $_POST['section'];

$message = '<h1>WFM Error</h1>';
$message .= '<b>SQL: </b>' . $sql . '<br>';
$message .= '<b>Section: </b>' . $section . '<br>';
$message .= '<b>Content: </b>' . $content . '<br>';

if(contactAdmin::email("WFM Website - ERROR", $message)) {
    echo '<div class="alert alert-danger">Error notifying admin</div>';
} else {
    echo '<div class="alert alert-success">Succesfully reported this error to Vas. Thanks! <br><br><b>Message:</b><br>' . $message . '</div>';
}





?>