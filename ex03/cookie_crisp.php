<?PHP


$action = $_GET["action"];
$name = $_GET["name"];
$value = $_GET["value"];

if ($action !== NULL and $name !== NULL) {
    if ($action === "set") {
        setcookie($name, $value, time()+60*60*24*30);
    }
    elseif ($action === "get") {
        if ($_COOKIE[$name] !== NULL)
            echo $_COOKIE[$name]."\n";
    }
    elseif ($action === "del") {
        setcookie($name, "");
    }
}

?>