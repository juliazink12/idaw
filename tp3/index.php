<?php

    $currentPageId = 'accueil';
    $currentLangId = 'fr';
    if(isset($_GET['page'])) {
        $currentPageId = $_GET['page'];
    }
    if(isset($_GET['lang'])) {
        $currentLangId = $_GET['lang'];
    }

    require_once($currentLangId . '/template_header.php');
    require_once($currentLangId . '/template_menu.php');

    renderMenu($currentPageId, $currentLangId);

    $pageToInclude = $currentLangId . "/" . $currentPageId . ".php";
    if(is_readable($pageToInclude)) {
        require_once($pageToInclude);
    }
    else {
        require_once("error.php");
    }

    require_once($currentLangId . '/template_footer.php');
?>