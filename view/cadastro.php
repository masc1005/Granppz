<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Granppz - Cadastro</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <link rel="shortcut icon" sizes="50x50" href="../logo/pp.png" type="image/x-png">
</head>
<body background="../logo/bck2.jpg">
    <div class="home">
    <div class="row">
        <div class="col-md-12 text-center">
         <a href="../view/home.php"><img src="../logo/pp.png" width="110"></a>
        </div>
    </div>
    </div>
    <br><br>
    <div class="cad-form">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
                <form action="../control/insert.php" method="POST"> 
                    <h3>Cadastro</h3><br>
                        <div class="form-row">
                          <div class="">
                            <label for="validationServer01">Priemiro nome</label>
                            <input type="text" class="form-control" id="validationServer01" name="nome" placeholder="Nome" required>
                            <br>
                          </div>
                          <div class="">
                            <label for="validationServer02">Ultimo nome</label>
                            <input type="text" class="form-control" id="validationServer02" name="unome" placeholder="Sobrenome" required>
                            <br>
                          </div>
                          <div class="">
                            <label for="validationServerUsername">User</label>
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupPrepend3">@</span>
                              </div>
                              <input type="text" class="form-control" id="validationServerUsername" name="user" placeholder="User" required>
                              <br>
                            </div>
                          </div>
                        </div>
                        <br>
                        <div class="">
                          <div class="">
                            <label for="validationServer03">Nascimento</label>
                            <input type="date" class="form-control" id="validationServer03" name="nascimento" placeholder="" required>
                            <br>
                          </div> 
                        </div>
                          <br>
                          <div class="">
                            <label for="validationServer04">Senha</label>
                            <input type="password" class="form-control" id="validationServer04" name="senha" placeholder="Senha" required>
                        </div>
                        <div class="form-group">
                          <div class="form-check">
                            <input class="form-check-inpu" type="checkbox" value="" id="invalidCheck3" required>
                            <label class="form-check-label" for="invalidCheck3">
                                Aceito o termos e condições
                            </label>
                          </div>
                        </div>
                        <button class="btn btn-secondary" type="submit">Cadastrar</button>
                      </form>


        </div>
    </div>
        <div class="col-md-4"></div>
    </div>

    <br><br><br><br>
    <footer class="page-footer font-small blue">
            <div class="footer-copyright text-center py-3 bg-light">© 2019 Copyright:
              <a href="../view/index.html"> Granppz.com</a>
            </div>
          </footer>
    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>