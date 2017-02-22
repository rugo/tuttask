<html><head><title>Mailbox</title></head><body>
<?php
$fn = "welcome";
$path = "letters";
if ($_GET) {
    $fn = $_GET['fn']; 
}
// Scan for letters
$files = scandir($path);
// Remove . and ..
$files = array_diff(scandir($path), array('.', '..'));

// List letters
foreach ($files as $letter) {
    // Without extension
    $letter = basename($letter, "txt");
    echo "<a href='?fn=${letter}'>${letter}</a><br/>";
}
echo "Here is your message:<br/>";
echo file_get_contents("${path}/${fn}.txt");
?>
</body></html>
