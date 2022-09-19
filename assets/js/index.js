//TABLA JSON EMPLOYEE
function jsonToHtmlTable(data) {

    data = JSON.parse("employees.json");

    var table = document.createElement("table");
    var thead = table.createTHead();
    var tbody = table.createTBody();

    var col = [];
    for (var i = 0; i < data.length; i++) {
        for (var key in data[i]) {
            if (col.indexOf(key) === -1) {
                col.push(key);
            }
        }
    }

    var cabecera = thead.insertRow(-1);

    for (var i = 0; i < col.length; i++) {
        var th = document.createElement("th");
        th.innerHTML = col[i];
        cabecera.appendChild(th);
    }



    for (var i = 0; i < data.length; i++) {

        tr = tbody.insertRow(-1);

        for (var j = 0; j < col.length; j++) {
            var tabCell = tr.insertCell(-1);
            tabCell.innerHTML = data[i][col[j]];
        }
    }

    return table;

};



