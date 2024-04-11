<?php
if (!isset($_FILES["file"])){
    exit();
}
function check_requirements($file_data) {
    $path_tmp = $file_data["tmp_name"];
    $file_type = mime_content_type($path_tmp);
    $file_type_required = "image";
    $admitted_type = str_contains($file_type, $file_type_required);
    if (!$admitted_type) {
        echo "Error: Type not supported.";
        exit();
    }
    $kb_size = $file_data["size"]/1024;
    // 3 mega bytes
    $kb_limit = 3072;
    if ($kb_size > $kb_limit) {
        echo "File size is too longer, max capacity is $kb_limit KB";
        exit();
    }
}

// 0777 read and write permission
function ensure_path($path, $permissions = 0777) {
    if (!file_exists($path)) {
        if (!mkdir($path, $permissions)) {
            echo "Error in folder creation.";
            exit();
        }
    }
    chmod($path, $permissions);
}
function move_tmp_to($path, $file_data){
    $path_tmp = $file_data["tmp_name"];
    $file_name = $file_data["name"];
    if (move_uploaded_file($path_tmp, $path."/$file_name")) {
        echo "File upload successful.";
        return;
    }
    echo "Error during file upload.";
}

$file_data = $_FILES["file"];
var_dump($file_data);
$path = "files";
check_requirements($file_data);
ensure_path($path);
move_tmp_to($path, $file_data);