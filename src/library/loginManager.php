<?php


class LoginUser{                            /* definimos clase */
    private $usuario;                          /* datos user insertados por usuario */
    private $pass;                          /* datos password insertados por usuario */
    public $error;                          /* error */
    public $success;                        /* correcto  */
    private $storage = "sessionHelper.php";
    private $stored_users;

    // class methods -----------------------------------------
   public function __construct($usuario, $pass){
    $this->name = $usuario;
    $this->password = $pass;
    $this->stored_users = json_decode(file_get_contents($this->storage), true);
    $this->login();
 }

 private function login(){
    foreach ($this->stored_users as $name) {
       if($name['username'] == $this->name){
          if(password_verify($this->password, $user['password'])){
             // You can set a session and redirect the user to his account.
             return  $this->success = "You are loged in";
          }
       }
    }
    return $this->error = "Wrong username or password";
 }
} // end of class




?>