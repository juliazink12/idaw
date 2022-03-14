<?php
    session_start();
?>

<body>

    <?php
        $servername="localhost";
        $username="root";
        $password="root";
        $dbname="idaw";
        $connection= new mysqli($servername,$username,$password,$dbname);
        if ($connection->connect_error) {
            die("Failed to connect to database\n".$connection.connect_error);
        }

        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $login=$_POST['login'];
            $password=$_POST['password'];
            $name=$_POST['name'];
            $SQLString="insert into users (login, password, name) values ('$login', '$password', '$name');";
            $result = mysqli_query($connection,$SQLString);
            $_SESSION['login_user'] = $login;
            $_SESSION['login'] = true;
            header("Location: ../index.php");
        }

    ?>

    <div class="content">
        <form action = "fr/signup.php" method = "POST">
            <label>Username: </label><input type = "text" name = "login" class = "box"/><br /><br />
            <label>Password: </label><input type = "text" name = "password" class = "box" /><br/><br />
            <label>Name: </label><input type = "text" name = "name" class = "box"/><br /><br />
            <input type = "submit" value = " Submit "/><br />
        </form>
    </div>
</body>