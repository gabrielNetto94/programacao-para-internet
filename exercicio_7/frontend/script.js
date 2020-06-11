

//document.getElementById("btn-submit").addEventListener("mouseover", mouseOver);

function validateForm() {


    var title = document.getElementById("title").value;
    var author = document.getElementById("author").value;
    var valueYear = document.getElementById("release_year").value;
    var number_pages = document.getElementById("number_pages").value;
    var genre = document.getElementById("genre").value;

    if (title.trim() == "" || author.trim() == "" || genre.trim() == "" || number_pages <= 0) {
        alert("Preencha todos os campos corretamente");
    } else if (valueYear < 1700 || valueYear > 2020) {
        alert("Ano inválido");

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

    if (str.trim == " ") {
        console.log("@");
        loadTable();
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();

        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {

                var response = this.responseText;
                document.getElementById("tableData").innerHTML = response;

            }
        };
        xmlhttp.open("GET", "../backend/filter.php?string=" + str, true);
        xmlhttp.send();
    }
}

function loadTable() {

    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {

            var response = this.responseText;
            document.getElementById("tableData").innerHTML = response;
        }
    };
    xmlhttp.open("GET", "../backend/filter.php?string=" + " ", true);
    xmlhttp.send();

}
