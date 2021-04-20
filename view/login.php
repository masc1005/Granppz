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
<body background="../logo/bck2.jpg" background-size="cover">
    <div class="home">
    <div class="row">
        <div class="col-md-12 text-center">
            <br>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 text-center">
                <br>
            <a href="../view/home.php"><img src="../logo/granppz.png" width="175"></a>
        </div>
    </div>
    </div>

    <br><br><br><br><br><br>
    <div class="form-login">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4 text-center">
            <form method="POST" action="../control/validarLogin.php">
                <img src="../logo/pp.png" width="75" class="justify-content-right" alt="LOGO">
                <div class="form-group text-center">
                  <label for="exampleInputEmail1">Login</label>
                  <input type="text" class="form-control text-center" name="user" required="" id="exampleInputEmail1" placeholder="user">
                </div>
                <div class="form-group ">
                  <label for="exampleInputPassword1">Senha</label>
                  <input type="password" class="form-control text-center" name="senha" required="" id="exampleInputPassword1" placeholder="senha">
                </div>
                <br>
                <button type="submit" class="btn btn-secondary">Granppz</button><br><br>
                <p>Não possui conta? <a href="cadastro.html">Cadastre-se</a></p>
            </form>
        </div>
        <div class="col-md-4"></div>
    </div>
    </div>

    <br><br><br><br><br><br><br>


    <footer class="page-footer font-small blue">
        <div class="footer-copyright text-center py-3 bg-light">© 2019 Copyright:
          <a href="../view/index.html"> Granppz.com</a>
        </div>
      </footer>
    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>