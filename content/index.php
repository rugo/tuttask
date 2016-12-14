<?php
$fn = "welcome";
if ($_GET) {
        $fn = $_GET['fn']; 
}
echo file_get_contents("letters/${fn}.txt");
?>
