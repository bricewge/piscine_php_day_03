<?PHP

if ($_SERVER['PHP_AUTH_USER'] !== "zaz"
    and $_SERVER['PHP_AUTH_PW'] !== "jaimelespetitsponeys") {
    header("WWW-Authenticate: Basic realm=''Member area''");
    header('HTTP/1.0 401 Unauthorized');
    echo "<html><body>That area is accessible for members only</body></html>\n";
} else {
    $image = file_get_contents("../img/42.png");
    $image = base64_encode($image);
    echo "<html><body>\nHello Zaz<br />\n<img src='data:image/png;base64,$image'>\n</body></html>\n";
}

?>