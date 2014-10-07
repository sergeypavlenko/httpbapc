<?php

define('IMAGE_CAMERA_NAME', 'image_camera_cache.jpeg');

require 'httpbapc.php';

$config = require 'config.php';

header('Content-Type: image/jpeg');

$http = new Httpbapc($config['url'], $config['username'], $config['password']);
$image_string = $http->execute();

if ($image_string) {
  file_put_contents(IMAGE_CAMERA_NAME, $image_string);
}

echo file_get_contents(IMAGE_CAMERA_NAME);
