<?php 
//HEADER DE NUESTRA PAGINA
  require_once "../assets/html/header.html";

//PAGINAS PARA MOSTRAR LOS EMPLEADOS, FUNCIÓN INACTIVIDAD, LOGOUT
  require_once "./library/loginManager.php";

  require_once "./library/sessionHelper.php";

//RESTRICCIÓN ACCESO SOLO A LOGEADOS
  if(!isset($_SESSION["user"])){
        header("Location: ../index.php"); exit();
    }
?>


    <div class="container my-5 text-center">
        <div class="mt-5">  
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col">City</th>
                        <th scope="col"><button type="button"  class="btn btn-success pull-right" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-plus"></i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus" viewBox="0 0 16 16"><path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/><path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/><th scope="col"><div class="d-flex justify-content-evently"></svg></button></th>
                    </tr>
                </thead>

                <tbody id="contenido">
               
                </tbody>

            </table>
        </div>
    </div>

<!-- MODAL -->
<!-- NEW EMPLOYEE  -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <h3 class="text-primary mb-3 mt-2 text-center" id="exampleModalLabel">New Employee</h3>

                <div class="modal-body">
                    <form method="post" name="frmAdd" class="row" id="addForm">
                        <div class="row">
                            <div class="col mb-3">
                                <select name="txtGender" id="gender" placeholder="Gender" class="form-select" aria-label="Default select example" require>
                                    <option value="Ms">Ms</option>
                                    <option value="Mr">Mr</option>
                                    <option value="Other">Other</option>    
                                </select>
                            </div>
                      
                            <div class="col">
                                <input name="txtAge"type="text" class="form-control" placeholder="Age" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col mb-3">
                                <input name="txtName"type="text" class="form-control" placeholder="First name" required>
                            </div>
                            <div class="col">
                                <input name="txtLastName"type="text" class="form-control" placeholder="Last name" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col mb-3">
                                <input name="txtPhone"type="text" class="form-control" placeholder="Phone number" required>
                            </div>
                            <div class="col">
                                <input name="txtEmail"type="text" class="form-control" placeholder="Email" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col mb-3">
                                <input name="txtCity"type="text" class="form-control" placeholder="City" require>
                            </div>
                            <div class="col">
                                <input name="txtStreet"type="text" class="form-control" placeholder="Street Nº" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col mb-3">
                                <input name="txtState"type="text" class="form-control" placeholder="State" required>
                            </div>
                            <div class="col">
                                <input name="txtPostalC"type="text" class="form-control" placeholder="Postal Code" required>
                            </div>
                        </div>
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <input type="submit"   value="Add employee" id="btnadd" data-bs-dismiss="modal" class="btn btn-success mb-2 mt-3"></input>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


<!-- MODAL -->
<!-- EDIT EMPLOYEE -->

<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>




<script src="../assets/js/index.js"></script>
</body>
</html>


