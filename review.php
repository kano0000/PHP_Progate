<?php 
class Review {
  private $menuName;
  private $userName;
  private $body;
  
  public function __construct($menuName, $userName, $body) {
    $this->menuName = $manuName;
    $this->userName = $userName;
    $this->body = $body;
  }
  
  public function getMenuName() {
    return $this->menuName;
  }
  
  public function getbody() {
    return $this->body;
  }
  
  public function getUser($users) {
    foreach($users as $user) {
      if($user->getName() == $this->userName) {
        return $user;
      }
    }
  }
  
}

?>