<?php
    function renderMenu($currentpage) {
        $mymenu = array(
            'index' => array("index.php", "Accueil"),
            'cv' => array("cv.php", "CV"),
            'perso' => array("perso.php", "Perso"),
            'bootstrap' => array("../tp1/bootstrap/index.html", "Test Bootstrap")
        );
        echo "<div class='conteneur-flexible ligne'>";
        foreach($mymenu as $pageid => $pageparameters) {
            if ($pageid==$currentpage) {
                echo "<div class='element-flexible' id='currentpage'><a href=$pageparameters[0]><p>$pageparameters[1]</p></a></div>";
            }
            else {
                echo "<div class='element-flexible'><a href=$pageparameters[0]><p>$pageparameters[1]</p></a></div>";
            }
        }
        echo "</div>";
    }
?>