<!-- TODO Main view or Employees Grid View here is where you get when logged here there's the grid of employees -->
<?php
require '../src/dashboard2.php';

$users = getUsers();
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
  </li>
</ul>

</form>
</div>
<!-- Esquema de trabajadores  -->
<table class="table">
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
      <th><button type="button" class="btn btn-success">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
    <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"></path>
    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"></path>
    </svg>
    </button></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Mark Otto</th>
      <td>MarkOtto@gmail.com</td>
      <td>658812894</td>
      <td>Street 1234</td>
      <td>Barcelona</td>
      <td>Single</td>
      <td>08001</td>
      <td>23</td>
      <td><button type="button" class="btn btn-outline-danger">
    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
    <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"></path>
    </svg>
    </button></td>
    <tr>
      <th scope="row">Jacob</th>
      <td>Jacob</td>
      <td>657591894</td>
      <td>Street 123</td>
      <td>Barcelona</td>
      <td>Single</td>
      <td>08001</td>
      <td>25</td>
      <td><button type="button" class="btn btn-outline-danger">
    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
    <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"></path>
    </svg>
    </button></td>
    </tr>
    <tr>
      <th scope="row">Larry the Bird</th>
      <td>LarrythBird@iclou.com</td>
      <td>648354738</td>
      <td>Street tw231r</td>
      <td>London</td>
      <td>Single</td>
      <td>46721</td>
      <td>39</td>
      <td><button type="button" class="btn btn-outline-danger">
    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
    <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"></path>
    </svg>
    </button></td>
    </tr>
  </tbody>
</table>
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
    </tr>
  </thead>
  <tbody>
    <?php foreach($users as $user): ?>
      <tr>
        <td><?php echo $user['name']?></td>
        <td><?php echo $user['email']?></td>
        <td><?php echo $user['phoneNumber']?></td>
        <td><?php echo $user['streetAddress']?></td>
        <td><?php echo $user['city']?></td>
        <td><?php echo $user['state']?></td>
        <td><?php echo $user['postalCode']?></td>
        <td><?php echo $user['age']?></td>
      </tr>
      <?php endforeach;; ?>
  </tbody>
  </table>
</body>
</html>