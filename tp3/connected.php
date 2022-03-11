<?php

    $users = array(
        'admin' => 'admin',
        'julia' => 'zink');
    $login = "anonymous";
    $errorText = "";
    $successfullyLogged = false;

    if (isset($_POST['login']) && isset($_POST['password'])) {
        $tryLogin = $_POST['login'];
        $tryPwd = $_POST['password'];
        if (array_key_exists($tryLogin, $users) && $users[$tryLogin]==$tryPwd) {
            $successfullyLogged = true;
            $login = $tryLogin;
        }
        else {
            $errorText = "Wrong login/password";
        }
    }
    else {
        $errorText = "Please login first";
    }

    if (!$successfullyLogged) {
        echo $errorText;
    }
    else {
        echo "
        <body>
            <div class='contentb'>
                <h1>Hi ".$login."!</h1>
                <p>
                    You are logged in
                </p>
            </div>
        </body>
        ";
    }

?>