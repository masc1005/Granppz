<?php 
session_start(); 

?>


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
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <div class="home">
        <div class="row">
            <div class="col-md-12 text-center">
                <br>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <br>
                <a href="../view/publi.php"><img src="../logo/granppz.png" width="175"></a>
            </div>
        </div>
        <hr/>
        <div class="row">
            <div class="col-md-4 text-center text-shadow">
                <a href="../view/publi.php"> PUBLICAÇÕES </a>
            </div>
            <div class="col-md-4 text-center text-shadow">
                <a href="../view/feed.php"> MEU PERFIL </a>
            </div>
            <div class="col-md-4 text-center">
                <a href="../view/songs.php"> MUSICAS </a>
            </div>
        </div>
    </div>
    <hr/>
    <div class="row">
        <div class="col-md-4 text-center">
            <br>
            <?php
            $nome = $_SESSION['user'];
            require_once '../control/Conexao.php';

            $sql = "SELECT nome, sobrenome, nasc FROM cadastro WHERE user = '$nome' ";
                    //$sql = "SELECT * FROM cadastro INNER JOIN postar ON cadastro.id_cad = postar.nomeUser ";
            $result = mysqli_query($conexao, $sql);

            while($rows = mysqli_fetch_array($result)) {
                $_SESSION['nomes'] = $rows['nome'];
                $_SESSION['sobren'] = $rows['sobrenome'];
                $_SESSION['dataN'] = $rows['nasc'];
            }

            $_SESSION['nomeCard'] = $_SESSION['nomes'];
            $_SESSION['sobrenCard'] = $_SESSION['sobren'];
            $_SESSION['datanCard'] = $_SESSION['dataN'];

            $data = $_SESSION['datanCard'];

            ?>
            <div class="user">
                <div class="card" style="width: 15rem;">
                    <img class="card-img-top" src="../logo/avatar.png" >
                    <div class="card-body">
                    </div>
                    <ul class="list-group list-group-flush">
                        <h5 class="card-title"> <?php echo $_SESSION['user']; ?> </h5>
                        <li class="list-group-item"> <?php echo $_SESSION['nomeCard']; ?> <?php echo $_SESSION['sobrenCard']; ?></li>
                        <li class="list-group-item"><?php echo date('d/m/Y', strtotime($data)); ?> </li>
                        <li class="list-group-item"><a href="../view/home.php"> LOG OUT </a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <form  method="post" action="../control/postar.php">
                <div class="form-group">
                    <label for="exampleFormControlTextarea1"><b>Em que a musica te inspirou hoje?</b></label><br>
                    <label for="exampleFormControlTextarea1"> Texto</label>
                    <textarea class="form-control" required="" name="texto" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-secondary align-content-right">Publicar</button>
            </form>
            <br>
            <div class="post-content">
                <?php 

                require_once '../control/Conexao.php';

                $sql = "SELECT dataPost FROM postar WHERE id_postar = (SELECT MAX(id_postar) FROM postar)";
                $result = mysqli_query($conexao, $sql);

                while($rows = mysqli_fetch_array($result)) {



                    ?> </span>
                    <?php

                    $nome = $_SESSION['user'];
                    require_once '../control/Conexao.php';

                    $sql = "SELECT * FROM postar WHERE nomeUser = '$nome' ";
                    //$sql = "SELECT * FROM cadastro INNER JOIN postar ON cadastro.id_cad = postar.nomeUser ";
                    $result = mysqli_query($conexao, $sql);

                    while($rows = mysqli_fetch_array($result)) {

                        echo "<br>";
                        $datePost = $rows['dataPost'];


                        ?>
                        <hr/>
                        <span class="text-muted small"><i class fa-user></i> <?php echo $_SESSION['user']."  - "; ?> <?php echo date('d/m/Y \à\s H:i:s', strtotime($datePost)); ?><i class="fa-lock"></i> </span>
                        <div class="media">
                            <div clas="media-body">


                                <p>
                                    <?php    
                                    echo $rows['texto'];


                                    ?>
                                </p>
                                <br>
                                <button><i class="material-icons">thumb_up</i></button>
                                <button><i class="material-icons">thumbs_up_down</i></button>                                                                                                
                                <button><i class="material-icons">thumb_down</i></button>
                                <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="col-md-4">
    <div class="rigth_feed">


    </div>
</div>
</div>
<script src='../js/jquery-3.4.1.min.js'></script>
<script src='../js/bootstrap.min.js'></script>
</body>
</html>