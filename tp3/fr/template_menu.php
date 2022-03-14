<?php
    function renderMenu($currentpage, $currentlang) {
        $mymenu = array(
            'accueil' => array("accueil", "Accueil"),
            'cv' => array("cv", "CV"),
            'perso' => array("perso", "Perso"),
            'contact' => array("contact", "Contact")
        );
        echo "<div class='content'>";
            echo "<div class='conteneur-flexible ligne'>";
                foreach($mymenu as $pageid => $pageparameters) {
                    echo "<div class='element-flexible' ";
                    if ($pageid==$currentpage) 
                        echo " id='currentpage'";
                    echo "><a href=index.php?page=".$pageparameters[0]."&lang=".$currentlang."><p>".$pageparameters[1]."</p></a></div>";
                }
                echo "<div class='element-flexible'><a href=index.php?page=login&lang=fr><p>Connexion</p></a></div>";
                session_start();
                $loggedin = $_SESSION['login'];
                if(!$loggedin){
                    echo "<div class='element-flexible'><a href=index.php?page=signup&lang=fr><p>Inscription</p></a></div>";
                }
                echo "<div class='element-flexible'><a href=index.php?page=".$currentpage."&lang=en><p>English</p></a></div>";
            echo "</div>";
        echo "</div>";
    }
?>