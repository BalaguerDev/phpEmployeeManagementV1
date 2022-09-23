
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
            <tr data-bs-toggle="modal" data-bs-target="#userId${valor.id}" style="cursor:pointer">
                    <th scope="row">${valor.id}</th>
                    <td>${valor.name} ${valor.lastName}</td>
                    <td>${valor.email}</td>
                    <td>${valor.phoneNumber}</td>
                    <td>${valor.city}</td>
                    <td>

                    
                        <button type="submit" class="btn btn-outline-primary"><a href="./employee.php?id=${valor.id}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                            <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"></path>
                            </svg></a>
                        </button>

                        <button type="button" class="btn btn-outline-danger" onclick="deleteRow(${valor.id})">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                            <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"></path>
                            </svg>
                        </button>
                    </td>
                </tr>
                
                
                
<!-- MODAL -->
<!-- SHOW EMPLOYEE INFO  -->
    <div class="modal fade" id="userId${valor.id}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <h3 class="text-primary mb-1 mt-2 text-center" >${valor.name} ${valor.lastName} - ${valor.age} </h3>
            <h6 class="text-primary mb-4 mt-1 text-center" >id : 000${valor.id}</h6>
                
                <div class="modal-body">

                    <div class="row mb-3">
                        <div class="col">
                            <input name="txtEmail"class="form-control" type="text" placeholder="${valor.email}" readonly>
                        </div>
                        <div class="col">
                            <input name="txtPhone"class="form-control" type="Number" placeholder="${valor.phoneNumber}" readonly>
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
                            <input type="submit"   value="Update" id="btnadd" data-bs-dismiss="modal" class="btn btn-secondary mb-2 mt-3 btn-block></input>
                        </div>
                        <div class="col d-flex justify-content-around">
                            <input type="submit"   value="Delete" id="btnadd" data-bs-dismiss="modal" class="btn btn-danger mb-2 mt-3 btn-block"></input>  
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

//SEARCH 

    function myFunction() {
      var input, filter, table, tr, th, i, txtValue;
      input = document.getElementById("myInput");
      filter = input.value.toUpperCase();
      table = document.getElementById("myTable");
      tr = table.getElementsByTagName("tr");
      for (i = 0; i < tr.length; i++) {
        th = tr[i].getElementsByTagName("th")["0"];
        if (th) {
          txtValue = th.textContent || th.innerText;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
          } else {
            tr[i].style.display = "none";
          }
        }       
      }
    }

