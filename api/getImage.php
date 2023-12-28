<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/DBApi.php';

$gridFSBucket = DBApi::getGridFS();

$fileId = $_GET['id'] ?? null;

if ($fileId) {
    $file = $gridFSBucket->findOne(['_id' => new MongoDB\BSON\ObjectID($fileId)]);
    if ($file) {
            header('Content-Type: '. $file['metadata']->contentType );
            $fileId = new MongoDB\BSON\ObjectID($fileId);
            $stream = $gridFSBucket->openDownloadStream($fileId);

            if ($stream) {
                fpassthru($stream);
                fclose($stream);
                exit;
            } else {
                echo 'Error: Unable to open file stream.';
            }

    } else {
        echo 'Error: File not found.';
    }
} else {
    echo 'Error: Invalid file ID';
}


?>