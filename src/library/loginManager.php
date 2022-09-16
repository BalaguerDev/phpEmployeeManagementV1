<!-- Este archivo contendrá las funciones necesarias para que el usuario pueda conectarse, guardar sus datos de sesión y cerrar la sesión.
 -->

<?php
class LoginUser{                            /* definimos clase */
   private $username;                      /* datos user insertados por usuario */
   private $password;                      /* datos password insertados por usuario */
   public $error;                          /* error */
   public $success;                        /* correcto  */
   private $storage = "users.json";
   private $stored_users;

    // class methods -----------------------------------------
   public function __construct($username, $password){
      $this->name = $username;
      $this->password = $password;
      $this->stored_users = json_decode(file_get_contents($this->storage), true);
      $this->login();
 }

 private function login(){
    foreach ($this->stored_users as $user) {
       if($user['name'] == $this->username){
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

