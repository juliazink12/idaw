<?php

    $cookie_name = "css";

    if(isset($_GET['css'])) {
        $style = $_GET['css'] . ".css";
    }
    else if(!isset($_COOKIE[$cookie_name])) {
        echo "Cookie named '" . $cookie_name . "' is not set!";
        $style = "style1.css";
    } else {
        echo "Cookie '" . $cookie_name . "' is set!<br>";
        echo "Value is: " . $_COOKIE[$cookie_name];
        $style = $_COOKIE[$cookie_name] . ".css";
    }

?>

<!doctype html>
<html>
	<head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="<?php echo $style; ?>">
		<title>
            Julia
        </title>
	</head>