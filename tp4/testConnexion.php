<html>

    <head>
        <Title>View Users</Title>
    </head>

    <?php
    
        $servername="localhost";
        $username="root";
        $password="root";
        $dbname="idaw";
        $connection= new mysqli($servername,$username,$password,$dbname);
        if ($connection->connect_error) {
            die("Failed to connect to database\n".$connection.connect_error);
        }
        
        
    ?>

    <body>
        <table border="1" align="center">
            <tr>
                <td>User ID</td>
                <td>Login</td>
                <td>Password</td>
                <td>Name</td>
            </tr>

            <?php
            
                $SQLString="SELECT userid, login, password, name from users;";
                $result=$connection->query($SQLString);
                if (!$result) {
                    echo $connection->error."\n";
                }
                else {
                    while($row=$result->fetch_assoc()) {
                        echo
                        "<tr>
                        <td>{$row['userid']}</td>
                        <td>{$row['login']}</td>
                        <td>{$row['password']}</td>
                        <td>{$row['name']}</td>
                        </tr>\n";
                    }
                }
                
            ?>

        </table>

        <!--
        <form method="POST" action="addstudent.php">
            <input type="submit" value=" Add student "/><br />
        </form>

        <form method="POST" action="index.php">
            <input type="submit" value=" Index "/><br />
        </form>
            -->

    </body>
</html>