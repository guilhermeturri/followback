<?php
$locale = Locale::acceptFromHttp($_SERVER['HTTP_ACCEPT_LANGUAGE']);
if (isset($_COOKIE["LANG"])) {
    if ($_COOKIE["LANG"] == "PT") {
        include("language/pt-br/pt_br.php");
    } else {
        include("language/eng/eng.php");
    }
} elseif ($locale == "pt_BR") {
    include("language/pt-br/pt_br.php");
} else {
    include("language/eng/eng.php");
}
include ("layout/header.html");