<!DOCTYPE html>
<html>

<head>
    <title>Livros</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="style.css">

    <style>
        #btn-submit:hover {
            cursor: pointer;
            background-color: #666;
        }
    </style>
</head>

<body onload="loadTable()">
    <h2>Listagem dos livros</h2>
    <button id="myBtn">
        <h3>Cadastrar livro</h3>
    </button>

    <div style=" float: right; font-size:20px;">
        Pesquisar
        <br>
        <input id="input-search" style="font-size:17px;" onkeyup="filterData(this.value)" placeholder="Título, autor, ano lançamento" type="text"></input>
    </div>

    <div id="tableData"></div>


    <!-- The Modal -->
    <div id="myModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>
            <h1>Cadastro de livro</h1>
            <form id="form" action="../backend/register_book.php" method="POST" />

            Título: <input id="title" type="text" name="tittle" required /><br>
            Autor: <input id="author" type="text" name="author" required /><br>
            Ano de lançamento: <input id="release_year" type="number" name="release_year" required /><br>
            Número de páginas: <input id="number_pages" type="number" name="number_pages" required /><br>
            Gênero: <input id="genre" type="text" name="genre" required /><br>
            Classificação indicativa: <select name="parental_rating">
                <option value="Livre">Livre</option>
                <option value="10 anos">10 anos</option>
                <option value="12 anos">12 anos</option>
                <option value="14 anos">14 anos</option>
                <option value="16 anos">16 anos</option>
                <option value="18 anos">18 anos</option>
            </select><br><br>

            <input id="btn-submit" onclick="validateForm()" value="Cadastrar" />
            </form>
        </div>
    </div>


    <footer>
        <script src="script.js"></script>
    </footer>

</body>

</html>