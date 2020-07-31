<!DOCTYPE html>
<html>


<head>
    <title>Livros</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">

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

            <div class="container">
                <h2>Cadastro de livro</h2>
                <form class="form-horizontal" id="form" action="../backend/register_book.php" method="POST">

                    <div class="form-group">
                        <label class="control-label col-sm-2">Título:</label>
                        <div class="col-xs-3">
                            <input type="text" class="form-control" id="title" placeholder="Título do livro" name="title">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2">Autor:</label>
                        <div class="col-xs-3">
                            <input type="text" class="form-control" id="author" placeholder="Autor do livro" name="author">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2">Ano de lançamento:</label>
                        <div class="col-xs-3">
                            <input type="number" class="form-control" id="release_year" placeholder="Ano de lançamento" name="release_year">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2">Número de páginas:</label>
                        <div class="col-xs-3">
                            <input type="number" class="form-control" id="number_pages" placeholder="Número de páginas" name="number_pages">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2">Gênero:</label>
                        <div class="col-xs-3">
                            <input type="text" class="form-control" id="genre" placeholder="Gênero do livro" name="genre">
                        </div>
                    </div>



                    <div class="form-group">
                        <label class="control-label col-sm-2">Classificação indicativa:</label>
                        <div class="col-xs-3">
                            <select class="form-control" id="exampleFormControlSelect1" name="parental_rating">
                                <option value="Livre">Livre</option>
                                <option value="10 anos">10 anos</option>
                                <option value="12 anos">12 anos</option>
                                <option value="14 anos">14 anos</option>
                                <option value="16 anos">16 anos</option>
                                <option value="18 anos">18 anos</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <a id="btn-submit" onclick="validateForm()" class="btn btn-default" value="Cadastrar">Cadastrar</a>
                        </div>
                    </div>


                </form>

            </div><!-- end containar-->

        </div>
    </div>


    <footer>
        <script src="script.js"></script>
    </footer>

</body>

</html>