<?php

    $servername="localhost";
    $username="root";
    $password="root";
    $dbname="idaw";
    $connection= new mysqli($servername,$username,$password,$dbname);
    if ($connection->connect_error) {
        die("Failed to connect to database\n".$connection.connect_error);
    }

    $login = "anonymous";
    $errorText = "";
    $successfullyLogged = false;

    if (isset($_POST['login']) && isset($_POST['password'])) {
        $username = $_POST['login'];
        $password = $_POST['password'];
        $sql = "SELECT userid FROM users WHERE login = '$username' and password = '$password'";
        $result = mysqli_query($connection,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $active = $row['active'];
        $count = mysqli_num_rows($result);
        // If result matched $username and $password, table row must be 1 row
        if($count == 1) {
            session_start();
            $_SESSION['login_user'] = $username;
            $_SESSION['login'] = true;
            $successfullyLogged = true;
            header("location: index.php");
        }
        else {
            $error = "Invalid user name or password";
        }
    }
    else {
        $errorText = "Please login first";
    }

    if (!$successfullyLogged) {
        echo $errorText;
    }
    else {
        header('Location: index.php');
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