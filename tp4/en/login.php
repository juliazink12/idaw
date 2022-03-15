<body>
    <div class="content">
        <div class='conteneur-flexible ligne'>
            <div class='element-flexible'>
                <form id="login_form" action="connected.php" method="POST">
                    <table>
                        <tr>
                            <th>Username:</th>
                            <td><input type="text" name="login"></td>
                        </tr>
                        <tr>
                            <th>Password:</th>
                            <td><input type="password" name="password"></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td><input type="submit" value="Submit" /></td>
                        </tr>
                    </table>
                </form>
            </div>
            <div class='element-flexible'>
                <p>Log out</p>
                <form id="login_form" action="disconnected.php" method="POST">
                    <td><input type="submit" value="Log out" /></td>
                </form>
            </div>
        </div>
    </div>
</body>