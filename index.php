<!-- TODO Application entry point. Login view -->
<?php require("loginManager.php"); ?>
<?php
   if(isset($_POST['submit'])){
      $user = new loginUser($_POST['username'], $_POST['password']);
   }
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link type="text/css" rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
 
 <!-- Fontawesome -->
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
  
 <!-- Custom CSS -->
 <link rel="stylesheet" type="text/css" media="screen" href="assets/css/login.css" />
  
 <!-- Custom Scripts -->
 <script src="assets/js/index.js"></script>



</head>

<body>
    <!-- LOGIN -->
    <div class="bg-light container-fluid w-100 d-flex justify-content-center align-items-center" style="height:100vh">
        <div class="card" style="width:400px">
            <div class="card-body">
                <h3 class="text-primary mb-4 mt-1 text-center">Acceso</h3>
            
                <hr>
            
                <form method="post" enctype="multipart/form-data" autocomplete="off">
<!-- USER -->
                    <div class="input-group mb-3">
                        <div class="input-group-append">            
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" name="username" class="form-control input_user" value="" placeholder="Email">
                        
                    </div>
<!-- PASSWORD -->
                    <div class="input-group mb-3">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="text" name="password" class="form-control input_pass" placeholder="password">
                    </div>        

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                            <button type="submit" name="submit">Register</button>
                            </div> 
                        </div>                                           
                    </div>      
                </form>

                <!-- messages -->
                <div class="row">
                    <div class="col-12">
                        <p class="error"><?php echo @$user->error ?> </p>
                        <p class="success"><?php echo @$user->success ?> </p>
                    </div>
                </div> <!-- end messages -->     
            </div>
        </div>
    </div> 
    


    
</body>
</html>