<?php

class Httpbapc {
  protected $url;
  protected $username;
  protected $password;

  public function __construct($url, $username, $password) {
    $this->url = $url;
    $this->username = $username;
    $this->password = $password;
  }

  public function execute() {
    $process = curl_init($this->url);
    curl_setopt($process, CURLOPT_USERPWD, $this->username . ":" . $this->password);
    curl_setopt($process, CURLOPT_TIMEOUT, 30);

    ob_start();
    curl_exec($process);
    curl_close($process);

    $return = ob_get_contents();
    ob_end_clean();

    return $return;
  }
}
