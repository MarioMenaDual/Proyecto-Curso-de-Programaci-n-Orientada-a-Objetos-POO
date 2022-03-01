<?php
class Account {
    public $id;
    public $name;
    public $document;
    public $email;
    public $password;

  public function __construct($name, $document, $email,$password){
    $this->name = $name;
    $this->document = $document;
    $this->email = $email;
    $this->password = $password;
  }

      public function printDataAccount(){
        echo " <br/> name: $this->name, document: $this->document,email : $this->email, password: $this->password <br/>";
      }
    }
?>