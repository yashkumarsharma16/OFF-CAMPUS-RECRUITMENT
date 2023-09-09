<?php
$items = array(
    "mark10",
    "mark12",
    "sem1",
    "sem2",
    "sem3",
    "sem4",
    "sem5",
    "sem6",
    "cert",
    "resume"
);

$files = glob('files/*');

$response = array("success" => true);

$data = array();
foreach ($items as $item) {
    $exist = false;
    foreach ($files as $file) {
        if (strpos($file, $item)) {
            $exist = true;
            $file = str_replace("files/", "", $file);
            $data[$item] = $file;
        } else {
            $data[$item] = null;
        }
    }
}
$response["data"] = $data;
print_r(json_encode($response));
?>