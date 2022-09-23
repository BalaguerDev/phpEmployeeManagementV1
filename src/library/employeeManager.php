<?php


/* AGREGAR EMPLEADO// EMPLEADO NUEVO */
function addEmployees($newEmployee)
{
    $path = file_get_contents("../../resources/employees.json");
    $employees = json_decode($path, true);

    $newEmployee["id"] = end($employees)["id"] + 1;          //función para que no se repitan los id, y autoasignarles un numero dependiendo del último
    array_push($employees, $newEmployee);
    file_put_contents("../../resources/employees.json", json_encode($employees));
    echo json_encode($employees);
}





/* EDITAR EMPLEADO */
function editEmployee(array $updateEmployee)
{
    /*     $editRow = $_GET['editRow'];*/

    $employees = json_decode(file_get_contents("../../resources/employees.json"), true);

    /* 
    if(!empty($employees)) */
    for ($i = 0; $i < count($employees); $i++) {
        for ($e = 0; $e < count($employees[$i]); $e++) {
            if ($employees[$e]["id"]     ==    $updateEmployee['id']) {

                $employees[$e]["name"]            =      $updateEmployee['name'];
                $employees[$e]["lastName"]        =      $updateEmployee['lastName'];
                $employees[$e]["email"]           =      $updateEmployee['email'];
                $employees[$e]["city"]            =      $updateEmployee['city'];
                $employees[$e]["streetAddress"]   =      $updateEmployee['streetAddress'];
                $employees[$e]["state"]           =      $updateEmployee['state'];
                $employees[$e]["age"]             =      $updateEmployee['age'];
                $employees[$e]["postalCode"]      =      $updateEmployee['postalCode'];
                $employees[$e]["phoneNumber"]     =      $updateEmployee['phoneNumber'];
            }
        }
        $employees = json_encode($employees);
        file_put_contents("../../resources/employees.json", $employees);

        header('location: ../dashboard3.php');
    }
}




/* DELETE EMPLEADO */
function deleteEmployee($deleteId)
{
    $path = json_decode(file_get_contents("../../resources/employees.json"), true);


    for ($e = 0; $e < count($path); $e++) {

        if (strval($path[$e]["id"]) === $deleteId) {
            $employeesPos = array_search($path[$e], $path);
            array_splice($path, $employeesPos, 1);
        }
    }
    file_put_contents("../../resources/employees.json", json_encode($path));
    $arrayPath = (array)$path;
    echo json_encode($arrayPath);
}


function getEmployees($id)
{
    $path = json_decode(file_get_contents("../resources/employees.json"), true);

    for ($e = 0; $e < count($path); $e++) {
        //strval = string value = valor insertado lo convierte a un string
        if ($path[$e]["id"] == $id) {

            $name = $path[$e]['name'];
            $lastName = $path[$e]['lastName'];
            $email = $path[$e]['email'];
            $age = $path[$e]['age'];
            $streetAddress = $path[$e]['streetAddress'];
            $city = $path[$e]['city'];
            $state = $path[$e]['state'];
            $postalCode = $path[$e]['postalCode'];
            $phoneNumber = $path[$e]['phoneNumber'];

            $form = <<< form
        <form class="row g-3" method="POST" name="frmUpdate" action="./library/employeeController.php?action=edit&id=$id">
 
            <div class="modal-dialog">
                <h3 class="text-primary mb-3 mt-5 text-center" >Update employee</h3>
        
                
                    <div class="row mb-3">
                        <div class="col">
                            <label for="ageUser" class="form-label">Age:</label>
                            <input type="number" class="form-control" name="txtAge" value="$age" id="ageUser">
                        </div>
                        <div class="col">
                            <label for="nameUser" class="form-label">Name:</label>
                            <input type="text" class="form-control" name="txtName" value="$name" id="nameUser">
                        </div>
                        <div class="col">
                            <label for="lastNameUser" class="form-label">Last name:</label>
                            <input type="text" class="form-control" name="txtLastName" value="$lastName" id="lastNameUser">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col ">
                            <label for="emailUser" class="form-label">Email:</label>
                            <input type="email" class="form-control"  name="txtEmail" value="$email" id="emailUser">
                        </div>
                        <div class="col">
                        <label for="phoneUser" class="form-label">Phone:</label>
                        <input type="number" class="form-control" name="txtPhone" value="$phoneNumber" id="phoneUser">
                        </div>
                    </div>
        
                    <div class="row mb-3">
                        <div class="col ">
                            <label for="streetAddUser" class="form-label">Street address:</label>
                            <input type="text" class="form-control" name="txtStreet" value="$streetAddress" id="streetAddUser">
                        </div>
                    </div>


                    <div class="row mb-3">
                        <div class="col">
                            <label for="cityUser" class="form-label">City:</label>
                            <input type="text" class="form-control" name="txtCity" value="$city" id="cityUser">
                        </div>
                        <div class="col mb-3">
                            <label for="stateUser" class="form-label">State</label>
                            <input type="text" class="form-control" name="txtState" value="$state" id="stateUser">
                        </div>
                        <div class="col">
                            <label for="postalCodeUser" class="form-label">Postal Code:</label>
                            <input type="number" class="form-control" name="txtPostalC" value="$postalCode" id="postalCodeUser">
                        </div>
                    </div>
                        
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button type="submit" class="btn btn-primary">Sign in</button>
                    </div>
                </div>
            </div>
        </form>

        form;
        }
    }
    echo $form;
}

/* function updateEmployee(array $updateEmployee)
{
// TODO implement it
}  */


function listEmployees()
{
    $path = json_decode(file_get_contents("../../resources/employees.json"), true);
    echo json_encode($path);
}


function removeAvatar($id)
{
    // TODO implement it
}  


/*   function getQueryStringParameters(): array
{

}

  

  function getNextIdentifier(array $employeesCollection): int
{

}
*/
