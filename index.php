<!-- TODO Application entry point. Login view -->
<?php require_once ("register.class.php"); 

if(isset($_POST['submit'])){
    $user =($_POST['username']);( $_POST['password']);
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
            
                <form action="" method="POST" enctype="multipart/form-data" autocomplete="off">
<!-- USER -->
                    <div class="input-group mb-3">
                        <div class="input-group-append">            
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" class="form-control input_user" id="textUser" name="username" placeholder="Username*" required>
                    </div>
<!-- PASSWORD -->
                    <div class="input-group mb-3">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="text" class="form-control input_user" id="textPass" name="password" placeholder="Password*" required>
                    </div>        

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block" name="submit">Acceso</button>
                            </div> 
                        </div>                                           
                    </div>      
                </form>
                    
                <!-- messages -->
<!-- end messages -->   

            </div>
        </div>
        <div class="mt-3" id="respuesta">
            
        </div>
    </div> 
    


    
</body>
</html>