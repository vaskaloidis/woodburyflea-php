<?php
$page = 'login';
include 'head.php';

    if (isset($_POST['loginSubmitted'])) {
        if ($_POST['username'] == $user) {
            if ($_POST['password'] == $password) {
                $_SESSION['admin'] = TRUE;

                Rollbar::report_message('WFM - Succesful User Login for User: ' + $user, Level::INFO);

                echo '<h1>Login Succesful</h1>';
                echo '<p>You have successfully logged in, continue to the <a href="' . $url . 'admin.php">Admin Section</a> if the page does not redirect</p>';
            } else {
                Rollbar::report_message('WFM Incorrect User password, for User: ' + $user, Level::WARNING);
                echo 'Incorrect Password';
            }
        } else {
            Rollbar::report_message('WFM Incorrect Username for User: ' + $user, Level::WARNING);
            echo 'Incorrect Username';
        }
    } else {
        echo 'No Form submitted';
    }

?>