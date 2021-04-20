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
            <div class="col-md-11 text-center">
                <br>
                <a href="../view/publi.php"><img src="../logo/granppz.png" width="175"></a>
            </div>
            <div class="col-md-1 text-center">
                <br>
                <a href="../view/home.php"> LOG OUT </a>
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
        <div class="col-md-4">
        </div>
        <div class="col-md-4">
            <form  method="post" action="../control/postar.php">
                <div class="form-group">
                    <label for="exampleFormControlTextarea1"><b>Em que a musica te inspirou hoje?</b></label><br>
                    <label for="exampleFormControlTextarea1"> Texto</label>
                    <textarea class="form-control" required="" name="pos" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-secondary">Publicar</button>
            </form>
            <br>
        </div>
        <div class="col-md-4">
        </div>
    </div>
    <hr/>
    <div class="row">
    <div class="col-md-2"></div>
        <div class="col-md-8">
            <?php

                        require_once '../control/Conexao.php';

                        $sql = "SELECT dataPost FROM postar WHERE id_postar = (SELECT MAX(id_postar) FROM postar)";
                        $result = mysqli_query($conexao, $sql);

                        while($rows = mysqli_fetch_array($result)) {

                        

                        // ---------------------------------------------------------------------------------------
                            
                            require_once '../control/Conexao.php';

                            $sql = "SELECT * FROM postar";
                        //$sql = "SELECT * FROM cadastro INNER JOIN postar ON cadastro.id_cad = postar.nomeUser ";
                            $result = mysqli_query($conexao, $sql);

                            while($rows = mysqli_fetch_array($result)) {
                                $datePubli = $rows['dataPost'];
                            ?>
                            <hr/>
            <div class="post-content">
                <h4 class="text-center"> <?php echo $rows['nomeUser']."<br>"; ?> </h4>
                <div class="text-center">
                <span class="text-muted small text-center"><i class fa-user></i><i class="fa-lock"></i>
                <?php echo date('d/m/Y \à\s H:i:s', strtotime($datePubli))."<br>"; ?></span>
                </div>
                <div class="media">
                    <div clas="media-body">
                        <p><?php echo $rows['texto'].""; ?></p>                            
                        <br>                     
                        <form method="post" action="">    
                            <button><i class="material-icons">thumb_up</i></button>
                            <button><i class="material-icons">thumbs_up_down</i></button>                                                                                                
                            <button><i class="material-icons">thumb_down</i></button>
                        </form>
                        </div>
                        </div>
                    </div>
                    <?php
                       }
                    }
                    ?>
    </div>
    <div class="col-md-2"></div>
</div>
<script src='../js/jquery-3.4.1.min.js'></script>
<script src='../js/bootstrap.min.js'></script>
</body>
</html>