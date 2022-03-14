<body>
    <div class="content">

    <!--
        <(?)php if(): ?>
            //si connecte afficher deconnexion
        <(?)php else: ?>
            //sinon afficher connexion
        <(?)php endif ?>
        -->

        <div class='conteneur-flexible ligne'>
            <div class='element-flexible'>
                <form id="login_form" action="connected.php" method="POST">
                    <table>
                        <tr>
                            <th>Identifiant :</th>
                            <td><input type="text" name="login"></td>
                        </tr>
                        <tr>
                            <th>Mot de passe :</th>
                            <td><input type="password" name="password"></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td><input type="submit" value="Se connecter" /></td>
                        </tr>
                    </table>
                </form>
            </div>
            <div class='element-flexible'>
                <p>Déconnexion</p>
                <form id="login_form" action="disconnected.php" method="POST">
                    <td><input type="submit" value="Se déconnecter" /></td>
                </form>
            </div>
        </div>
    </div>
</body>