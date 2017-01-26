<?php
if (isset($_FILES['fileToUpload'])) {
    require_once 'simpleChunking.php';
    $upload = new simpleChunking();
    $name = preg_replace("/[^a-zA-Z]/", '', $_POST['name']);. '.ext';
    return $upload->upload($name);
}
?>
