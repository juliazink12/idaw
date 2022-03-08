<?php
    require_once('template_header.php');
?>

	<body>
        <div class="content">
            <!--
            <div class="conteneur-flexible ligne">
                <div class="element-flexible" id="currentpage"><a href="index.php"><p>Accueil</p></a></div>
                <div class="element-flexible"><a href="cv.php"><p>CV</p></a></div>
                <div class="element-flexible"><a href="perso.php"><p>Perso</p></a></div>
                <div class="element-flexible"><a href="../tp1/bootstrap/index.html"><p>Test Bootstrap</p></a></div>
            </div>
            -->
            <?php
                require_once('template_menu.php');
                echo renderMenu('index');
            ?>
            <h1>
                Accueil
            </h1>
            <p>
                Julia Zink - mars 2022
            </p>
            <h2>
                CV
            </h2>
            <p>
                (à continuer)
            </p>
            <h2>
                Perso
            </h2>
            <p>
                Quelques unes de mes photos
            </p>
            <section>
                <!--
                <img src="http://3.bp.blogspot.com/-Qqq-poyPzhc/T4SdCOAgFNI/AAAAAAAAFz8/wVR1jwzR-LQ/s1600/mousse.JPG" alt="img" style="width:512px;height:384px">
                -->
            </section>
        </div>
	</body>
    
<?php
    require_once('template_footer.php');
?>