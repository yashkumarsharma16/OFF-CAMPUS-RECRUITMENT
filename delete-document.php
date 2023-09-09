<?php
$filename = $_POST["name"];
if (file_exists("files/" . $filename)) {
    unlink("files/" . $filename);
    print_r(json_encode(array("success" => true)));
    return;
} else {
    print_r(json_encode(array("success" => false)));
}
?>