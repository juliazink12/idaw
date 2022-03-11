<?php
    function renderMenu($currentpage, $currentlang) {
        $mymenu = array(
            'accueil' => array("accueil", "Home"),
            'cv' => array("cv", "Resume"),
            'perso' => array("perso", "Hobbies"),
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
                echo "<div class='element-flexible'><a href=index.php?page=".$currentpage."&lang=fr><p>Français</p></a></div>";
            echo "</div>";
        echo "</div>";
    }
?>