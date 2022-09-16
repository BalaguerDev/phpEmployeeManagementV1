<!-- Este archivo contendrá las funciones necesarias para que el usuario pueda conectarse, guardar sus datos de sesión y cerrar la sesión.
 -->

<?php
class LoginUser{                    /* definimos clase */
   private $username;               /* datos user insertados por usuario */
   private $password;               /* datos password insertados por usuario */
   public $error;                   /* error */
   public $success;                 /* correcto  */

    // class methods -----------------------------------------
   public function __construct($username, $password){
      $this->username = $username;
      $this->password = $password;
      $this->login();
   }

   private function login(){
      $usersJson = file_get_contents("resources\users.json");
      $decodedJson = json_decode($usersJson,true);
      $userLogin = $decodedJson['users'];

      foreach($userLogin as $users){
         $user = $users["name"];
         $password = $users["password"];

         if($user == $this ->username){
            if(password_verify($this->password,$password)){
               session_start();
               $_SESSION["user"] = $this ->username;
               header("Location: src\dashboard.php"); exit();
            }
         }
      }
      return $this->error ="<div class='alert alert-danger d-flex justify-content-center' role='alert'>Usuario o contraseña incorrectos</div>";
   }
} // end of class






?>

