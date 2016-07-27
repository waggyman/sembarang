<?php

class HelloWorld{
  private $message;
  public function __construct(){
    $this->message = "awesome";
  }
  public function getMessage(){
    return $this->message;
  }
}

$hello = new HelloWorld();
print $hello->getMessage();
