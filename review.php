<?php 
class Review {
  private $menuName;
  private $body;
  
  public function __construct($menuName, $body) {
    $this->menuName = $manuName;
    $this->body = $body;
  }
  
  public function getMenuName() {
    return $this->menuName;
  }
  
  public function getbody() {
    return $this->body;
  }
  
}

?>