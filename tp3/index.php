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

?>

<html>
    <form id="style_form" action="index.php" method="GET">
        <select name="css">
            <option value="style1">Purple</option>
            <option value="style2">Blue</option>
        </select>
        <input type="submit" value="Appliquer" />
    </form>
</html>

<?php

    require_once($currentLangId . '/template_footer.php');

?>