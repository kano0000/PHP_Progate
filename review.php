<?php 
class Review {
  private $menuName;
  private $userId;
  private $body;
  
  public function __construct($menuName, $userId, $body) {
    $this->menuName = $manuName;
    $this->userId = $userId;
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
      if($user->getId() == $this->userId) {
        return $user;
      }
    }
  }
  
}

?>