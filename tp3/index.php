<?php
    session_start();
    if ($_SESSION['login'] == 'true') {
        echo "Logged in as: " . $_SESSION['login_user'];
    }
    else {
        echo "Not logged in";
    }
?>

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

<?php
    $cookie_name = "css";
    $cookie_value = $_GET['css'];
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

    /*
    if(isset($_POST['css'])) {

    }
    else if(!isset($_COOKIE[$cookie_name])) {
        echo "Cookie named '" . $cookie_name . "' is not set!";
    } else {
        echo "Cookie '" . $cookie_name . "' is set!<br>";
        echo "Value is: " . $_COOKIE[$cookie_name];
    }
    */

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