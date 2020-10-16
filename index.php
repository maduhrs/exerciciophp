<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="public/css/bootstrap/css/bootstrap.min.css">

    <title> Meu site!</title>

    <!-- fonte awesome -->
    <link rel="stylesheet" href="public/css/fontawesome-free-5.14.0-web/css/all.css">

    <!-- icomoon -->
    <link rel="stylesheet" href="public/css/style.css">

    <!-- Meu Estilo -->
    <link rel="stylesheet" href="public/css/meuestilo.css">
</head>

<body>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->




    <div class="container">
        <header>
            <!-- imagem 1140 -->
            <img src="public/img/Amazon-bannner1140x200.png" alt="" class="img-fluid">
            <!-- menu de navegação  -->

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#"> <img class="meuicone" src="img/2487609.png" alt=""> </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
          <span class="navbar-toggler-icon"></span>
        </button>

                <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item alert-secondary">
                            <a class="nav-link" href="index.php?pg=inicial"> <i class="duda-home"></i> INICIO <span class="sr-only">(página atual)</span></a>
                        </li>
                        <li class="nav-item alert-danger">
                            <a class="nav-link" href="index.php?pg=servicos"> <i class="duda-folder-download "> SOBRE </i> </a>
                        </li>
                        <li class="nav-item alert-warning">
                            <a class="nav-link" href="index.php?pg=produtos"> <i class=" duda-folder"> PRODUTOS </i> </a>
                        </li>
                        <li class="nav-item alert-info">
                            <a class="nav-link" href="index.php?pg=contatos"> <i class=" duda-mail4"> CONTATOS </i> </a>
                        </li>


                    </ul>

                </div>
            </nav>
        </header>

        <!-- conteudo paginas -->
<?php
if ( isset($_GET{'pg'})) {
    $paginas = $_GET['pg'];

switch ($paginas) {
case 'inicial': 
    include "paginas/inicial.php";
        break;
case 'contatos': 
    include "paginas/contatos.php";
        break;
case 'produtos': 
    include "paginas/produtos.php";
        break;
case 'servicos': 
    include "paginas/servicos.php";
        break;
    
    default:
        # code...
        break;
}
   
} else {
    echo "pagina não definida";
}
// include "paginas/inicial.php";



?>


        <!-- fim conteudo paginas -->
        




         <!-- footer -->
    <footer class="container-fluid table-dark">
        <div class="container">
            <h1 class="text-center"> rodape </h1>
            <div class="row">
                <div class="col-3"> Coluna 1 </div>
                <div class="col-3"> Coluna 2 </div>
                <div class="col-3"> Coluna 3 </div>
                <div class="col-3"> Coluna 4 </div>

            </div>
            <div class="row">
                <div class="col-2"> <img class="icone" src="public/img/_Amazon.png" alt="" class="img-fluid"> </div>
                <div class="col-2"> <img src="public/img/2415466.png" alt="" class="img-fluid"> </div>
                <div class="col-2"> <img src="public/img/2487609.png" alt="" class="img-fluid"> </div>
                <div class="col-2"> <img src="public/img/2942659.png" alt="" class="img-fluid"></div>
                <div class="col-2"> <img src="public/img/5000717.png" alt="" class="img-fluid"></div>
                <div class="col-2"> <img src="public/img/amazonn.png" alt="" class="img-fluid"></div>

            </div>

        </div>
    </footer>
    <!-- jQuery -->
    <script src="public/js/jquery-3.5.1.min.js"></script>

    <!-- JavaScript -->
    <script src="public/css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="public/css/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>


