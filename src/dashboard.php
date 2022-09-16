<!-- TODO Main view or Employees Grid View here is where you get when logged here there's the grid of employees -->
<?php require_once("library\loginManager.php");?>

<?php
    session_start();

    if(!isset($_SESSION["user"])){
        header("Location: index.php"); exit();
    }

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
    <a class="nav-link disabled" aria-current="page" href="#">Employees Management</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Dashboard</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled ">Employee</a>
  </li>
  <a class="nav-link active" id ="logOut">Log Out</a>
  </li>
</ul>
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
    </tr>
    <tr>
      <th scope="row">Jacob</th>
      <td>Jacob</td>
      <td>657591894</td>
      <td>Street 123</td>
      <td>Barcelona</td>
      <td>Single</td>
      <td>08001</td>
      <td>25</td>
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
    </tr>
  </tbody>
</table>

</body>
</html>