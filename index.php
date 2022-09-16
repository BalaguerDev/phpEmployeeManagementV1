<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous" defer></script>

<script src="assets/js/index.js" defer></script>



</head>

<body>
    <!-- LOGIN -->

    <div class="bg-light container-fluid w-100 d-flex justify-content-center align-items-center" style="height:100vh">
        <div class="" style="width:400px">
           
                <h3 class="text-primary col-lg-12 text-center">Login</h3>
                <form id="formulario" method="POST">
                    <div class="mb-3">
                        <label for="txtUsuario" class="form-label">Usuario</label>
                        <input type="text" class="form-control" id="txtUsuario" >
                    </div>

                    <div class="mb-3">
                        <label for="txtPassword" class="form-label" name="pass" >Password</label>
                        <input type="password" class="form-control" id="txtPassword"  name="pass">
                    </div>

                    <button type="submit" class="btn btn-primary col-lg-12 btn-block">Entrar</button>
                </form>
            
        </div>
    </div>
    


    
</body>
</html>
