<?php
    function renderMenu($currentpage, $currentlang) {
        if ($currentlang=='en') {
            $mymenu = array(
                'accueil' => array("accueil", "Home"),
                'cv' => array("cv", "Resume"),
                'perso' => array("perso", "Hobbies"),
                'contact' => array("contact", "Contact")
            );
        }
        else {
            $mymenu = array(
                'accueil' => array("accueil", "Accueil"),
                'cv' => array("cv", "CV"),
                'perso' => array("perso", "Perso"),
                'contact' => array("contact", "Contact")
            );
        }
        echo "<div class='content'>";
        echo "<div class='conteneur-flexible ligne'>";
        foreach($mymenu as $pageid => $pageparameters) {
            if ($pageid==$currentpage) {
                echo "<div class='element-flexible' id='currentpage'><a href=index.php?page=".$pageparameters[0]."&lang=".$currentlang"><p>$pageparameters[1]</p></a></div>";
            }
            else {
                echo "<div class='element-flexible'><a href=index.php?page=".$pageparameters[0]."&lang=".$currentlang"><p>$pageparameters[1]</p></a></div>";
            }
        }
        echo "</div>";
        echo "</div>";
    }
?>