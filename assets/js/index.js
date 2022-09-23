
listEmployees();

//LIST EMPLOYEES AND SHOW TO THE TABLE
function listEmployees(){
    let contenido = document.getElementById('contenido');

        fetch("./library/employeeController.php?action=listEmployees", { method: "GET" }) 
        .then(res => res.json())
        .then(datos =>{
        /*  console.log(datos)  */
            tabla(datos); 
          /*   console.log(datos); */      
        })
}

function tabla(datos){
/*     console.log(datos)  */
      contenido.innerHTML ='';  
    for(let valor of datos){
     
        contenido.innerHTML +=`
            <tr data-bs-toggle="modal" data-bs-target="#userId${valor.id}" id="rowEmployee" style="cursor:pointer">
                    <th scope="row">${valor.id}</th>
                <td>${valor.name} ${valor.lastName}</td>
                <td>${valor.email}</td>
                <td>${valor.phoneNumber}</td>
                <td>${valor.city}</td>
                <td>

                    <button type="button" class="btn btn-outline-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16"><path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"></path></svg></button>
                </td>
            </tr>
                
                
                
<!-- MODAL -->
<!-- SHOW EMPLOYEE INFO  -->
    <div class="modal fade modalclassss" id="userId${valor.id}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <h3 class="text-primary mb-1 mt-2 text-center" >${valor.name} ${valor.lastName} - ${valor.age} </h3>
            <h6 class="text-primary mb-4 mt-1 text-center" >id : 000${valor.id}</h6>
                
                <div class="modal-body">

                    <div class="row mb-3">
                        <div class="col">
                            <input name="txtEmail"class="form-control " type="text" placeholder="${valor.email}" readonly>
                        </div>
                        <div class="col">
                            <input name="txtPhone"class="form-control " type="Number" placeholder="${valor.phoneNumber}" readonly>
                        </div>
                    </div>
        
                    <div class="row mb-3">
                        <div class="col ">
                            <input name="txtPhone"class="form-control" type="Number" placeholder="${valor.streetAddress}" readonly>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col">
                            <input name="txtPhone"class="form-control" type="Number" placeholder="${valor.city}" readonly>
                        </div>
                        <div class="col">
                            <input name="txtPhone"class="form-control" type="Number" placeholder="${valor.state}" readonly>
                        </div>
                        <div class="col">
                            <input name="txtPhone"class="form-control" type="Number" placeholder="${valor.postalCode}" readonly>
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col d-flex justify-content-around">
                            <a href="./employee.php?id=${valor.id}"><input type="submit" value="Update" id="btnadd" data-bs-dismiss="modal" class="btn btn-outline-success mb-2 mt-3 btn-block"></a>
                        </div>

                        <div class="col d-flex justify-content-around">
                            <input type="submit"   value="Delete" id="btnadd" data-bs-dismiss="modal" class="btn btn-outline-danger mb-2 mt-3 btn-block" onclick="deleteRow(${valor.id})"></input>  
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>`



    }
}



//ADD NEW EMPLOYEE
let btnadd = document.getElementById('btnadd');
let addForm= document.getElementById("addForm");

addForm.addEventListener("submit", e =>{
  e.preventDefault();
 /*  console.log("acabamos de crear") */

  let formData= new FormData(addForm);          
  fetch("./library/employeeController.php?action=addNewEmployees", { 
    method: "POST",
    body:  formData,
  
}) 
        .then(res => res.json())
        .then(datos =>{

             tabla(datos); 
        
   
          })
})

//DELETE

function deleteRow(id){
    fetch(`./library/employeeController.php?action=delete&id=${id}`)

.then(res => res.json())
.then(datos =>{

     tabla(datos); 
  })

}


const rowEmployee = document.getElementById('rowEmployee')
const modalclassss = new mdb.Modal(rowEmployee)
modalclassss.hide()


