<?php 
//HEADER DE NUESTRA PAGINA
  require_once "../assets\html\header.html";

//PAGINAS PARA MOSTRAR LOS EMPLEADOS, FUNCIÓN INACTIVIDAD, LOGOUT
  require_once "./library/loginManager.php";
  require_once "library/employeeManager.php";
  require_once "library\sessionHelper.php";

//RESTRICCIÓN ACCESO SOLO A LOGEADOS
  if(!isset($_SESSION["user"])){
        header("Location: ../index.php"); exit();
    }
    $users = getEmployee();
?>

<body>
<table class ="table">
  <thead>
    <tr>
    <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone<br>Number</th>
      <th scope="col">Street No.</th>
      <th scope="col">City</th>
      <th scope="col">State</th>
      <th scope="col">Postal<br>Code</th>
      <th scope="col">Age</th>
      <th scope="col"><button type="button" class="btn btn-primary btn btn-dark pull-right" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-plus"></i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus" viewBox="0 0 16 16"><path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/><path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/><th scope="col"><div class="d-flex justify-content-evently"> </button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Employee</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form action="" class="row">
          <div class="row">
            <div class="col mb-3">
              <select name="gender" id="gender" placeholder="Gender" class="form-select" aria-label="Default select example">
                <option value="Ms">Ms</option>
                <option value="Mr">Mr</option>
                <option value="Other">Other</option>    
              </select>
            </div>
            <div class="col">
              <input type="text" class="form-control" placeholder="Id">
            </div>
            <div class="col">
              <input type="text" class="form-control" placeholder="Age">
             </div>
          </div>

          <div class="row">
          <div class="col mb-3">
              <input type="text" class="form-control" placeholder="First name">
            </div>
            <div class="col">
              <input type="text" class="form-control" placeholder="Last name">
             </div>
          </div>
          <div class="row">
            <div class="col mb-3">
              <input type="text" class="form-control" placeholder="Phone number">
            </div>
            <div class="col">
              <input type="text" class="form-control" placeholder="Email">
             </div>
          </div>

          <div class="row">
            <div class="col mb-3">
              <input type="text" class="form-control" placeholder="City">
            </div>
            <div class="col">
              <input type="text" class="form-control" placeholder="Street Nº">
             </div>
          </div>

          <div class="row">
            <div class="col mb-3">
              <input type="text" class="form-control" placeholder="State">
            </div>
            <div class="col">
              <input type="text" class="form-control" placeholder="Postal Code">
             </div>
          </div>

        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Add Employee</button>
      </div>
    </div>
  </div>
</div>



</svg> </a>
</div></th>
    </tr>
  </thead>
  <tbody>
    
    <?php foreach($users as $user); ?>
      <!-- recorrer los diferentes tipos de arrays y objetos -->
      <a href="" style="cursor:pointer">
      <tr>
        <a href="">
        <td><?php echo $user['name']?></td>
        <td><?php echo $user['email']?></td>
        <td><?php echo $user['phoneNumber']?></td>
        <td><?php echo $user['streetAddress']?></td>
        <td><?php echo $user['city']?></td>
        <td><?php echo $user['state']?></td>
        <td><?php echo $user['postalCode']?></td>
        <td><?php echo $user['age']?></td>
        <td>
          
          <a href ="../src/library/employeeController.php" class="btn btn-sm btn-outline-success"data-id="'+data[count].id'"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
  <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
</svg></a>
          <a href ="../src/library/employeeController.php" class="btn btn-sm btn-outline-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
  <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
</svg></a>
        </td>
      </tr>
      
      <?php endforeach;; ?>
  </tbody>
  </table>
  <!--MODAL FOR EDIT AND ADD-->

    </div>
<?php
    if(isset($_POST['save'])){
        //open the json file
        $data = file_get_contents('members.json');
        $data = json_decode($data);
 
        //data in out POST
        $input = array(
            'id' => $_POST['id'],
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'gender' => $_POST['gender'],
            'city' => $_POST['city'],
            'state' => $_POST['state'],
            'age' => $_POST['age'],
            'postalCode' => $_POST['postalCode'],
            'phoneNumber' => $_POST['phoneNumber']
        );
 
        //append the input to our array
        $data[] = $input;
        //encode back to json
        $data = json_encode($data, JSON_PRETTY_PRINT);
        file_put_contents('members.json', $data);
 
    }
?>



</form>


  </div>

  


  
</body>
<?php require_once "../assets/html/footer.html"; ?>
</html>
