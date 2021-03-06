<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Granppz</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <link rel="shortcut icon" href="../logo/pp.png" type="image/x-png">
</head>
<body>
<div class="home">
    <div class="row">
        <div class="col-md-9 bg-light">
            <a href="../view/home.php"><img src="../logo/pp.png" width="100"></a>  
        </div>
        <div class="col-md-3 bg-light">
        <div class="log-home">
            <br>
            <a href="../view/login.php">LOGIN</a>
        </div>
        </div>
    </div>
</div>
<!-- carousel de enfeite para deixar o site mais vistoso e bonito-->
    <div class="carou-home">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
    <!-- slides do carousel para indicar a ordem e por onde começa-->
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
    <!-- seleçãode imagens e formatação de tamanhos-->
        <div class="carousel-item active justify-text-center">
            <img class="d-block img-fluid w-100" src="../banners/banner1.jpg" heigth="100px" alt="Piscina">
        <div class="carousel-caption d-none d-md-block">
        <div class="texto-c">
            <h5>Ed Sheeran</h5>
            <p>novo album</p>
        </div>
        </div>
        </div>
        <div class="carousel-item text-center justify-text-center">
            <img class="d-block img-fluid w-100" src="../banners/banner2.jpg" heigth="100px" alt="Lobby">
        <div class="carousel-caption d-none d-md-block">
        <div class="texto-c">
            <h5>Martin Garrix</h5>
            <p>Novo Single</p>
        </div>
        </div>   
        </div>
        <div class="carousel-item text-center justify-text-center">
            <img class="d-block img-fluid w-100" src="../banners/banner3.jpg" heigth="100px" alt="Crianças">
        <div class="carousel-caption d-none d-md-block">
        <div class="texto-c">
            <h5>OneRepublic</h5>
            <p>Rescue Me</p>
        </div>
        </div>
        </div>
    </div>
    <!-- botões para passsar e voltar o carousel-->
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Próximo</span>
    </a>
</div>
</div>
<div class="row">
<div class="col-md-4 bg-dark"></div>
<div class="col-md-4 text-center">
<div class="mod1">
<br><br><br>
<div class="card bg-light border-0" style="width: 18rem;">
<img class="card-img-top" src="../logo/granppz.png" alt="Imagem de capa do card">
<div class="card-body">
<h5 class="card-title">Quem somos?</h5>
<br>
<button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#ExemploModalCentralizado">
        Click e descubra!
      </button>
      
      <!-- Modal -->
      <div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="TituloModalCentralizado">Quem Somos: </h5>
              <br><br>
              <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body text-justify">
            <p> O Granppz e uma rede social que serve para compartilhar
                os seu melhores momentos com seus amigos e familiares, ser
                eclético aqui torna tudo mais divertido para você e os seus
                amigos. Trabalhamos de forma aberta e com diversas parcerias,
                queremos sempre que a sua experiência para com a nossa 
                plataforma seja única. Hoje trabalhamos para que sejamos a
                maior rede Social e a primeira desse tipo que mescla música e
                seus amigos aos seus melhores momentos. Venha aproveitar! </p>
            </div>
            <div class="text-center">
                <img src="../logo/granppz.png" width="175">
            </div>
            <br><br>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
          </div>
        </div>
      </div>
</div>
</div>
</div>
<br><br>
</div>
<div class="col-md-4 bg-dark"></div>
</div>
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4 bg-dark"></div>
    <div class="col-md-4"></div>
</div>

<footer class="page-footer font-small blue">
    <div class="footer-copyright text-center py-3 bg-light">
        © 2019 Copyright: <a href="../view/home.html"> Granppz.com</a>
    </div>
</footer>
<script src='../js/jquery-3.4.1.min.js'></script>
    <script src='../js/bootstrap.min.js'></script>
</body>
</html>