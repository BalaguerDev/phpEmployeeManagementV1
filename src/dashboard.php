<!-- TODO Main view or Employees Grid View here is where you get when logged here there's the grid of employees -->
<?php
require '../src/library/employeeManager.php';

$users = getEmployee();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="assets/css/main.css">
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
<body>
<div class="p-3 mb-2 bg-light text-dark">
<ul class="nav">
  <li class="nav-item">
    <a class="nav-link disabled" aria-current="page">Employees Management</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Dashboard</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled ">Employee</a>
  </li>
<div class="sticky-lg-top"><a class="nav-link active" href="./library/sessionHelper.php">Log Out</a></div>
</div>
  </li>
</ul>
<div class="d-flex justify-content-evently"><a href="" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add New Employee</a>
</div>
</form>
</div>
<!-- Esquema de trabajadores  -->

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
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    
    <?php foreach($users as $user): ?>
      <!-- recorrer los diferentes tipos de arrays y objetos -->
      
      <tr>
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
  "id": 1,
        "name": "Rack",
        "lastName": "Lei",
        "email": "jackon@network.com",
        "gender": "man",
        "city": "San Jone",
        "streetAddress": "126",
        "state": "CA",
        "age": "24",
        "postalCode": "394221",
        "phoneNumber": "7383627627"
<form method="POST">
    <a href="src\dashboard.php">Back</a>
    <p>
        <label for = "id">ID</label>
        <input type="text" id="id" name="id">
    </p>
    <p>
        <label for = "name">Name</label>
        <input type="text" id="name" name="name">
    </p>

    <p>
        <label for = "email">email</label>
        <input type="text" id="email" name="email">
    </p>

    <p>
        <label for ="gender">Gender</label>
        <input type="text" id="gender" name="gender">
    </p>

    <p>
        <label for = "city">City</label>
        <input type="text" id="city" name="city">
    </p>

    <p>
        <label for = "state">State</label>
        <input type="text" id="state" name="state">
    </p>
    <p>
        <label for = "age">Age</label>
        <input type="text" id="age" name="age">
    </p>

    <p>
        <label for = "postalCode">Postal Code</label>
        <input type="text" id="postalCode" name="postalCode">
    </p>

    <p>
        <label for = "phoneNumber">Phone Number</label>
        <input type="text" id="phoneNumber" name="phoneNumber">
    </p>
    <input type="submit" name="save" value="Save">
</form>




</form>


  </div>
</body>
</html>
