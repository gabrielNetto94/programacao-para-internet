function validateForm() {

    var valueYear = document.getElementById("release_year").value;
    var title = document.getElementById("title").value;
    var author = document.getElementById("author").value;
    var number_pages = document.getElementById("number_pages").value;
    var genre = document.getElementById("genre").value;

    if (title.trim() == "" || author.trim() == "" || genre.trim() == "" || number_pages <= 0) {
        alert("Preencha todos os campos corretamente");

    } else if (valueYear < 1700 || valueYear > 2020) {
        alert("Ano inválido")

    } else {
        document.getElementById("form").submit();
    }

}

// Get the modal
var modal = document.getElementById("myModal");
// Get the button that opens the modal
var btn = document.getElementById("myBtn");
// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];
// When the user clicks the button, open the modal 
btn.onclick = function () {
    modal.style.display = "block";
}
// When the user clicks on <span> (x), close the modal
span.onclick = function () {
    modal.style.display = "none";
}
// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
document.onkeydown = function (evt) {
    if (evt.keyCode == 27) {
        modal.style.display = "none";
    }

}

function filterData(str) {

    if (str.length == 0) {

        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {

                document.getElementById("teste").innerHTML = this.responseText;
                //console.log(this.responseText);
                
            }
        };
        xmlhttp.open("GET", "../backend/filter.php?string=" + str, true);
        xmlhttp.send();
    }
}


function generate_table() {
    // get the reference for the body
    var body = document.getElementsByTagName("body")[0];
  
    // creates a <table> element and a <tbody> element
    var tbl = document.createElement("table");
    var tblBody = document.createElement("tbody");
  
    // creating all cells
    for (var i = 0; i < 2; i++) {
      // creates a table row
      var row = document.createElement("tr");
  
      for (var j = 0; j < 2; j++) {
        // Create a <td> element and a text node, make the text
        // node the contents of the <td>, and put the <td> at
        // the end of the table row
        var cell = document.createElement("td");
        var cellText = document.createTextNode("cell in row "+i+", column "+j);
        cell.appendChild(cellText);
        row.appendChild(cell);
      }
  
      // add the row to the end of the table body
      tblBody.appendChild(row);
    }
  
    // put the <tbody> in the <table>
    tbl.appendChild(tblBody);
    // appends <table> into <body>
    body.appendChild(tbl);
    // sets the border attribute of tbl to 2;
    tbl.setAttribute("border", "2");
  }