<?php
$a = array();
$con = new mysqli( "localhost", "root", "", "test");
if (!$con) {
    echo"error";
    die();
}
$cq = $con->query("SELECT * FROM hg ");
if ($cq->num_rows > 0) {
    $s = $cq->num_rows;
    while ($row = $cq->fetch_assoc()) {
        $a[] = $row;
        
    }
    $r = rand(0, $s-1);
    
    echo json_encode($a[$r]);
} else {
    $row = array();
}

?>