<?php
$con = new mysqli( "localhost", "root", "", "test");
if (!$con) {
    echo"error";
    die();
}
if (!$con->query("INSERT INTO `hg` (`no`, `desc`, `ans`) VALUES ('1', 'name', 'bob'), ('2', 'food', 'apple'), ('3', 'city', 'argentina'), ('4', 'app', 'youtube'), ('5', 'planet', 'jupiter'), ('6', 'laptop', 'dell'), ('7', 'music', 'dance');")){
    echo "error";
    die();
}

?>